<?php get_header(); ?>
<!-- Page d'une recette -->
<div class="container">
    <?php if (have_posts()) : ?>

    <section class="single-recette">
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article>

            <h1>
                <?php the_title(); ?>
            </h1>


            <ul class="info_recipe">


                <li> <p class="info-recipe-indication">Temps</p>
                    <p class="info-recipe-number"><?php the_field('temps'); ?></p>
                </li>
                <li> <p class="info-recipe-indication">Facilités</p>
                    <p class="info-recipe-number"><?php the_field('facilite'); ?></p>
                </li>
                <li> <p class="info-recipe-indication">Pour</p>
                    <p class="info-recipe-number"><?php the_field('personnes'); ?></p>
                </li>

            </ul>

            <?php the_post_thumbnail('medium'); ?>

            <div class="conteneur">

                <div class="liste-ingredient">
                    <?php if( have_rows('ingredients_recette') ): ?>
                    <p>Ingrédients</p>
                    <ul class="ingredient_recipe">

                        <?php while( have_rows('ingredients_recette') ): the_row(); 

		// vars
		$ingredients = get_sub_field('ingredients');
		$informations_des_ingredients = get_sub_field('informations_des_ingredients');

		?>

                        <li>
                            <?php echo $ingredients; ?> :
                            <?php echo $informations_des_ingredients; ?>
                        </li>

                        <?php endwhile; ?>

                    </ul>

                    <?php endif; ?>

                </div>


                <div class="liste-recette">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>

            </div>

        </article>


        <?php endwhile; ?>
    </section>

    <?php else: ?>
    <p>Aucun contenu à afficher !</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>