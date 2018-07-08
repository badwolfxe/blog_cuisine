<?php get_header(); ?>

<?php /*
Template Name: Homepage Simple
*/

?>
<section class="background-header">
    <div class="overlay"></div>
    <div class="hero">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />

        <div class="introduction-homepage">
            <?php
    // "loop" through query (even though it's just one page) 
    while (have_posts() ) : the_post(); 
    ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <h2>
                    <?php the_content(); ?>
                </h2>

                <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
        </div>
    </div>
</section>


<section class="container">

    <?php $the_query = new WP_Query(array('post_type' => 'recette')); ?>
    <?php if ($the_query->have_posts()) : ?>


    <div class="home-recipe">

        <div class="conteneur">
            <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>

            <article>
                <a href="<?php the_permalink(); ?>">
                    <div class="img-recipe">
                        <div class="overlay">
                            <p>Lire la recette</p>
                        </div>
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="info-recipe">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </a>
            </article>

            <?php endwhile; ?>
        </div>

        <?php else: ?>
        <p>Aucun contenu à afficher !</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>


    <div class="sidebar">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div>

</section>



<?php get_footer(); ?>