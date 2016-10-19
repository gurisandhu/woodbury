<?php 

////////////////////
// Style sheet links
////////////////////
function my_styles(){
	wp_enqueue_style('woodbury-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.2');

	wp_enqueue_style('woodbury-fonts-open', 'https://fonts.googleapis.com/css?family=Open+Sans');

	wp_enqueue_style('woodbury-fonts-garamond', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:300i');

	wp_enqueue_style('woodbury-swiper', get_template_directory_uri() . '/library/swiper.min.css');
	wp_enqueue_style('woodbury-style', get_template_directory_uri() . '/style.css');
}
add_action('template_redirect', 'my_styles');
//end of styles

////////////////////
// Javascripts links
////////////////////
function my_scripts(){
	wp_enqueue_script( 'sirius-script', get_bloginfo('template_directory') . '/compressed/script.js', array('jquery'), true);
  wp_enqueue_script( 'sirius-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js', array('jquery'), true);

}
add_action('template_redirect', 'my_scripts');
//end of scripts

////////////////////
//jQuery
////////////////////
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

////////////////////
//Navigation
////////////////////
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu-left'       => __( 'Header Menu Left' ),
      		'header-menu-right'  => __('Header Menu Right'),
          'footer-menu'        => __('Footer Menu')
			)
		);
}
add_action( 'init', 'register_my_menus');
 ?>