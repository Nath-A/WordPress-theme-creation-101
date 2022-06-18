<?php  
function benoitchangeat_assets()
{
	wp_enqueue_style( 'child-styles', get_stylesheet_uri(), array( 'kadence-global' ),null );
	
	wp_register_style('a-propos', get_stylesheet_directory_uri().'/assets/css/a-propos.css',array(),null);
	wp_register_style('blog', get_stylesheet_directory_uri().'/assets/css/blog.css',array(),null);
	wp_register_style('classes-specifiques', get_stylesheet_directory_uri().'/assets/css/classes-specifiques.css',array(),null);
	wp_register_style('contact', get_stylesheet_directory_uri().'/assets/css/contact.css',array(),null);
	wp_register_style('footer', get_stylesheet_directory_uri().'/assets/css/footer.css',array(),null);
	wp_register_style('index', get_stylesheet_directory_uri().'/assets/css/index.css',array(),null);
	wp_register_style('navbar', get_stylesheet_directory_uri().'/assets/css/navbar.css',array(),null);
	wp_register_style('ressources', get_stylesheet_directory_uri().'/assets/css/ressources.css',array(),null);
	wp_register_style('services', get_stylesheet_directory_uri().'/assets/css/services.css',array(),null);
	wp_register_style('style-general', get_stylesheet_directory_uri().'/assets/css/style-general.css',array(),null);
	
	wp_register_script( 'javascript', get_theme_file_uri ('/assets/js/script.js'),array(),null);
	
	
	wp_enqueue_style('style-general');
	wp_enqueue_style('classes-specifiques');
	
	wp_enqueue_style('navbar');
	wp_enqueue_style('footer');
	
	wp_enqueue_style('index');
	wp_enqueue_style('services');
	wp_enqueue_style('ressources');
	wp_enqueue_style('blog');
	wp_enqueue_style('a-propos');
	wp_enqueue_style('contact');
	
	wp_enqueue_script('javascript');
}


add_action('wp_enqueue_scripts','benoitchangeat_assets');