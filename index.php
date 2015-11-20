<?php
/**
 * Index aqui
 */
get_header(); ?>



<section class="hero-home">

<img
class="hero-home--img"
data-interchange="
[<?php if ( get_field('acf_options_banner_large') ) { ?>       <?php the_field('acf_options_banner_large', 'option'); ?>       <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-large.jpg <?php }  ?> , (default)],
[<?php if ( get_field('acf_options_banner_small') ) { ?>       <?php the_field('acf_options_banner_small', 'option'); ?>       <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-small.jpg <?php }  ?> , (small)],
[<?php if ( get_field('acf_options_banner_medium') ) { ?>      <?php the_field('acf_options_banner_medium', 'option'); ?>      <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-medium.jpg <?php } ?> , (medium)],
[<?php if ( get_field('acf_options_banner_large') ) { ?>       <?php the_field('acf_options_banner_large', 'option'); ?>       <?php } else { ?>     <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-image-large.jpg <?php }  ?> , (large)]
">

</section>







		




<?php get_template_part( 'parts/part-produto' ); ?>



<?php get_footer(); ?>
