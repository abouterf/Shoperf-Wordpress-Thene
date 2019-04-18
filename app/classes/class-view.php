<?php

class View {
	public static function __callStatic( $name, $arguments ) {

		switch ( $name ) {
			case 'render':
				self::render_view_file( $arguments[0] );
			case 'render_partial':
				self::render_partial_file( $arguments[1] );
		}
	}

	private static function render_view_file( $view_name ) {
		$view_name = str_replace('.',DIRECTORY_SEPARATOR ,$view_name);
		get_template_part( 'views/' . $view_name );
	}

	private static function render_partial_file( $view_name ) {
		get_template_part( 'views/partials' . $view_name );
	}
}