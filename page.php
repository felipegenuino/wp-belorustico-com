<?php get_header(); ?>


<?php get_template_part( 'parts/part-hero-page' ); ?>



<div class="row">
	<div class="small-12 medium-8 medium-offset-2 columns" role="main">

 
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
 				 
  			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			 
 		</article>
	<?php endwhile;?>

 
	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
