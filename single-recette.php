<?php get_header(); ?>

<div class="container">
<?php if (have_posts()) : ?>
    
    <section class="grid">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
        
           <article>
        
        <h1> <?php the_title(); ?></h1>
        
        <ul class="info_recipe">
            <li>Temps de préparation: <?php the_field('temps_de_preparation') ;?></li>
            <li>Facilité: <?php the_field('facilite') ;?></li>
        </ul>
        
       
        
         
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


