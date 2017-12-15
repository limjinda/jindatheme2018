<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-16x16.png">
	  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicons/manifest.json">
	  <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/safari-pinned-tab.svg" color="#eac040">
	  <meta name="theme-color" content="#eca040">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class() ?>>
		
		<div class="wrapper">

			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="logo-block">
								<a href="<?php home_url() ?>" title="<?php bloginfo('name') ?>">
									<img src="<?php echo get_template_directory_uri() ?>/img/jindatheme-logo-white.png" class="site-logo img-responsive" alt="<?php bloginfo('name') ?>">
								</a>
							</div>
						</div>
						<div class="col-sm-9">
							<nav class="top-navigation">
								<ul class="list-unstyled msr">
									<?php wp_nav_menu( array(
										'menu' => 'top',
										'container' => false,
										'menu_class' => 'list-unstyled menu'
									)) ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>