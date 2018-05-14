<?php get_header(); ?>
<div class="container">


    <h1>Hello taxo</h1>

    <?php $the_query = new WP_Query(array('post_type' => 'recette')); ?>
    <?php if ($the_query->have_posts()) : ?>

        <section class="grid grid-4">
            <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>

                <article>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
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
</div>

<?php get_footer(); ?>


