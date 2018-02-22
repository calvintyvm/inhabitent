<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<img class = "logo-front" src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg">
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
			<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
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
	<p>
	<a href="<?php echo get_term_link ($term); ?>"
	class="btn"><?php echo $term->name; ?> Stuff </a>
	</p>
	</div>
	<?php endforeach; ?>
	</div>
	<?php endif; ?>
	</section>

		
	<!-- #primary -->
	<h1 class="journal-title">Inhabitent Journal</h1>
	<section>
	

	<div class="journal-container">

	<?php
			$args = array(
			'order' => 'ASC',
			'posts_per_page' => 3,
			'post_type' => 'post' );
		
	$journal = new WP_Query( $args ); /* $args set above*/ ?>
	<?php if ( $journal->have_posts() ) : ?>
	<?php while ( $journal->have_posts() ) : $journal->the_post(); ?>

	<div class="journal-art">

	<?php if(has_post_thumbnail()) : ?>
	<div class="thumbnail-wrapper">
	<?php the_post_thumbnail ('medium');?>
	</div>
	<h1>
		<?php the_title(); ?>
	</h1>
	<?php endif;?>

	<div class="post-info-wrapper">
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / 
			<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / 

		</div>
	</div>
	<a class ="black-btn" href="<?php the_permalink(); ?>">
	Read Entry
	</a>
	</div>
	


	<!-- .entry-meta -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<h2>Nothing found!</h2>
	<?php endif; ?>
	</section>
	</div>

<!-- // php get_sidebar(); -->

<section>
<h2 class="shop-title">Latest Adventures</h2>


</section>



	<?php get_footer(); ?>
