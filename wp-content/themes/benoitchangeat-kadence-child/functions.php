<?php 
function benoitchangeat_assets()
{
	wp_enqueue_style( 'child-styles', get_stylesheet_uri(), array( 'kadence-global' ),null );
	wp_register_style('napaka-style', get_stylesheet_directory_uri().'/assets/css/style.css',array(),null);
	wp_register_script( 'javascript', get_theme_file_uri ('/assets/js/script.js'),array(),null);
	
	wp_enqueue_style('napaka-style');
	wp_enqueue_script('javascript');
}



add_action('wp_enqueue_scripts','benoitchangeat_assets');