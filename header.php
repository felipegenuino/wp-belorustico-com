<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="UTF-8">

<title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="canonical" href="<?php bloginfo('url'); ?>" />
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
	<meta name="keywords" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit">

 	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">



	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>



<header class="main-header">
	<div class="brand-main">
		<a href="<?php bloginfo('home') ?>" class="brand-main__link"><img class="brand-main__link--img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand-main.png" alt=""></a>
	</div> <!-- // brand-main -->
	
	<?php menuPrincipal(); ?>
	
</header>
