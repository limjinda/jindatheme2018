<?php 
	/* Template Name: Homepage */ 
	get_header(); 

	$portfolios = new WP_Query( array(
		'post_type'      => 'works',
		'posts_per_page' => 16,
		'order'          => 'asc',
		'order_by'       => 'date'
	) );
	$portfolios_count = 0;

	$testimonials = new WP_Query( array( 
		'post_type'      => 'testimonials',
		'posts_per_page' => 3,
		'order'          => 'asc',
		'order_by'       => 'date'
	));

	$clients = new WP_Query(array(
		'post_type'     => 'clients',
		'posts_per_page' => 16,
		'order'         => 'asc',
		'order_by'      => 'date'
	));

?>
<main class="main">

	<!-- hero block -->
	<div class="hero-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h2><?php _e('HANDCRAFTED DIGITAL PLATFORMS', 'jindatheme') ?></h2>
					<h3><?php _e('By software lovers', 'jindatheme') ?></h3>
				</div>
				<div class="col-sm-4">
					&nbsp;
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri() ?>/img/hero-image.png" class="hero-image" alt="JindaTheme" />
		</div>
	</div>

	<!-- intro -->
	<div class="lead-section-block">
		<div class="container">
			<h1>JINDATHEME</h1>
			<p><?php _e('We create beautiful products people love to use', 'jindatheme') ?></p>
		</div>
	</div>

	<!-- features -->
	<div class="featured-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/gif/website.gif" alt="Web development" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title"><?php _e('Responsive Website', 'jindatheme') ?></p>
							<p class="_description">
								<?php _e('Super neat fully responsive website that fits all screens. Our experts will help transform your idea into a perfect gem', 'jindatheme') ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/gif/app.gif" alt="Application" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title"><?php _e('Mobile App', 'jindatheme') ?></p>
							<p class="_description">
								<?php _e('Reach your business goals with superfine iOS and Android apps, ease of use and super (user) friendly experience!', 'jindatheme') ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/gif/consult.gif" alt="Consulting" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title"><?php _e('Consulting', 'jindatheme') ?></p>
							<p class="_description">
								<?php _e('We provide sound advice for our customers on IT infrastructure, software development, go-to-market strategies and much more', 'jindatheme') ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- imagery -->
	<div class="imagery-block" id="works">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<img src="<?php echo get_template_directory_uri() ?>/img/works-image.png" class="img-responsive work-imagery" alt="Works" />
				</div>
				<div class="col-sm-5">
					<div class="content">
						<h3 class="main-header"><?php _e('Our Clients', 'jindatheme') ?></h3>
						<p>
							<?php _e('It’s good to be a part of your success, but we are over the moon when your customer tell you they love to use your web and mobile app.', 'jindatheme') ?>
						</p>
						<ul class="clients-list list-unstyled">
							<?php if ($clients->have_posts()): while ($clients->have_posts()): $clients->the_post(); ?>
								<li><img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : 'https://www.placehold.it/115x50' ?>" class="client-image" alt="<?php the_title(); ?>"></li>
							<?php endwhile; wp_reset_postdata(); endif; ?>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- portfolio -->
	<div class="portfolio-block" id="portfolio">
		<div class="container">
			<div class="owl-carousel owl-theme">
				<?php if ( $portfolios->have_posts() ) : while ( $portfolios->have_posts() ) : $portfolios->the_post(); $portfolios_count++ ?>
					<?php if ($portfolios_count % 2 != 0): ?>
					<div class="portfolio-card">
						<figure>
							<a href="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : 'https://www.placehold.it/540x540' ?>" class="image-popup" title="<?php the_title(); ?>">
								<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
							</a>
						</figure>
						<div class="portfolio-content">
							<p class="_title"><?php the_title(); ?></p>
							<p class="_category"><?php the_field('type'); ?></p>
							<p class="_link"><?php the_field('link'); ?></p>
						</div>
					</div>
					<?php else: ?>
					<div class="portfolio-card invert">
						<div class="portfolio-content">
							<p class="_title"><?php the_title(); ?></p>
							<p class="_category"><?php the_field('type'); ?></p>
							<p class="_link"><?php the_field('link'); ?></p>
						</div>
						<figure>
							<a href="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : 'https://www.placehold.it/540x540' ?>" class="image-popup" title="<?php the_title(); ?>">
								<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
							</a>
						</figure>
					</div>
					<?php endif ?>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>

	<!-- testimonial -->
	<div class="testimonial-block" id="testimonials">
		<div class="container">
			<h3 class="main-header"><?php _e('Testimonial', 'jindatheme') ?></h3>
			<div class="row">
				<?php if ($testimonials->have_posts()): while($testimonials->have_posts()): $testimonials->the_post(); ?>
				<!-- people card -->
				<div class="col-sm-4">
					<div class="testimonial-card">
						<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : 'https://www.placehold.it/140x262' ?>" class="eq-content" alt="<?php the_title(); ?>" />
						<div class="content eq-content">
							<p class="_name"><?php the_title(); ?></p>
							<p class="_title"><?php the_field('title') ?></p>
							<p class="_description"><?php the_field('quote') ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>

	<!-- about -->
	<div class="about-block" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="main-header">JindaTeam</h3>
					<p>
						<?php _e('We are young and passionate developers, who want to build great software for a better internet.', 'jindatheme') ?>
					</p>
					<blockquote class="quote">
						The only way to do great work is to love what you do
					</blockquote>
					<p class="quote-by">— Steve Jobs</p>
				</div>
				<div class="col-sm-6">
					<div class="team-info-block">
						<div class="row">
							<div class="col-sm-6">
								<div class="avatar-left-block">
									<img src="<?php echo get_template_directory_uri() ?>/img/avatar-product.png" alt="Product Lead" />
									<div class="team-info">
										<p class="_name">Jirayu Limjinda</p>
										<p class="_title"><?php _e('Product Lead', 'jindatheme') ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="avatar-left-block">
									<img src="<?php echo get_template_directory_uri() ?>/img/avatar-technical.png" alt="Product Lead" />
									<div class="team-info">
										<p class="_name">Pawit Khid-arn</p>
										<p class="_title"><?php _e('Technical Lead', 'jindatheme') ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="expertise-block">
						<h3 class="block-header">
							<img src="<?php echo get_template_directory_uri() ?>/img/icon-expertise.png" alt="Our Expertise" />
							<?php _e('Our Expertise', 'jindatheme') ?>
						</h3>
						<div class="expertise-row">
							<span>Ruby on Rails</span>
							<div class="percentage-bar rails"></div>
							<div class="clearfix"></div>
						</div>
						<div class="expertise-row">
							<span>WordPress</span>
							<div class="percentage-bar wordpress"></div>
							<div class="clearfix"></div>
						</div>
						<div class="expertise-row">
							<span>UI/UX Design</span>
							<div class="percentage-bar uiux"></div>
							<div class="clearfix"></div>
						</div>
						<div class="expertise-row">
							<span>Responsive Website</span>
							<div class="percentage-bar responsive"></div>
							<div class="clearfix"></div>
						</div>
						<div class="expertise-row">
							<span>Jolliness</span>
							<div class="percentage-bar happiness"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- map -->
	<div class="map-block">
		<div id="map-canvas"></div>
		<div class="map-contact">
			<h3 class="main-header"><?php _e('Contact Us', 'jindatheme') ?></h3>
			<p><?php the_field('address', 'option') ?></p>
			<ul class="contact-list">
				<li><strong><?php _e('Email', 'jindatheme') ?>:</strong> <?php the_field('email', 'option') ?></li>
				<li><strong><?php _e('Tel', 'jindatheme') ?>:</strong> <?php the_field('phone_number', 'option') ?></li>
			</ul>
			<ul class="social-list list-unstyled">
				<?php if (get_field('enable_facebook', 'option')): ?>
					<li><a href="<?php the_field('facebook_url', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="Facebook"></a></li>
				<?php endif ?>
				<?php if (get_field('enable_github', 'option')): ?>
					<li><a href="<?php the_field('github_url', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-github.png" alt="Github"></a></li>
				<?php endif ?>
				<?php if (get_field('enable_instagram', 'option')): ?>
					<li><a href="<?php the_field('instagram_url', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-instagram.png" alt="Instagram"></a></li>
				<?php endif ?>
			</ul>
			<ul class="addon-button-list list-unstyled">
				<?php if (get_field('enable_line', 'option')): ?>
					<li><a href="<?php the_field('line_url', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/line-add.png" alt="Add line"></a></li>
				<?php endif; ?>
				<li><script src="https://www.trustmarkthai.com/callbackData/initialize.js?t=42c-38-5-6a926038faaeaea2f57cb8fb483d469abf92522522" id="dbd-init"></script><div id="Certificate-banners"></div></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</main>

<?php get_footer(); ?>