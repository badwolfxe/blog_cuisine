<?php get_header(); ?>
<?php /*
Template Name: Hero Section
*/

?>



             <div class="background-header">
        <div class="overlay"></div>
        <div class="hero">
        <img src="<?php echo( get_the_post_thumbnail() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        
        <section class="introduction-homepage">
<?php
    // "loop" through query (even though it's just one page) 
    while (have_posts() ) : the_post(); 
    ?>
            <h1><?php the_title(); ?></h1>

        <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
            </section>
            </div>
 </div>

<section class="container">
<?php
    // "loop" through query (even though it's just one page) 
    while (have_posts() ) : the_post(); 
    ?>
            <h2><?php the_content(); ?></h2>

        <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
</section>


<?php get_footer(); ?>





