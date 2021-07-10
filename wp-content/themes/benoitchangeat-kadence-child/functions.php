<?php 
function benoitchangeat_theme()
{
        wp_enqueue_style(
        'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('0.1') // this only works if you have Version in the style header
    );
}

add_action('wp_enqueue_scripts','benoitchangeat_theme');