<?php get_header(); ?>
<?php /*
Template Name: Page Contact
*/

?>

<div class="contact-page">

    <h1>
        <?php the_title(); ?>
    </h1>


    <section class="container">
        <?php
    // "loop" through query (even though it's just one page) 
    while (have_posts() ) : the_post(); 
    ?>

            <div class="conteneur">


                <?php the_content(); ?>

            </div>

            <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
    </section>
</div>

<?php get_footer(); ?>