<?php

/*
    * my theme functions 
*/

// Theme Title
add_theme_support('title-tag');

// Theme css & jquery file calling
function mhb_css_js_file_calling(){
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
};

add_action('wp_enqueue_scripts', 'mhb_css_js_file_calling');

// Theme function
function mhb_customizer_register($wp_customize){
    $wp_customize->add_section('mhb_header_area', array(
        'title'=>__('Header Area', 'mhb'),
        'description'=>'You can update your header'
    ));

    $wp_customize->add_setting('mhb_logo', array(
        'default'=>get_bloginfo('template_directory') .'/assets/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mhb_logo',array(
        'label'=>'logo upload',
        'setting'=>'mhb_logo',
        'section'=>'mhb_header_area'
    ) ));
};

add_action('customize_register', 'mhb_customizer_register');