<?php

class basket {
	protected $items;

	public static function add( $product_id ) {
		$product = Product::find( $product_id );
		self::check_existence();
		if ( isset( $_SESSION['basket']['items'][ $product_id ] ) ) {
			$_SESSION['basket']['items'][ $product_id ]['count'] ++;
		} else {
			$_SESSION ['basket']['items'][ $product_id ] = [
				'title' => $product->post_title,
				'price' => productPrice::show_product_price( $product_id ),
				'count' => 1
			];
		}

	}

	public static function remove( $product_id ) {
		if ( isset( $_SESSION['basket']['items'][ $product_id ] ) ) {
			unset( $_SESSION['basket']['items'][ $product_id ] );
		}
	}

	public static function check_existence() {
		if ( ! isset( $_SESSION['basket'] ) ) {
			$_SESSION['basket'] = [];
		}
	}
}