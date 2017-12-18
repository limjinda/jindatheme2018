<?php
	get_header();
	$category = get_the_category();
	$related_posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'random',
		'cat' => $category[0]->term_id,
		'post__not_in' => array($post->ID)
	));
?>

<main class="main">
	<div class="blog-wrapper">
		<div class="container">
			
			<div class="blog-title">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<p>
					<span class="meta-date"><img src="<?php echo get_template_directory_uri() ?>/img/icon-publish.png" alt="Publish" /> Published: <?php echo get_the_date('d/m/Y') ?></span>
					<span class="meta-category"><img src="<?php echo get_template_directory_uri() ?>/img/icon-folder.png" alt="Category" /> Category: <?php echo $category[0]->name ?></span>
				</p>
			</div>

			<div class="blog-content">
				<div class="row">
					<div class="col-sm-8">
						<article class="entry-content">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; endif; ?>
						</article>
						<!-- related -->
						<?php if ($related_posts->have_posts()): ?>
						<div class="related-block">
							<h3>Related Posts</h3>
							<div class="row">
								<?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
									<div class="col-sm-4">
										<div class="flat-card">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="_image img-responsive" alt="card" /></a>
											<div class="_content">
												<p><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></p>
											</div>
										</div>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-4">
						<aside class="blog-sidebar">
							<?php get_sidebar(); ?>
						</aside>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>

<?php get_footer(); ?>