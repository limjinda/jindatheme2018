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

/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_work_init() {
	$labels = array(
		'name'               => _x( 'Works', 'post type general name', 'jindatheme' ),
		'singular_name'      => _x( 'Work', 'post type singular name', 'jindatheme' ),
		'menu_name'          => _x( 'Works', 'admin menu', 'jindatheme' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'jindatheme' ),
		'add_new'            => _x( 'Add New', 'Work', 'jindatheme' ),
		'add_new_item'       => __( 'Add New Work', 'jindatheme' ),
		'new_item'           => __( 'New Work', 'jindatheme' ),
		'edit_item'          => __( 'Edit Work', 'jindatheme' ),
		'view_item'          => __( 'View Work', 'jindatheme' ),
		'all_items'          => __( 'All works', 'jindatheme' ),
		'search_items'       => __( 'Search works', 'jindatheme' ),
		'parent_item_colon'  => __( 'Parent works:', 'jindatheme' ),
		'not_found'          => __( 'No works found.', 'jindatheme' ),
		'not_found_in_trash' => __( 'No works found in Trash.', 'jindatheme' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Register a portfolio post type.', 'jindatheme' ),
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_icon'					 => 'dashicons-images-alt',
		'menu_position'      => 1,
		'supports'           => array( 'title', 'thumbnail' )
	);

	register_post_type( 'work', $args );
}
add_action( 'init', 'codex_work_init' );

/**
 * Hide some admin menu
 * Dashboard and Comments
 */
function remove_menus(){
  remove_menu_page( 'index.php' );                  
  remove_menu_page( 'edit-comments.php' );          
}
add_action( 'admin_menu', 'remove_menus', 999 );

?>