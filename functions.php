<?php

function steklo_assets() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js', array(), '20151215', true);
}

function add_logo() {
    add_theme_support( 'custom-logo', [
		'height'      => 50,
		'width'       => 200,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
}


add_action('wp_enqueue_scripts', 'steklo_assets');
add_action( 'after_setup_theme', 'add_logo' );

show_admin_bar(false);