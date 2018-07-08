<!DOCTYPE html>
<html <head>
<meta charset="<?php bloginfo('charset'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

    <header>

        <nav class="nav-mobile menu-header">
            <div id="toggle-nav">
                <input type="checkbox" class="toggle-button" />
                <span></span>
                <span></span>
                <span></span>
                <div class="menu-mobile">
                    <?php
wp_nav_menu( array( 
    'theme_location' => 'menu-header', 
    'container_class' => 'menu-header' ) ); 
?>
                </div>

            </div>
        </nav>

        <nav>
            <div class="menu-responsive">

                <?php
wp_nav_menu( array( 
    'theme_location' => 'menu-header', 
    'container_class' => 'menu-header' ) ); 
?>

            </div>
        </nav>

        <div class="logo">
            <?php echo (get_custom_logo()); ?>
        </div>






        </section>

        </div>

    </header>