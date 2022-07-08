<?php


add_action( 'wp_enqueue_scripts', 'telecom_styles' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function telecom_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'owl-main', get_template_directory_uri() . '/css/owl.carousel.min.css', array('main') );
	wp_enqueue_style( 'owl-default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array('owl-main') );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array('owl-main') );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array('normalize') );
 
}
add_action( 'wp_footer', 'telecom_scripts' );
function telecom_scripts(){
 // дерегистрация jquerry
  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() .'/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery'  );
  //
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery'));
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array('owl'));
}

add_filter( 'show_admin_bar', '__return_false' );
//
function form_shortcode( $atts ){
	echo('');
}
 
add_shortcode( 'form', 'form_shortcode' );