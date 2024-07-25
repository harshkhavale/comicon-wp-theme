<?php

/**
 * @package Comicon
 */

function load_stylings()
{
    wp_enqueue_style('loading_extra_css', get_theme_file_uri('/css/styling.css'));
    wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('bootstrapcs', "    wp_enqueue_style('font_awesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css');
");
    wp_enqueue_style('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('font_awesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css');
    wp_enqueue_style('loading_main_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_stylings');
