<?php

class ProductImages {
	public static function register_product_images_metabox() {
		add_meta_box(
			'product_images_metabox',
			__( 'گالری تصاویر' ),
			array( __CLASS__, 'self::wpdev_images_metabox_function' ),
			'products',
			'side',
			'default'
		);
	}

	public static function wpdev_images_metabox_function( $post ) {
		View::render( 'admin.metabox.product.product_images' );
	}


	public static function save_product_images( $post_id ) {
		if ( isset( $_POST['slider'] ) && count( $_POST['slider'] ) > 0 ) {
			update_post_meta( $post_id, 'slider_images', $_POST['slider'] );
		}
	}

	public static function get_slider_images( $product_id ) {
		if ( ! $product_id ) {
			return 0;
		}
		$slider_images = get_post_meta( $product_id, 'slider_images', true );
		if ( ! empty( $slider_images ) && is_array( $slider_images ) && count( $slider_images ) > 0 ) {
			return $slider_images;
		}
		return false;
	}
}