<?php

function montheme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
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

function montheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_pagination(){
    $pages = paginate_links(array('type' => 'array'));
    if($pages == null){
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    foreach($pages as $page){
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if($active){
            $class .= ' active';
        }
        echo '<li class="'. $class .'">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
?>