<?php 
if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>

<aside id="blog_sidebar" class="widget-area">
	<?php dynamic_sidebar('blog-sidebar'); ?>
</aside>