<?php

class basket {
	protected $items;

	public static function add( $product_id, $count = 1 ) {
		$product = Product::find( $product_id );
		self::check_existence();
		if ( self::exist( $product_id ) ) {
			$_SESSION['basket']['items'][ $product_id ]['count'] ++;
		} else {
			$_SESSION ['basket']['items'][ $product_id ] = [
				'title' => $product->post_title,
				'price' => productPrice::show_product_price( $product_id ),
				'count' => $count
			];
		}

	}

	public static function remove( $product_id ) {
		if ( self::exist( $product_id ) ) {
			unset( $_SESSION['basket']['items'][ $product_id ] );
		}
	}

	public static function update( $product_id, $count ) {
		if ( self::exist( $product_id ) ) {
			if ( intval( $count ) == 0 ) {
				return self::remove( $product_id );
			}
			$_SESSION['basket'][ $product_id ]['count'] = $count;
		}
	}

	public static function exist( $product_id ) {
		return isset( $_SESSION['basket']['items'][ $product_id ] );
	}

	public static function check_existence() {
		if ( ! isset( $_SESSION['basket'] ) ) {
			$_SESSION['basket'] = [];
		}
	}

	public static function add_to_cart() {

	}

	public static function total_count() {
		if ( isset( $_SESSION['basket']['items'] ) && count( $_SESSION['basket']['items'] ) > 0 ) {
			return count( $_SESSION['basket']['items'] );
		}
	}

	public static function items() {
		if (isset($_SESSION['basket']['items']) && count($_SESSION['basket']['items'])){
			return $_SESSION['basket']['items'];
		}
	}
}