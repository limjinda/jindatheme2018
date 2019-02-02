<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo ICL_LANGUAGE_CODE ?>"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="mobile-web-app-capable" content="yes">
   	<meta name="apple-mobile-web-app-capable" content="yes">
	  <meta name="theme-color" content="#eca040">
	  <meta name="format-detection" content="telephone=no">
	  <meta name="application-name" content="Web and mobile development by JindaTheme"/>
	  <meta name="msapplication-TileColor" content="#FFFFFF" />
	  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/img/favicons/mstile-144x144.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-57x57.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-114x114.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-72x72.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-144x144.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-120x120.png" />
	  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-152x152.png" />
	  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png" sizes="32x32" />
	  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-16x16.png" sizes="16x16" />
	  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico?v=1.1"> 
	  <!-- Google Tag Manager -->
	  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	  })(window,document,'script','dataLayer','GTM-5KK4DN');</script>
	  <!-- End Google Tag Manager -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class() ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KK4DN"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="wrapper">
			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="logo-block">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>">
									<img src="<?php echo get_template_directory_uri() ?>/img/jindatheme-logo-white.png" class="site-logo img-responsive" alt="<?php bloginfo('name') ?>">
								</a>
							</div>
						</div>
						<div class="col-sm-8 col-md-9">
							<nav class="top-navigation">
								<?php wp_nav_menu( array(
									'menu' => 'top',
									'container' => false,
									'menu_class' => 'list-unstyled msr menu'
								)) ?>
							</nav>
						</div>
					</div>
					<!-- toggle nav -->
					<a href="javascript:void(0)" class="mobile-navigation-button">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</a>
				</div>
			</header>
