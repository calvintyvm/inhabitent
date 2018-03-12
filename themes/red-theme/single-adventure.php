<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="journal-page-blocks">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>



		

		<?php endwhile; // End of the loop. ?>
		<div class="btn-container">
		<button type="button" class="btn"><i class="fab fa-facebook-f"></i>like</button>
		<button type="button" class="btn"><i class="fab fa-twitter"></i>tweet</button>
		<button type="button" class="btn"><i class="fab fa-pinterest-p"></i>pin</button>
		</div>
		</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>