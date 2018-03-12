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
            <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <a class="read-more-button" href="<?php the_permalink(); ?>">Read More</a>
        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
    
    </div><!-- .entry-content -->
</article><!-- #post-## -->