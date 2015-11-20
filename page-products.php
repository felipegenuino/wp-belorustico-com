<?php
/**
 * Template Name: Page all Products
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>


 

<?php get_template_part( 'parts/part-hero-page' ); ?>


<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
 				 
  			<div class="entry-content">
				<?php the_content(); ?>

				 <?php get_template_part( 'parts/part-produto' ); ?>

			</div>
			
 		</article>
	<?php endwhile;?>






<?php get_footer(); ?>
