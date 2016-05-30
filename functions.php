<?php
//Add menu support in the Appearance section of the admin sidebar
add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'connectedcat' ) );
}

//Add feature images to pages
add_theme_support('post-thumbnails');

//Add exerpts to pages
add_action('init', 'add_excerpt_pages');
function add_excerpt_pages() {
  add_post_type_support( 'page', 'excerpt' );
}

//Remove admin top bar
add_filter('show_admin_bar', '__return_false');
