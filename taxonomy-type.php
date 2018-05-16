<?php get_header(); ?>
<div class="container">

    <?php
    /** @var WP_Term type */
    $type = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    ?>

    <h1>Recettes <?php echo $type->name; ?></h1>

    <?php if (have_posts()) : ?>

        <section class="grid grid-4">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

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


