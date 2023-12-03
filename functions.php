<?php
function sitesecurity_register_stylesheet() {
    // Enqueue styles
    wp_enqueue_style("sitesecurity-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("materialize-icons", "https://fonts.googleapis.com/icon?family=Material+Icons");
    wp_enqueue_style("din_condensed_font", "https://use.typekit.net/piy2rgn.css");
}

add_action("wp_enqueue_scripts", "sitesecurity_register_stylesheet");

// Disable Gutenberg
function disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "disable_gutenberg");

