<?php get_header(); ?>
<!-- Page actualite -->
<?php get_taxonomy( $taxonomy ) ?>

<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=actualite' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post(); 
    ?>
            <h1 class="actualite"><?php the_title(); ?></h1>
            
            <?php if( have_rows('actualite_') ): ?>

	<?php while( have_rows('actualite_') ): the_row(); 

		// vars
                $titre = get_sub_field('titre_');
		$image = get_sub_field('image');
		$contenue_actualite = get_sub_field('contenu_de_lactualite');
                $gauche_droite = get_sub_field('gauche_droite');

		?>
            
            <section class="grid-flex">
                <?php if ( $gauche_droite == 'gauche'): ?>
		   <div class="grid-flex-2 gauche image-actualite">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
            
            <div class="grid-flex-2 information_actualite">
                <h2><?php echo $titre; ?></h2>
                <p><?php echo $contenue_actualite; ?></p>
            </div>
            
            <?php endif; ?>
            
            <?php if ( $gauche_droite == 'droite' ): ?>
		   <div class="grid-flex-2 droit image-actualite">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
            
            <div class="grid-flex-2 information_actualite">
                <h2><?php echo $titre; ?></h2>
                <p><?php echo $contenue_actualite; ?></p>
            </div>
            
            <?php endif; ?>
                </section>
            
          

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

        <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



                        
<?php get_footer(); ?>


