<section class="hero-page">
	<img
	class="hero-page--img"
	data-interchange="
	[<?php if ( get_field('acf_banner_page_large') ) { ?>    <?php the_field('acf_banner_page_large'); ?>     <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-page-image-large.jpg <?php }  ?> , (default)],
	[<?php if ( get_field('acf_banner_page_small') ) { ?>    <?php the_field('acf_banner_page_small'); ?>     <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-page-image-small.jpg <?php }  ?> , (small)],
	[<?php if ( get_field('acf_banner_page_medium') ) { ?>   <?php the_field('acf_banner_page_medium'); ?>   	<?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-page-image-medium.jpg <?php } ?> , (medium)],
	[<?php if ( get_field('acf_banner_page_large') ) { ?>    <?php the_field('acf_banner_page_large'); ?>     <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-page-image-large.jpg <?php }  ?> , (large)]
	">
</section>
