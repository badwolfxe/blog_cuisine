<?php get_header(); ?>

<section class="introduction-homepage">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <h2><?php the_content(); ?></h2>

        <?php endwhile; ?>

    <?php endif; ?>

</section>

<div class="container">

    <?php $the_query = new WP_Query(array('post_type' => 'recette')); ?>
    <?php if ($the_query->have_posts()) : ?>


        <section class="home-recipe">
            <h3>Voici toutes nos recettes</h3>


            <section class="grid grid-2">
                <?php while ($the_query->have_posts()) : ?>
                    <?php $the_query->the_post(); ?>

                    <article>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img-recipe"><div class="overlay"><p>Lire la recette</p></div><?php the_post_thumbnail('medium'); ?></div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </a>
                    </article>

                <?php endwhile; ?>
            </section>

        <?php else: ?>
            <p>Aucun contenu à afficher !</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </section>

    <div class="sidebar">
        <p>Sidebar</p>
    </div>

</div>

<?php get_footer(); ?>


