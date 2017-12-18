<?php 

/**
 * Template setup
 * init theme with basic settings such as image size, navigation, etc.
 */
function jindatheme_template_setup() {
	load_theme_textdomain( 'jindatheme' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'jindatheme-portfolio-cover', 540, 540, array('center', 'center') );
	register_nav_menus( array(
		'top'    => __( 'Top navigation', 'jindatheme' ),
	) );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'jindatheme_template_setup' );

/**
 * Dequeue and Enqueue stylesheet and javascript files
 * including main theme and vendor files.
 */

function jindatheme_register_scripts() {
	wp_enqueue_style('vendor', get_theme_file_uri('/css/vendor.css'));
	wp_enqueue_style( 'jindatheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'client', get_theme_file_uri( '/js/clients.js' ), array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'jindatheme_register_scripts');

/**
 * Register widget, a blog sidebar
 */
function jindatheme_register_widget() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentyseventeen' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Main blog sidebar', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'jindatheme_register_widget' );

?>