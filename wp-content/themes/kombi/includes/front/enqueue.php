<?php
function wl_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = AF_DEV_MODE ? time() : false;

    // Css

    wp_register_style('dt_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_register_style('dt_main_style', $uri . '/assets/css/main.css', [], $ver);
    wp_enqueue_style('dt_bootstrap');
    wp_enqueue_style('dt_main_style');


    // Java Script

    wp_register_script('dt_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', [], false, true);
    wp_register_script('popper_js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', [], false, true);
    wp_register_script('dt_main_js', $uri . '/assets/js/main.js', ['jquery'], $ver, true);


    wp_enqueue_script('dt_bootstrap_js');
    wp_enqueue_script('popper_js');
    wp_enqueue_script('dt_main_js');

}