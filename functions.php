<?php
require 'constants.php';
require 'app/autoloader.php';
add_action("init","registerPostType::register_product_post_type");
add_action("init","Initializer::start_session");
add_action("init","Initializer::setup");
add_action( 'add_meta_boxes', 'productPrice::adding_custom_meta_boxes');
add_action( 'save_post', 'productPrice::wpdev_save_price_data');
add_action( 'add_meta_boxes', 'ProductImages::register_product_images_metabox');
add_action( 'save_post', 'ProductImages::save_product_images');
add_filter('manage_products_posts_columns','productPrice::price_column');
add_action('manage_products_posts_custom_column','productPrice::show_price_column',10,2);

