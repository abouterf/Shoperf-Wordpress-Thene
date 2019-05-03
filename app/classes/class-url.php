<?php
class Url {
	public static function add_args( $params = array() ) {
		return add_query_arg($params);
	}
}