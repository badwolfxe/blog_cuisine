<?php


/* Création du Menu Header */

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'menu-header', __( 'Menu Header', 'blogcuisine' ) );
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
