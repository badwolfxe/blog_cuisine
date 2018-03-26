<?php get_header(); ?>

<div class="container">
<?php if (have_posts()) : ?>

    <section class="grid">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article>
                <?php the_post_thumbnail('medium'); ?>
                    
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>


