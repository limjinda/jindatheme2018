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
	add_image_size( 'jindatheme-portfolio-cover', 263, 263, array('center', 'center') );
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
	wp_enqueue_style('jindatheme-style', get_stylesheet_uri());
	wp_register_script('client', get_theme_file_uri( '/js/clients.js' ), array('jquery'), '1.0.0', true );
	$js_variables = array(
		'home_url' => get_template_directory_uri()
	);
	wp_localize_script( 'client', 'themeVariables', $js_variables );
	wp_enqueue_script('client');
}
add_action('wp_enqueue_scripts', 'jindatheme_register_scripts');

/**
 * Register widget, a blog sidebar
 */
function jindatheme_register_widget() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jindatheme' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Main blog sidebar', 'jindatheme' ),
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
	$work_labels = array(
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

	$work_args = array(
		'labels'             => $work_labels,
    'description'        => __( 'Register a portfolio post type.', 'jindatheme' ),
		'public'             => false,
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

	register_post_type( 'works', $work_args );
}
add_action( 'init', 'codex_work_init' );

/**
 * Register a testimonial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_testimonial_init() {
	$testimonial_labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'jindatheme' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'jindatheme' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'jindatheme' ),
		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'jindatheme' ),
		'add_new'            => _x( 'Add New', 'Testimonial', 'jindatheme' ),
		'add_new_item'       => __( 'Add New Testimonial', 'jindatheme' ),
		'new_item'           => __( 'New Testimonial', 'jindatheme' ),
		'edit_item'          => __( 'Edit Testimonial', 'jindatheme' ),
		'view_item'          => __( 'View Testimonial', 'jindatheme' ),
		'all_items'          => __( 'All Testimonials', 'jindatheme' ),
		'search_items'       => __( 'Search Testimonials', 'jindatheme' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'jindatheme' ),
		'not_found'          => __( 'No testimonial found.', 'jindatheme' ),
		'not_found_in_trash' => __( 'No testimonial found in Trash.', 'jindatheme' )
	);

	$testimonail_args = array(
		'labels'             => $testimonial_labels,
    'description'        => __( 'Register a testimonial post type.', 'jindatheme' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_icon'					 => 'dashicons-format-status',
		'menu_position'      => 2,
		'supports'           => array( 'title', 'thumbnail' )
	);

	register_post_type( 'testimonials', $testimonail_args );
}
add_action( 'init', 'codex_testimonial_init' );

/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_client_init() {
	$client_labels = array(
		'name'               => _x( 'Clients', 'post type general name', 'jindatheme' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'jindatheme' ),
		'menu_name'          => _x( 'Clients', 'admin menu', 'jindatheme' ),
		'name_admin_bar'     => _x( 'Client', 'add new on admin bar', 'jindatheme' ),
		'add_new'            => _x( 'Add New', 'Client', 'jindatheme' ),
		'add_new_item'       => __( 'Add New Client', 'jindatheme' ),
		'new_item'           => __( 'New Client', 'jindatheme' ),
		'edit_item'          => __( 'Edit Client', 'jindatheme' ),
		'view_item'          => __( 'View Client', 'jindatheme' ),
		'all_items'          => __( 'All Clients', 'jindatheme' ),
		'search_items'       => __( 'Search Clients', 'jindatheme' ),
		'parent_item_colon'  => __( 'Parent Clients:', 'jindatheme' ),
		'not_found'          => __( 'No clients found.', 'jindatheme' ),
		'not_found_in_trash' => __( 'No clients found in Trash.', 'jindatheme' )
	);

	$client_args = array(
		'labels'             => $client_labels,
    'description'        => __( 'Register a client post type.', 'jindatheme' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_icon'					 => 'dashicons-welcome-learn-more',
		'menu_position'      => 3,
		'supports'           => array( 'title', 'thumbnail' )
	);

	register_post_type( 'clients', $client_args );
}
add_action( 'init', 'codex_client_init' );

/**
 * Hide some admin menu
 * Dashboard and Comments
 */
function remove_menus(){
  remove_menu_page( 'index.php' );                  
  remove_menu_page( 'edit-comments.php' );          
}
add_action( 'admin_menu', 'remove_menus', 999 );

/**
 * Add option page,
 * This option will appear if using ACF Pro
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
		'icon_url'		=> 'dashicons-art'
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Networks',
		'menu_title'	=> 'Social Networks',
		'parent_slug'	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Info',
		'menu_title'	=> 'Contact Info',
		'parent_slug'	=> 'theme-options',
	));
}

/**
 * Add custom login stylesheet file
 * and set priority to 999, higher will fire first!
 */

function jindatheme_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/login.css" />';
}
add_action('login_head', 'jindatheme_custom_login', 999);

/**
 * Change the url of the login logo
 * in login screen
 */
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url', 999 );

function my_login_logo_url_title() {
	return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title', 999 );

/**
 * Change the error message from login screen
 * for security reason!
 */
function login_error_override()
{
  return 'Invalid login credentials';
}
add_filter('login_errors', 'login_error_override', 999);

/**
 * Set remember option to checked as default
 */
function login_checked_remember_me() {
	add_filter( 'login_footer', 'rememberme_checked' );
}
add_action( 'init', 'login_checked_remember_me' );

function rememberme_checked() {
	echo "<script>document.getElementById('rememberme').checked = true;</script>";
}

/**
 * Remove wordpress generator meta tag
 */
remove_action('wp_head', 'wp_generator');

?>