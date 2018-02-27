<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120380861!2d-123.14036224938404!3d49.263451779953655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1519344494393" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

	<?php echo do_shortcode( '[contact-form-7 id="141" title="Contact form 1"]' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
