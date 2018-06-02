<?php get_header(); ?>

<?php get_taxonomy( $taxonomy ) ?>

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
                 <p><?php the_content(); ?></p>
                </a>
            </article>

        <?php endwhile; ?>
    </section>

<?php else: ?>
    <p>Aucun contenu à afficher !</p>
<?php endif; ?>
</div>
<?php 

$images = get_field('galerie_photo');

if( $images ): ?>
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
<?php endif; ?>

                        
<?php get_footer(); ?>


