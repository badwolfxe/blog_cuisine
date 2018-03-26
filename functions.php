<?php


/* Création du Menu Header */

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'menu-header', __( 'Menu Header', 'blogcuisine' ) );
  register_nav_menu( 'menu-secondaire', __( 'Menu Secondaire', 'blogcuisine' ) );
}

/* Custom Post Type */


/* Custom Post Type */

add_action('init', 'cpt');
function cpt() {
    register_post_type('recette', [
        'labels' => [
            'name' => 'Nos Recette',
            'singular_name' => 'Recette'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);

    register_taxonomy('categorie', ['dessert'], [
        'labels' => [
            'name' => 'Desserts',
            'singular_name' => 'Dessert'
        ],
        'hierarchical' => true
    ]);
}