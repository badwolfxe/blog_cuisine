<?php get_header(); ?>

<?php get_taxonomy( $taxonomy ) ?>

<div class="container">
<?php if (have_posts()) : ?>
    
    <section class="grid grid-4">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                 <p><?php the_content(); ?></p>
                </a>
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>

<?php $the_query = new WP_Query(array('post_type' => 'article')); ?>
    <?php if ($the_query->have_posts()) : ?>


        <section class="home-recipe">
            
            <section class="grid grid-2">
                <?php while ($the_query->have_posts()) : ?>
                    <?php $the_query->the_post(); ?>

                    <article>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img-recipe"><div class="overlay"><p>Lire la recette</p></div><?php the_post_thumbnail('medium'); ?></div>
                            <div class="info-recipe">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </article>

                <?php endwhile; ?>
            </section>

        <?php else: ?>
            <p>Aucun contenu à afficher !</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </section>


                        
<?php get_footer(); ?>


