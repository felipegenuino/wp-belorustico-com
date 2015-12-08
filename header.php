<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="UTF-8">

<title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="canonical" href="<?php bloginfo('url'); ?>" />
	<meta name="description" content="We are a 10 year old company in Brazil who specialize in the production of beautifully handcrafted sustainable furniture made from the finest and most characterful hand selected beams of reclaimed wood.">
	<meta name="keywords" content="reclaimed, sustainable, specialize, handcrafted,  furniture, Brazil, iron table, bench, buffet, chair, china cabinet, decor, desk, dish cabinet, dresser, nightstand, rack, sideboard, table, wine cellar ">


	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<meta property="og:locale" content="pt_br" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="Belo Rustico | Reclaimed & Sustainable" />
	<meta property="og:description" content="We are a 10 year old company in Brazil who specialize in the production of beautifully handcrafted sustainable furniture made from the finest and most characterful hand selected beams of reclaimed wood." />
	<meta property="og:url" content="http://www.belorustico.com" />
	<meta property="og:site_name" content="Belo Rústico" />
	<meta property="og:image" content="http://www.belorustico.com/wp-content/themes/belorustico/assets/img/og-image.jpg"/>
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">



	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>



<header class="main-header">
	<div class="brand-main">




<a href="<?php bloginfo('home'); ?>" class="brand-main__link">

 <?php if ( get_field('acf_options_brand') ) { ?>
 		<img class="brand-main__link--img have-brand" src="<?php the_field('acf_options_brand', 'option'); ?>" alt="">
 <?php } else { ?>
 	 	<img class="brand-main__link--img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand-main.png" alt="">
 <?php } ?>

</a>




	</div> <!-- // brand-main -->

	<?php menuPrincipal(); ?>

</header>
