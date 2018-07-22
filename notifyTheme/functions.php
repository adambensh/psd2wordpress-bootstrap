<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require get_template_directory() . '/bs4navwalker.php';
require_once('bs4navwalker.php');

function register_my_menu() {
    add_theme_support( 'menus' );
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

/*function register_my_menus() {
    register_nav_menus(
      array(
        //'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }*/
  
  function bootstrapstarter_enqueue_styles() {
      wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
      $dependencies = array('bootstrap');
      wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
    }
    
    function bootstrapstarter_enqueue_scripts() {
        $dependencies = array('jquery');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true );
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', false);
        wp_enqueue_script( 'customjs', get_template_directory_uri(  ).'/js/customjs.js');
    }
    
// add_action( 'init', 'register_my_menus' );
add_action( 'init', 'register_my_menu' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );



?>