<?php get_header(); ?>
<!-- Page d'une recette -->
<div class="container">
<?php if (have_posts()) : ?>
    
    <section class="grid">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
        
           <article>
        
        <h1> <?php the_title(); ?></h1>

   
<?php if( have_rows('informations_recette') ): ?>
	<ul class="info_recipe">

	<?php while( have_rows('informations_recette') ): the_row(); 

		// vars
		$intitule = get_sub_field('intitule_');
		$valeur_intitue = get_sub_field('valeurs_de_lintitule_');

		?>
            
            <li><?php echo $intitule; ?> : <?php echo $valeur_intitue; ?></li>
          

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
        
       
        
         
                <?php the_post_thumbnail('medium'); ?>
                <p><?php the_content(); ?></p>
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>


