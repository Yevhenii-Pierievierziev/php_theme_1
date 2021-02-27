<?php

add_action( 'wp_enqueue_scripts', 'yp_style' );

function yp_style(){
	wp_enqueue_style( 'yp_style' , get_stylesheet_uri() );
	wp_enqueue_style( 'yp_main_css' , get_template_directory_uri() . '/css/main.css' );
}

add_action( 'after_setup_theme', 'yp_register_nav_menu');

function yp_register_nav_menu(){
	register_nav_menu( 'main', 'Главное меню' );
}

?>
