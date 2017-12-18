<?php 
	/* Template Name: Blogs */ 
	get_header();
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
						<?php for ($i = 0; $i < 8; $i++) { ?>
							<div class="col-sm-3">
								<div class="flat-card">
									<a href="#"><img src="https://www.placehold.it/270x270" class="_image" alt="card" /></a>
									<div class="_content">
										<p><a href="#">หนังสือสัญญาของเราครอบคลุมอะไรบ้าง</a></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>


<?php get_footer(); ?>