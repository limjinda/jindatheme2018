<?php 
	/* Template Name: Homepage */ 
	get_header(); 

	$portfolios = new WP_Query( array(
		'post_type' => 'works',
		'posts_per_page' => 16,
		'order' => 'asc',
		'order_by' => 'date'
	) );
	$portfolios_count = 0;

	$testimonials = new WP_Query( array( 
		'post_type' => 'testimonials',
		'posts_per_page' => 3,
		'order' => 'asc',
		'order_by' => 'date'
	));

?>
<main class="main">

	<!-- hero block -->
	<div class="hero-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h2>HANDCRAFT DIGITAL PLATFORMS</h2>
					<h3>By the software lover</h3>
				</div>
				<div class="col-sm-4">
					&nbsp;
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup-header.png" class="hero-image" alt="JindaTheme" />
		</div>
	</div>

	<!-- intro -->
	<div class="lead-section-block">
		<div class="container">
			<h1>JINDATHEME</h1>
			<p>We create beautiful products people would love to use</p>
		</div>
	</div>

	<!-- features -->
	<div class="featured-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/mockup-web.png" class="img-responsive" alt="Responsive website" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title">Responsive Website</p>
							<p class="_description">
								Super neat fully responsive website fit for all screens. Our experts will help transform your idea into a perfect gem
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/mockup-app.png" class="img-responsive" alt="Mobile App" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title">Mobile App</p>
							<p class="_description">
								Reach your business goal with superfine iOS and Android app, ease of use and super (user) friendly!
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="featured-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/img/mockup-consult.png" class="img-responsive" alt="Consulting" />
							<span class="grey-background"></span>
						</figure>
						<div class="featured-content">
							<p class="_title">Consulting</p>
							<p class="_description">
								We also provide a perfect informations for our customers including server, IT infrastructure and many more
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
					<img src="<?php echo get_template_directory_uri() ?>/img/mockup-work.jpg" class="img-responsive work-imagery" alt="Works" />
				</div>
				<div class="col-sm-5">
					<div class="content">
						<h3 class="main-header">Our Clients</h3>
						<p>
							It’s good to be a part of your successful, but we are over the moon when your customer says they love to use your web and mobile app.
						</p>
						<ul class="clients-list list-unstyled">
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/planetcomm.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/atreasurebox.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/gourmetmarket.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/dpx.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/bu.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/mahidol.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/maia.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/gettgo.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/evk.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/seatran.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/parkingduck.png" class="client-image" alt="client"></li>
							<li><img src="<?php echo get_template_directory_uri() ?>/img/clients/cloudandthing.png" class="client-image" alt="client"></li>
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
			<div class="row">
				<?php if ( $portfolios->have_posts() ) : while ( $portfolios->have_posts() ) : $portfolios->the_post(); $portfolios_count++ ?>
					<div class="col-sm-3">
						<?php if ($portfolios_count % 2 != 0): ?>
						<div class="portfolio-card">
							<figure>
								<a href="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="image-popup" title="<?php the_title(); ?>">
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
								<a href="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="image-popup" title="<?php the_title(); ?>">
									<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'jindatheme-portfolio-cover') : 'https://www.placehold.it/540x540' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
								</a>
							</figure>
						</div>
						<?php endif ?>
					</div>	
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>

	<!-- testimonial -->
	<div class="testimonial-block" id="testimonials">
		<div class="container">
			<h3 class="main-header">Testimonial</h3>
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
						We are young and passionate developer, who want to build a better software for the better internet.
					</p>
					<blockquote class="quote">
						The only way to do great work is to love what you do
					</blockquote>
					<p class="quote-by">— Steve Jobs</p>
				</div>
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri() ?>/img/mockup-team.jpg" class="img-responsive about-image" alt="About" />
				</div>
			</div>
		</div>
	</div>

	<!-- map -->
	<div class="map-block">
		<div id="map-canvas"></div>
		<div class="map-contact">
			<h3 class="main-header">Contact Us</h3>
			<p><?php the_field('address', 'option') ?></p>
			<ul class="contact-list">
				<li><strong>Email:</strong> <?php the_field('email', 'option') ?></li>
				<li><strong>Tel:</strong> <?php the_field('phone_number', 'option') ?></li>
			</ul>
			<ul class="social-list list-unstyled">
				<?php if (get_field('enable_facebook', 'option')): ?>
					<li><a href="<?php the_field('facebook_url', 'option') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="Facebook"></a></li>
				<?php endif ?>
				<?php if (get_field('enable_github', 'option')): ?>
					<li><a href="<?php the_field('github_url', 'option') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icon-github.png" alt="Github"></a></li>
				<?php endif ?>
				<?php if (get_field('enable_instagram', 'option')): ?>
					<li><a href="<?php the_field('instagram_url', 'option') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icon-instagram.png" alt="Instagram"></a></li>
				<?php endif ?>
			</ul>
			<ul class="addon-button-list list-unstyled">
				<?php if (get_field('enable_line', 'option')): ?>
					<li><a href="<?php the_field('line_url', 'option') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/line-add.png" alt="Add line"></a></li>
				<?php endif; ?>
				<li><a href="<?php the_field('dbd_url', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/dbd-silver.png" alt="DBD"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</main>

<?php get_footer(); ?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCq_YDQn6963EdIfS7WbiJpiR5MORtx7Q&callback=initMap"></script>