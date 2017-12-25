<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700|Poppins" rel="stylesheet">

<style>
	.error-page-block{ 
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #4E5356 url('<?php echo get_template_directory_uri() ?>/img/404.jpg') center center fixed;
		background-size: cover;
	}
	.error-wrapper {
		text-align: center;
		max-width: 100%;
		width: 960px;
		height: auto;
		margin: auto;
		padding: 120px 0 0;
	}
	h1 {
		text-align: center;
		color: #FFFFFF;
		font-weight: bold;
		font-size: 240px;
		font-family: 'Montserrat Alternates', sans-serif;
		margin: 0 auto;
		text-shadow: 0 24px 24px rgba(0,0,0,0.6);
	}
	h3 {
		text-align: center;
		font-family: 'Poppins', sans-serif;
		color: #FFFFFF;
		font-weight: bold;
		font-size: 32px;
		margin: 0 auto 40px;
		text-shadow: 0 4px 4px rgba(0,0,0,0.8);
	}
	a {
		color: #FFFFFF;
		background-color: #eca040;
		border: 2px solid #d59946;
		border-bottom: 4px solid #d59946;
		padding: 12px 32px;
		border-radius: 8px;
		font-size: 20px;
		text-decoration: none;
		font-family: 'Poppins', sans-serif;
		-webkit-box-shadow: 0 8px 16px rgba(0,0,0,0.8);
		box-shadow: 0 8px 16px rgba(0,0,0,0.8);
		display: inline-block;
	}
	a:hover {
		background-color: #2C6280;
		border: 2px solid #275872;
		border-bottom: 4px solid #275872;
	}
</style>

<div class="error-page-block">
	<div class="error-wrapper">
		<h1>404</h1>
		<h3>The page you were looking for doesn't exist</h3>
		<a href="<?php echo get_bloginfo('url') ?>">Go back to homepage</a>
	</div>
</div>