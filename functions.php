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
	add_image_size( 'jindatheme-portfolio-cover', 540, 540, true );
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

?>