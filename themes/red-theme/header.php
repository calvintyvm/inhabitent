<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!DOCTYPE html>
		<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header">
			
				<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<a href="<?php echo esc_url( home_url( '/' ));?>"><div class="site-brand"></div></a>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<div class="top-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form();?>
					</div>
				</nav>

			</header>

			<div id="content" class="site-content">

