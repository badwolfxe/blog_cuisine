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
    'theme_location' => 'menu-header', 
    'container_class' => 'menu-header' ) ); 
?>
        
       

</section>
        
    </div>
        
    </header>

    
     
  