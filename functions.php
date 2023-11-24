<?php


// we dont need it it's for navbar 

function sitesecurity_register_stylesheet() {
    //wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("sitesecurity-style", get_stylesheet_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "sitesecurity_register_stylesheet");


function theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'theme_support');

function create_menu () {

    $locations = array (
        'primary' => "left sidebar",
        'footer' => "footer menu items"
    );
    register_nav_menus($locations);
}

add_action('init', 'create_menu');





//function to kepp the text yellow in nav bar 

function add_current_nav_class($classes, $item) {
    // Check if the current item is a page and if it matches the current page
    if (is_page() && $item->title == get_the_title()) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_current_nav_class', 10, 2);