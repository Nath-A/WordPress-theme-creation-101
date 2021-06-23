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

                // NOT WORKING. NO IDEA WHY !!!
    // wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM');
    // Register a new script. We can add dependances with an area if there is one between 2 scripts. 
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('material-icons');
    // Enqueue (Rajoute à la file d'attente) a CSS stylesheet
    
    // wp_enqueue_scripts('bootstrap');
    // 
}




// THEN : ACTIONS

add_action('after_setup_theme','theme_creation_101_supports');
// Fires after the theme is loaded

add_action('wp_enqueue_scripts','theme_creation_101_register_assets');
// Fires (se lance) when scripts and styles are enqueued
