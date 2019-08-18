<?php

class ShortCodes {
	public static function form_handler( $atts, $content = '' ) {
		$options = Options_Panel::load();
		if ( isset( $options['member_content_active'] ) && intval( $options['member_content_active'] ) == 0 ) {
			return $content;
		}
		$args = shortcode_atts( array(
			'id'   => '1',
			'role' => 'subscriber'
		), $atts );

		if ( ! empty( $content ) ) {
			if ( is_user_logged_in() ) {
				return $content;
			}

			return '<div class="member_only_content"><p>این محتوا برای کاربرانی که در سایت ثبت نام کرده اند در دسترس است.</p></div>';
		}
	}
}