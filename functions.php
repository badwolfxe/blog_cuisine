<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/* Création des Menus */


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'menu-header' => __( 'Menu Header' ),
      'menu-secondaire' => __( 'Menu Secondaire' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

/* Widget */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Custom Post Type */

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Nos Recettes', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Recette', 'Post Type Singular Name'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Nos Recettes'),
           
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		/* 
		* Différentes options supplémentaires
		*/
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'recette'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'recette', $args );

}

add_action('init', 'cpt');
function cpt() {

    register_taxonomy('type', ['recette'], [
        'labels' => [
            'name' => 'Types',
            'singular_name' => 'type'
        ],
        'hierarchical' => true
    ]);
    

}


add_action( 'init', 'wpm_custom_post_type', 0 );