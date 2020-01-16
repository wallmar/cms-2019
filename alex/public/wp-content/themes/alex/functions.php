<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
// to remove margin-top of 32px !important
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action('get_header', 'remove_admin_login_header');
