<?php

// namespace App; to avoid conflicts
// add_action('after_setup_theme','App\theme_creation_101_supports'); 

// FIRST : DECLARE FONCTIONS

function theme_creation_101_supports()
{
    add_theme_support('title-tag');
    // Registers theme support for a given feature
}

function theme_creation_101_register_assets()
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

// THEN : ACTIONS

add_action('after_setup_theme','theme_creation_101_supports');
// Fires (se lance) after the theme is loaded

add_action('wp_enqueue_scripts','theme_creation_101_register_assets');
// Fires (se lance) when scripts and styles are enqueued

    //WIP à partir d'ici
add_filter('wp_title','theme_creation_101_title');
