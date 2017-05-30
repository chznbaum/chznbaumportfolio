<?php

// Support Featured Images
add_theme_support('post-thumbnails');

// Theme menus
add_theme_support( 'menus' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );

}

// Hook theme menus function to theme setup
add_action ( 'init', 'register_theme_menus' );

// Queue theme styles
function chznbaum_theme_styles() {

  wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
  //wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'fonts_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

// Hook theme styles function to script loading
add_action ( 'wp_enqueue_scripts', 'chznbaum_theme_styles' );

// Queue theme scripts
function chznbaum_theme_js() {

  wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
  wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );

}

// Hook theme scripts function to script loading
add_action ( 'wp_enqueue_scripts', 'chznbaum_theme_js' );

// Remove the admin bar
function remove_admin_bar() {
  show_admin_bar( false );
}

// Hook admin bar function to end of theme setup
add_action( 'after_setup_theme', 'remove_admin_bar' );

?>