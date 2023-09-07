<?php

function steklo_assets() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js', array(), '20151215', true);
}

function add_logo() {
    add_theme_support('post-thumbnails', array('post'));
    add_theme_support( 'custom-logo', [
		'height'      => 50,
		'width'       => 200,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
    add_image_size( 'adv_thumbnail', 100, 100, true );
}

function add_menu() {
    register_nav_menu( 'header_menu', 'Главное меню');
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_action('wp_enqueue_scripts', 'steklo_assets');

add_action( 'after_setup_theme', 'add_logo' );

add_action( 'after_setup_theme', 'add_menu' );

// show_admin_bar(false);