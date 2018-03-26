<?php

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
