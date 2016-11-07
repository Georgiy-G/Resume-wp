<?php
show_admin_bar(false);
remove_action ( 'wp_head', 'rsd_link' );
remove_action ( 'wp_head', 'wlwmanifest_link' );
remove_action ( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support('post-thumbnails');
