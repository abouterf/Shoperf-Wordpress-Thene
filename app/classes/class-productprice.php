<?php

class productPrice {

	public static function adding_custom_meta_boxes() {
		add_meta_box(
			'my_meta_box',
			__( 'My Meta Box' ),
			array( __CLASS__, 'self::wpdev_price_metabox_function' ),
			'products',
			'normal',
			'default'
		);
	}

	public static function wpdev_price_metabox_function( $post ) {
		wp_nonce_field( array( __CLASS__, 'wpdev_save_price_data' ), 'wpdev_save_price_data_nonce' );
		$value = get_post_meta( $post->ID, '_save_price_value_key', true );
		echo '<label for="wpdev_price_field">قیمت محصول</label>';
		echo '<input type="text" ,id="wpdev_price_field" name="wpdev_price_field" value="' . esc_attr( $value ) . '">';
	}

	public static function wpdev_save_price_data( $post_id ) {
		if ( ! isset( $_POST['wpdev_save_price_data_nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( $_POST['wpdev_save_price_data_nonce'], array( __CLASS__, 'wpdev_save_price_data' ) ) ) {
			return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		if ( ! isset( $_POST['wpdev_price_field'] ) ) {
			return;
		}

		$my_data = sanitize_text_field( $_POST['wpdev_price_field'] );
		update_post_meta( $post_id, '_save_price_value_key', $my_data );
	}

	public static function show_product_price( $post_id ) {
		$value = get_post_meta( $post_id, '_save_price_value_key', true );

		return $value;
	}

	public static function render_price_for_present( $post_id ) {
		$data       = self::show_product_price( $post_id );
		$data       = number_format( $data );
		$final_data =  $data . 'تومان';
		echo $final_data;
	}

	public static function price_column( $columns ) {
		$columns['product_price'] = 'قیمت';

		return $columns;
	}

	public static function show_price_column( $columns, $post_id ) {
		if ( $columns == 'product_price' ) {
			$product_price = get_post_meta( $post_id, '_save_price_value_key', true );
			echo number_format( $product_price );
		}
	}
}

