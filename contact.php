<?php
/* Template Name: Page Contact */

get_header();
?>

<main class="container">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </article>

        <?php endwhile; ?>

    <?php else: ?>
        <p>Aucun contenu à afficher !</p>
    <?php endif; ?>

    <form action="">
        <p>
            <label for="">Nom</label>
            <input type="text">
        </p>
        <input type="submit">
    </form>

</main>

<?php get_footer(); ?>