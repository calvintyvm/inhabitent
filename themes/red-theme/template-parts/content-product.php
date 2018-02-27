<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>"><div class="thumbnail-wrapper">
			<?php the_post_thumbnail( 'large' ). "</div>" ."</a>" ?>
		<?php endif; ?>
	 





		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="post-price-title-con">
		<div class="post-title"> <?php echo $post->post_title ?></div>
		<div class="product-dots">....................................</div>
		<div class="price-title"> <?php echo $post->price ?> </div>
		</div>


	</div><!-- .entry-content -->
</article><!-- #post-## -->