<?php

class Cache {
	public static function get( $key ) {
		return get_transient( $key );
	}

	public static function set( $key, $value, $expire = HOUR_IN_SECONDS ) {
		return set_transient( $key, $value, $expire );
	}

	public static function delete( $key ) {
		delete_transient($key);
	}
}