<?php

class View {
	public static function render_view_file( $file_name ) {
		$view_path = THEME_VIEW.DIRECTORY_SEPARATOR.$file_name;
		return $view_path;
	}
	public static function render_partial_file( $file_name ) {
		$view_path = THEME_PARTIALS.DIRECTORY_SEPARATOR.$file_name;
		return $view_path;
	}
}