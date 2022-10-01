<?php

/*
    * my theme functions 
*/

// Theme Title
add_theme_support('title-tag');

// Theme css & jquery file calling
function cssJsFileCalling(){
    // wp_enqueue_script($handle:string,$src:string,$deps:array,$ver:string|boolean|null,$in_footer:boolean );
    wp_enqueue_style('mhb-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '5.2.1', 'all');
    wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    wp_enqueue_style('responsive');

    // jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.js', array(), '5.2.1', true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), '5.2.1', true);
}

add_action('wp_enqueue_scripts', 'cssJsFileCalling');