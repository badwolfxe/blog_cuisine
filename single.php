<?php get_header(); ?>
<main class="container">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article>
                <?php the_post_thumbnail('small'); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </article>

        <?php endwhile; ?>

    <?php else: ?>
        <p>Aucun contenu à afficher !</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>