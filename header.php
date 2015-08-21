<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">
			<nav id="headermenu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
			<section id="branding">
				<div id="site-title">
					<h1><?php bloginfo( name ); ?> </h1>
				</div>
			</section>
		</header>
		<div id="container">