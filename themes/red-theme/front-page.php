<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<img class = "logo-front" src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" alt="site-logo">
			<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text">
					<?php single_post_title(); ?>
				</h1>
			</header>
			<?php endif; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-front' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content-front', 'none' ); ?>
			<?php endif; ?>
		</main>
		<!-- #main -->
	</div>


  <!-- Product terms -->

	<section class ="product-info container">
	<h2 class="shop-title">Shop Stuff</h2>
	<?php
	$terms = get_terms( array(
		'taxonomy' => 'product_type',
		'hide_empty' => 0,
	) );
	if (! empty($terms)):
	?>
	<div class="product-type-blocks">
	<?php foreach ($terms as $term) :
	?>
	<div class="product-type-block-wrapper">
	<img src="<?php echo get_template_directory_uri() . 
	'/images/product-type-icons/' . $term ->slug; ?>.svg" 
		alt ="<?php echo $term->name;?>"/>
	<p><?php echo $term->description; ?> </p>

		<div class="shop-button">
	<a href="<?php echo get_term_link ($term); ?>"
	class="btn"><?php echo $term->name; ?> Stuff </a>
	</div>

	</div>
	<?php endforeach; ?>
	</div>
	<?php endif; ?>
	</section>

		
	<!-- #primary -->


<!-- // php get_sidebar(); -->

<!-- <section>
<h2 class="shop-title">Latest Adventures</h2>
<div class="adventures-container">

            <div class="ad1"><p>Getting Back to Nature in a Canoe</p>
			</div>
		
            <div class="ad2"><p>A Night with Friends at the Beach</p>

			</div>
            <div class="ad3"><p>Taking in the View at Big Mountain</p>

			</div>
            <div class="ad4"><p>Star-Gazing at the Night Sky </p>

			</div>
</div>

</section> -->


<!-- get_sidebar(); ?> -->
	<?php get_footer(); ?>
