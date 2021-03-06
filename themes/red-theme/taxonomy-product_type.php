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
                <?php
                    single_term_title( '<h1 class="page-title">');?> </div>
            <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
            </header><!-- .page-header -->
        <div class="product_type_container">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php
                    get_template_part( 'template-parts/content-product' );    
                ?>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content-product', 'none' ); ?>
        <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>