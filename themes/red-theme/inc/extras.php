<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


//CHANGE FUNCTIONS NAMES ~~~~~~~~~
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return get_home_url();
}


function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter('login_headertitle','inhabitent_login_title');

function inhabitent_hero_image(){
	if ( !is_page_template( 'page-templates/about.php' ) ) {
		return;
	}else{
		$CFS_url = CFS()->get( 'background' );
		if (!$CFS_url){
			return;
		}
		$CSS =".page-template-about .site-header{
		background: 
		linear-gradient(to bottom,rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
		url({$CFS_url}) no-repeat center bottom;
		background-size:cover,cover;
		height:100vh;
		}";
		wp_add_inline_style ('inhabitent-style',$CSS);
	} 
}
 
add_action("wp_enqueue_scripts" , 'inhabitent_hero_image');




