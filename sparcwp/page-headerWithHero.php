<?php
/**
 * Template Name: Header With Hero
 * The template for displaying pages with a custom header that has a bg image and hero.
 *
 * @package sparcwp
 */

get_header('withHero'); ?>
	<section class="main-content">
		<div class="container">
		<!-- .entry-header -->
		        <header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
		</div>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
	</section>
<?php get_footer(); ?>
