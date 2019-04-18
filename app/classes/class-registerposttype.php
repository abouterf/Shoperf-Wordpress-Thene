<?php

class registerPostType {
	public static function register_product_post_type() {
// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'محصولات', 'Post Type General Name', 'twentythirteen' ),
			'singular_name'       => _x( 'محصول', 'Post Type Singular Name', 'twentythirteen' ),
			'menu_name'           => __( 'محصولات', 'twentythirteen' ),
			'parent_item_colon'   => __( 'محصول والد', 'twentythirteen' ),
			'all_items'           => __( 'همه محصولات', 'twentythirteen' ),
			'view_item'           => __( 'مشاهده محصول', 'twentythirteen' ),
			'add_new_item'        => __( 'اضافه کردن محصول جدید', 'twentythirteen' ),
			'add_new'             => __( 'اضافه کردن', 'twentythirteen' ),
			'edit_item'           => __( 'ویرایش محصول', 'twentythirteen' ),
			'update_item'         => __( 'به روز رسانی', 'twentythirteen' ),
			'search_items'        => __( 'جستجوی محصول', 'twentythirteen' ),
			'not_found'           => __( 'یافت نشد', 'twentythirteen' ),
			'not_found_in_trash'  => __( 'محصولی در سطل زباله یافت نشد', 'twentythirteen' ),
		);

// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'محصولات', 'twentythirteen' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);

		// Registering your Custom Post Type
		register_post_type( 'products', $args );
	}
}
