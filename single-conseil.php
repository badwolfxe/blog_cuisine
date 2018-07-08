<?php get_header(); ?>
<div class="container single-conseil">
<?php if (have_posts()) : ?>
    
    <section class="conteneur">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
        
           <article>
        
                <h1><?php the_title(); ?></h1>
        
         
                <?php the_post_thumbnail('medium'); ?>
               
               
               <div class="content_article">
                <?php the_content(); ?>
               </div>
               
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>


