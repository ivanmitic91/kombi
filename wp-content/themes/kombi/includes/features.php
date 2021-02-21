<?php
function dating_features()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

}

// images

add_image_size('top-sites', 100, 100, true);



add_action('after_setup_theme', 'dating_features');