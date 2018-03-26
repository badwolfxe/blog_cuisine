<?php get_header(); ?>
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
                </a>
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>


