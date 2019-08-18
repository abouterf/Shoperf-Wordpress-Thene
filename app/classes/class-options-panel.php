<?php

class Options_Panel {
	public function __construct() {
		$this->init_panel();
		add_action( 'wpdev_save_options_panel', array( $this, 'save_options_handler' ) );
	}

	public function init_panel() {
		add_action( 'admin_menu', array( $this, 'add_panel_menu' ) );
	}

	public function add_panel_menu() {
		add_theme_page( 'تنظیمات قالب', 'تنظیمات قالب', 'manage_options', 'wpdev_options_panel', array(
			$this,
			'panel_page'
		) );
	}

	public function panel_page() {
		if ( isset( $_POST['save_options'] ) ) {
			do_action( 'wpdev_save_options_panel' );
		}
		$options = self::load();
		View::renderFile( 'admin.options_panel.index' ,compact($options));
	}

	public function save_options_handler() {
		$options                           = self::load();
		$options['member_content_archive'] = isset( $_POST['member_content_archive'] ) ? 1 : 0;
		self::update($options);
	}

	public static function load() {
		return get_option( THEME_OPTIONS );
	}

	public static function update( $options ) {
		update_option( THEME_OPTIONS, $options );
	}
}
