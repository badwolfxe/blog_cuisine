<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery.js', array( 'jquery' ));
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array( 'jquery' ) );
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


/* Add custom module dans le blog */

add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

/* Widget Sidebar */

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
		'rewrite'			  => array( 'slug' => 'recette'),

	);
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


/* AFC */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b140c33595aa',
	'title' => 'Informations sur la recette',
	'fields' => array(
		array(
			'key' => 'field_5b140c44fc1c5',
			'label' => 'informations recette',
			'name' => 'informations_recette',
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
					'key' => 'field_5b140c58fc1c6',
					'label' => 'Intitulé',
					'name' => 'intitule_',
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
					'key' => 'field_5b140c6efc1c7',
					'label' => 'Valeurs de l\'intitulé',
					'name' => 'valeurs_de_lintitule_',
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

acf_add_local_field_group(array(
	'key' => 'group_5b12a4cd1b0b2',
	'title' => 'Ma galerie photo',
	'fields' => array(
		array(
			'key' => 'field_5b12a4d82c320',
			'label' => 'galerie photo',
			'name' => 'galerie_photo',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 3,
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
				'value' => '59',
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
	'key' => 'group_5b152bd4637d5',
	'title' => 'Actualité',
	'fields' => array(
		array(
			'key' => 'field_5b152bdada877',
			'label' => 'actualité',
			'name' => 'actualite_',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
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
					'key' => 'field_5b153bdd00c2f',
					'label' => 'Titre',
					'name' => 'titre_',
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
					'key' => 'field_5b152be9da878',
					'label' => 'image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5b152c01da879',
					'label' => 'Contenu de l\'actualité',
					'name' => 'contenu_de_lactualite',
					'type' => 'textarea',
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
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5b153132bbc35',
					'label' => 'Gauche ou Droite',
					'name' => 'gauche_droite',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'gauche' => 'Gauche',
						'droite' => 'Droite',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '102',
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


