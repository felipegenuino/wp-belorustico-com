<?php
/**
 * Index aqui
 */
get_header(); ?>



<section class="hero-home">
	<img
			class="hero-home--img"
			data-interchange="
				[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image.jpg, (default)],
				[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-small.jpg, (small)],
				[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-medium.jpg, (medium)],
	 			[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-large.jpg, (large)]
				">
</section>



<?php get_template_part( 'parts/part-produto' ); ?>



<?php get_footer(); ?>
