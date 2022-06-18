<?php

// namespace App; to avoid conflicts
// add_action('after_setup_theme','App\wp_theme_creation_101_supports'); 

// FIRST : DECLARE FONCTIONS

function wp_theme_creation_101_supports()
{
    // add_theme_support : registers theme support for a given feature
    add_theme_support('title-tag');
    // title-tag = baseline
    add_theme_support('post-thumbnails', array('post'));
    // Enables  Post Thumbnails support for a theme. Note that you can optionally pass a second argument, $args, with an array of the Post Types for which you want to enable this feature.
    add_theme_support('menus');
    // https://developer.wordpress.org/reference/functions/add_theme_support
    // If I need more than once (maybe for blog) take a look at this : https://codex.wordpress.org/Navigation_Menus & https://developer.wordpress.org/reference/functions/register_nav_menus/
    register_nav_menu('header','menu principal');
}

function wp_theme_creation_101_register_assets()
{
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_style('material-icons','https://fonts.googleapis.com/icon?family=Material+Icons');
    // Register a CSS stylesheet

    
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',[], false, true);
    // Register a new script. We can add dependances with an area if there is one between 2 scripts. Last true is to put script into footer
    

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('material-icons');
    // Enqueue (Rajoute à la file d'attente) CSS stylesheets
    
    
    wp_enqueue_script('bootstrap');
    // Enqueue (Rajoute à la file d'attente) scripts
}
// FUNCTIONS WITH FILTER
function wp_theme_creation_101_title_separator()
{
    return " | ";
}
// change the title separator for this one 
// les filtres font une transformation sur les valeurs pris en paramètre / les filtres sont comme des tuyaux qui permettent d'alterer une valeur

function wp_theme_creation_101_document_title_parts($title)
{
    //var dump -> table with title et tagline
    // (title = WordPress Theme creation 101 | tagline = Un site utilisant WordPress)
    unset($title['tagline']);
    return $title;
    // remove baseline and only show title

}

// THEN : ACTIONS

add_action('after_setup_theme','wp_theme_creation_101_supports');
// Fires (se lance) after the theme is loaded

add_action('wp_enqueue_scripts','wp_theme_creation_101_register_assets');
// Fires (se lance) when scripts and styles are enqueued

add_filter('document_title_separator','wp_theme_creation_101_title_separator');
add_filter('document_title_parts','wp_theme_creation_101_document_title_parts');
// go look after apply_filters to see what we can do with this filter -> Quand un hook est utilisé, il devra retourner une valeur pour alterer les paramètres