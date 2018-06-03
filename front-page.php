<?php get_header(); ?>
<!-- Page d'accueil -->
 
 <div class="background-header">
        <div class="overlay"></div>
        <div class="hero">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        
        <section class="introduction-homepage">
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=home' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post(); 
    ?>
            <h1><?php the_title(); ?></h1>
            <h2><?php the_content(); ?></h2>

        <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>

            </div>
 </div>



<div class="container">

    <?php $the_query = new WP_Query(array('post_type' => 'recette')); ?>
    <?php if ($the_query->have_posts()) : ?>


        <section class="home-recipe">
            
            <section class="grid grid-2">
                <?php while ($the_query->have_posts()) : ?>
                    <?php $the_query->the_post(); ?>

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
    </section>

    <div class="sidebar">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div>

</div>

<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=galerie-photo' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
       
    
    
    $images = get_field('galerie_photo');

if( $images ): ?>
<div id="slider">
  <a  class="control_next">></a>
  <a  class="control_prev"><</a>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
    
    
    <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>


<?php get_footer(); ?>




