<?php
class Product{
	public static function find( $product_id ) {
		$product = get_post($product_id);
		return $product;
	}
}