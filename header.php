<!DOCTYPE html>
<html 
<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        
        <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    
    <header>
        
        <div class="logo">
            <?php echo (get_custom_logo()); ?>
        </div>
        
        
        <?php
wp_nav_menu( array( 
    'theme_location' => 'menu-secondaire', 
    'container_class' => 'menu-header' ) ); 
?>
        
        <div class="background-header">
        <div class="overlay">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        </div>
    </div>
        
    </header>

    
     
  