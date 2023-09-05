<?php

function steklo_assets() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js', array(), '20151215', true);
}

add_action('wp_enqueue_scripts', 'steklo_assets');