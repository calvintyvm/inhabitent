<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		


			<header class="page-header">
				<h1 class="products-title"> Shop stuff</h1>
					<?php
						$terms = get_terms( array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
						) );
					if (! empty($terms)):
					?>
						<div class="subtitle">
							<?php foreach ($terms as $term) :?>

								<a href="<?php echo get_term_link ($term); ?>"
								class="btn"><?php echo $term->name; ?></a>
								</p>

	<?php endforeach; ?>
	<?php endif; ?>
					    </div>
		</header><!-- .page-header -->
			<div class ="products-container">
			<?php /* Start the Loop */ ?>
	     	<?php
  		  $args = array( "posts_per_page" => 16, 'post_type' => 'product', 'order' => 'ASC' );
 		  $product_posts = get_posts( $args ); // returns an array of posts
																			?>
		 <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		 <div class="products-indi">
				<a href="<?php the_permalink(); ?>"><div class="thumbnail-wrapper"> 
		<?php echo the_post_thumbnail("medium"). "</div>" ."</a>"?>
		<div class="post-price-title-con">
		<div class="post-title"> <?php echo $post->post_title ?></div>
		<div class="product-dots">....................................</div>
		<div class="price-title"> <?php echo $post->price ?> </div>
		</div>
		 </div>
		<?php endforeach; wp_reset_postdata(); ?>
		<?php else : ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

<?php get_footer(); ?>
