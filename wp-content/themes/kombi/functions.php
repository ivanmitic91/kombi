<?php

// Setup
define('AF_DEV_MODE', true);

// Includes
include get_theme_file_path('/includes/front/enqueue.php');
//include get_theme_file_path('/includes/features.php');

// Hooks
add_action('wp_enqueue_scripts', 'wl_enqueue');


function wpb_custom_new_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));

}

add_action('init', 'wpb_custom_new_menu');







