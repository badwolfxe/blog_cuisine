<?php

/* CSS - JS */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery.js', array( 'jquery' ));
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array( 'jquery' ) );
}

/* Menus */

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'menu-header' => __( 'Menu Header' ),
      'menu-secondaire' => __( 'Menu Secondaire' )
    )
  );
}


/* Add Custom Post Type */

add_action( 'init', 'wpb_custom_new_menu' );

/* Add Logo Administrable */

add_theme_support( 'custom-logo' );

/* Add Thumbails*/

add_theme_support( 'post-thumbnails' ); 

/* Add Custom Header Photo */

add_theme_support( 'custom-header' );

/* Add Widget Sidebar */

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

    /* Recettes + Conseils */

function wpm_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Nos Recettes', 'Post Type General Name'),
		'singular_name'       => _x( 'Recette', 'Post Type Singular Name'),
	);
	
	$args = array(
		'label'               => __( 'Nos Recettes'),
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
        'taxonomies'    => array(
        'catgrecette'
    ),
		'rewrite'			  => array( 'slug' => 'recette'),

	);
	register_post_type( 'recette', $args );
    
    $labels = array(
		'name'                => _x( 'Nos Conseils', 'Post Type General Name'),
		'singular_name'       => _x( 'Conseil', 'Post Type Singular Name'),
	);
	
	$args = array(
		'label'               => __( 'Nos Conseils'),
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', ),
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'conseil'),

	);
	register_post_type( 'conseil', $args );

}

/* Add Taxonomy Recettes */

add_action( 'init', 'wpm_custom_post_type', 0 );

// register news taxonomy
register_taxonomy('catgrecette', 'wpm_custom_post_type', array(
    'label'         => 'Types',
    'labels'        => array(
        'menu_name' => __('Types Recettes', 'NWCM')
    ),
    'rewrite'       => array(
        'slug' => 'catgrecette'
    ),
    'hierarchical'  => true
));



/* AFC */

    /* Ingrédients */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b2ca9ba7b62e',
	'title' => 'Ingrédients recette',
	'fields' => array(
		array(
			'key' => 'field_5b2ca9c3a6872',
			'label' => 'Ingrédients recette',
			'name' => 'ingredients_recette',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5b2ca9cda6873',
					'label' => 'Ingrédients',
					'name' => 'ingredients',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5b2ca9d7a6874',
					'label' => 'Informations des ingrédients',
					'name' => 'informations_des_ingredients',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'recette',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;


    /* Slider Galerie Image Homepage */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b3d0a9f611db',
	'title' => 'Galerie',
	'fields' => array(
		array(
			'key' => 'field_5b3d0abda14e0',
			'label' => 'galerie slider image',
			'name' => 'galerie_slider_image',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '9',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5b3bbb5421ae5',
	'title' => 'Indications recettes',
	'fields' => array(
		array(
			'key' => 'field_5b3bbb82ac3b9',
			'label' => 'Temps',
			'name' => 'temps',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b3bbb8bac3ba',
			'label' => 'Facilité',
			'name' => 'facilite',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b3bbb97ac3bb',
			'label' => 'Personnes',
			'name' => 'personnes',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'recette',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b3bbb5421ae5',
	'title' => 'Indications recettes',
	'fields' => array(
		array(
			'key' => 'field_5b3bbb82ac3b9',
			'label' => 'Temps',
			'name' => 'temps',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b3bbb8bac3ba',
			'label' => 'Facilité',
			'name' => 'facilite',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b3bbb97ac3bb',
			'label' => 'Personnes',
			'name' => 'personnes',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'recette',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;