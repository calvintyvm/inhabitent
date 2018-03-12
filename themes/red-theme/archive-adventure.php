<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
	
            	<h1 class="adventure-title">latest adventures</div>
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="adventure-page-blocks">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-adventure' );
				?>
			<?php endwhile; ?>
</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-adventure', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>