<?php

function fth_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'fth_theme_enqueue_styles' );

function fth_theme_enqueue_scripts() {
	wp_enqueue_script('fth-functions', get_stylesheet_directory_uri() . '/functions.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'fth_theme_enqueue_scripts' );

add_action( 'wp_logout' , 'auto_redirect_after_logout' );
function auto_redirect_after_logout(){
	wp_redirect( home_url() );
  	exit();
}
