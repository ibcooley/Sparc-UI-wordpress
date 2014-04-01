<?php
/**
 * Template Name: Full Width Template
 * The template for blank canvas pages.
 *
 * @package sparcwp
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
