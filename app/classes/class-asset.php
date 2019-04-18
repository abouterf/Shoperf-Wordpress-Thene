<?php

class Asset {

	public static function css($file_name) {
		$css_file_path = THEME_ASSET.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.$file_name.'.css';
		echo $css_file_path;
	}

	public static function js($file_name) {
		$js_file_path = THEME_ASSET.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.$file_name.'.js';
		echo $js_file_path;
	}

	public static function img($file_name) {
		$img_file_path = THEME_ASSET.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$file_name;
		echo $img_file_path;
	}
}
new Asset();