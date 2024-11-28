<?php

function seleni_enqueue_styles() {
	wp_enqueue_style( 
		'tanasovich-style', 
		get_stylesheet_uri()
	);
}

add_action( 'wp_enqueue_scripts', 'seleni_enqueue_styles' );

function handle_teapot() {
	if ( is_page('teapot') ) {
		status_header( 418 );
		nocache_headers();
	}
}

add_action( 'pre_get_posts', 'handle_teapot' );

