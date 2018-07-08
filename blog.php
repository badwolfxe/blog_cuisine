<?php get_header(); ?>
<?php /*
Template Name: Page Actualité
*/

?>

<div class="container page-actualite">

    <?php $the_query = new WP_Query(array('post_type' => 'post')); ?>
    <?php if ($the_query->have_posts()) : ?>


    <div class="home-blog">
        
        <h1><?php the_title(); ?></h1>
        <section class="conteneur">
            <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>

            <article>
                <a href="<?php the_permalink(); ?>">
                    <div class="img-blog">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="info-blog">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
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

</div>

<?php $the_query = new WP_Query(array('post_type' => 'conseil')); ?>
    <?php if ($the_query->have_posts()) : ?>


<section class="grid-flex">
    <?php if( get_field('gauche_droite') == 'Gauche' ):  ?>
    <div class="grid-flex-2 gauche image-actualite">
        <img src="<?php the_field('image'); ?>" alt="" />
    </div>
    <div class="grid-flex-2 information_actualite">
        <h2>
            <?php get_field('titre') ?>
        </h2>
        <p>
            <?php get_field('description') ?>
        </p>
    </div>

    <?php endif; ?>

    <?php if( get_field('gauche_droite') == 'Droite' ): ?>
    <div class="grid-flex-2 droit image-actualite">
        <img src="<?php the_field('image'); ?>" alt="" />

    </div>

    <div class="grid-flex-2 information_actualite">
        <h2>
            <?php get_field('titre') ?>
        </h2>
        <p>
            <?php get_field('description') ?>
        </p>
    </div>

    <?php endif; ?>
</section>

    <?php endif; ?>


<?php get_footer(); ?>