<?php 
	/* Template Name: Blogs */ 
	get_header();
	$blogs = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'order' => 'desc',
		'order_by' => 'date'
	))
?>

<main class="main">
	<div class="blog-wrapper">
		<div class="container">
			
			<div class="blog-title">
				<div class="row">
					<div class="col-sm-8">
						<h2 class="page-title">Blog</h2>
						<p>Sometime, we wrote about user experience, policies and products Hope it help you to clearly understand what we do and who we are :)</p>
					</div>
					<div class="col-sm-4">
						&nbsp;
					</div>
				</div>
			</div>
			
			<div class="blog-content">
				<!-- filter -->
				<div class="blog-filter-bar">
					<ul class="list-unstyled">
						<li class="active"><a href="javascript:void(0)" data-filter="*">All Categories</a></li>
						<li><a href="javascript:void(0)" data-filter="*">Hire Us</a></li>
						<li><a href="javascript:void(0)" data-filter="*">User Experience</a></li>
						<li><a href="javascript:void(0)" data-filter="*">Web development</a></li>
						<li><a href="javascript:void(0)" data-filter="*">Hosting and Domain</a></li>
						<li><a href="javascript:void(0)" data-filter="*">SEO</a></li>
						<li><a href="javascript:void(0)" data-filter="*">Our Products</a></li>
					</ul>
				</div>
				<!-- blogs -->
				<div class="blog-list">
					<div class="row">
						<?php if ($blogs->have_posts()) { ?>
							<?php while ($blogs->have_posts()) { $blogs->the_post(); ?>
								<div class="col-sm-3">
									<div class="flat-card">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="_image img-responsive" alt="card" /></a>
										<div class="_content">
											<p><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></p>
										</div>
									</div>
								</div>
							<?php } wp_reset_postdata() ?>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>


<?php get_footer(); ?>