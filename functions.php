<?php

function greenview_theme_setup(){
  load_theme_textdomain('greenview');
  add_theme_support("post-thumbnails");
  add_theme_support("tile-tag");
  add_theme_support("html5", array( 'search-form', 'comment-list' ));
  add_theme_support( 'post-formats', array( 'image', 'gallery', 'quote', 'audio', 'video' ) );
}
add_action('after_setup_theme', 'greenview_theme_setup');


function greenview_assets(){

  // Enque Style
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.min.css' );
  wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magific-popup.css' );
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );

  // Register Script
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array(), '', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '', true );
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true );
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '', true );
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '', true );
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), '', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'greenview_assets' );


