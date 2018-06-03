<?php get_header(); ?>
<!-- Page liste de recette par type salé ou sucrée-->
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
</div>

<?php get_footer(); ?>


