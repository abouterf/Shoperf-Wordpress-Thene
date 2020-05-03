<?php

class View {
	public static function __callStatic( $name, $arguments ) {

		switch ( $name ) {
			case 'render':
				self::render_view_file( $arguments[0] );
			case 'render_partial':
				self::render_partial_file( $arguments[1] );
			case 'renderFile':
				self::render_view_by_include($arguments[0],$arguments[1]);
		}
	}

	private static function render_view_file( $view_name ,$args = null ) {
		$view_name = str_replace( '.', DIRECTORY_SEPARATOR, $view_name );
		$view_name = THEME_VIEW . DIRECTORY_SEPARATOR . $view_name . '.php';
		get_template_part( $view_name . '.php' );
	}

	private static function render_partial_file( $view_name ) {
		get_template_part( 'views/partials' . $view_name . '.php' );
	}

	private static function render_view_by_include($view_name,$data = null){
		$view_name = str_replace('.',DIRECTORY_SEPARATOR,$view_name);
		$view_file_path = THEME_VIEW.DIRECTORY_SEPARATOR.$view_name.'.php';
		if (is_file($view_file_path) && is_readable($view_file_path)){
			!empty($data) ? extract($data):null;
			include $view_file_path;
		}
	}


}
