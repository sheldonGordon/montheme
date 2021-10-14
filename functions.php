<?php

function montheme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function montheme_register_assets(){
    wp_register_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['pooper'], false, true);
    wp_register_script('pooper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap5');
    wp_enqueue_script('bootstrap5');
}
function montheme_title_separator(){
    return '|';
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
?>