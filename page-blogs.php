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
						<h2 class="page-title"><?php _e('Blog', 'jindatheme') ?></h2>
						<p><?php _e('Sometime, we wrote about user experience, policies and products. Hope it help you to clearly understand what we do and who we are :)', 'jindatheme') ?></p>
					</div>
					<div class="col-sm-4">
						&nbsp;
					</div>
				</div>
			</div>
			
			<div class="blog-content">
				<!-- filter -->
				<?php
					$filter_categories = get_categories();
					$filter_array = array();
				?>
				<div class="blog-filter-bar">
					<ul class="list-unstyled">
						<li class="active"><a href="javascript:void(0)" data-filter="*"><?php _e('All Categories', 'jindatheme') ?></a></li>
						<?php foreach ($filter_categories as $index => $filter) { ?>
							<li><a href="javascript:void(0)" data-filter=".<?php echo $filter->slug ?>"><?php echo $filter->name ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<!-- blogs -->
				<div class="blog-list">
					<div class="row">
						<?php if ($blogs->have_posts()) { ?>
							<?php while ($blogs->have_posts()) { $blogs->the_post(); ?>
								<?php 
									$categories = get_the_category(); 
									$cate_array = array();
									foreach ($categories as $cate) { 
										array_push($cate_array, $cate->slug);
									}
								?>
								<div class="col-sm-3 grid-item <?php echo join(' ', $cate_array); ?>" data-category="<?php echo join(' ', $cate_array); ?>">
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
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
</main>


<?php get_footer(); ?>