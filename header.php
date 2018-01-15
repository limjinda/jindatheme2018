<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo ICL_LANGUAGE_CODE ?>"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon.png">
	  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png?v=2" />
	  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicons/manifest.json">
	  <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/safari-pinned-tab.svg" color="#eac040">
	  <meta name="theme-color" content="#eca040">
	  <meta name="format-detection" content="telephone=no">
	  <!-- facebook -->
	  <meta property="fb:app_id" content="564475063661430">
	  <meta property="og:url" content="https://www.jindatheme.com">
	  <meta property="og:type" content="website">
	  <meta property="og:title" content="Web & Mobile development by JindaTheme">
	  <meta property="og:image" content="https://www.jindatheme.com/assets/facebook-cover.png">
	  <meta property="og:description" content="handcraft digital platforms by web and mobile developer experts">
	  <meta property="og:site_name" content="JindaTheme">
	  <meta property="og:locale" content="en_US">
	  <meta property="article:author" content="JindaTheme">
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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=564475063661430';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
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