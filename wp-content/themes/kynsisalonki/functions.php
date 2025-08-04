<?php

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

function load_stylesheets()
{
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');
		wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
		wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_theme_support('menus');
add_theme_support('widgets');


add_theme_support( 'post-thumbnails' );

add_image_size( 'blog_thumbnail', 300, 300 );
add_image_size( 'blog_sample_photo', 500, 500 );
add_image_size( 'large', 800, 800 );

function wpb_widgets_init() {
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );


}
add_action( 'widgets_init', 'wpb_widgets_init' );

function register_my_menus() {
  register_nav_menus(
    array(
      'desktop-menu' => __( 'Desktop menu' ),
      'mobile-menu' => __( 'Mobile menu' ),
      'footer-menu' => __( 'Footer menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );