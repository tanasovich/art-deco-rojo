<?php

function seleni_enqueue_styles() {
	wp_enqueue_style( 
		'tanasovich-style', 
		get_stylesheet_uri()
	);
}

add_action( 'wp_enqueue_scripts', 'seleni_enqueue_styles' );
