<?php
/**
 * Index aqui
 */
get_header(); ?>



<section class="hero-home">
	<img class="hero-home--img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image.jpg" alt="">
</section> 



<?php get_template_part( 'parts/part-produto' ); ?>



<?php get_footer(); ?>
