<?php

function enqueue_child_styles() {
    wp_enqueue_style( 'events-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_styles');