<?php


/* Création du Menu Header */

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'menu-header', __( 'Menu Header', 'blogcuisine' ) );
  register_nav_menu( 'menu-secondaire', __( 'Menu Secondaire', 'blogcuisine' ) );
}

/* Custom Post Type */


/* Custom Post Type */

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/ 

add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

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
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'recette'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'recette', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );