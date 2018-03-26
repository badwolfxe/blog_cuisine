<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'menu-header', __( 'Menu header', 'blog_cuisine' ) );
}

/* Custom Post Type */

add_action('init', 'cpt');
function cpt() {
    register_post_type('recette', [
        'labels' => [
            'name' => 'Nos Recettes',
            'singular_name' => 'Recette'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
}


add_action( 'after_setup_theme', 'sidebar' );
function sidebar_liste_cat() {
    register_sidebar([
    'name' => 'Sidebar Blog Homepage',
     'id' => 'sidebar_blog_homepage'
    ]);
}
