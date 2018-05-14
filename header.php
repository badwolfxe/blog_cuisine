<!DOCTYPE html>
<html 
<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        
        <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    
    <div class="background-header">
        <div class="overlay">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        
            <?php wp_nav_menu( array( 'blogcuisine' => 'menu-header' ) ); ?>
        </div>
        
    </div>
    
     
  