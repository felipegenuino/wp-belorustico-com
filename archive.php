<?php get_header(); ?>


<?php //para categorias precisa refatorar  ?>
<?php get_template_part( 'parts/part-hero-page' ); ?>



  <div class="hero-page">
    <div class="row">
        <div class="small-12 colluns">
          <h1 class="archive-title"> <strong>Products</strong> / <span><?php single_cat_title( '', true ); ?> </span></h1>
        </div>
    </div>
  </div>


<div class="row">



      <ul class="medium-block-grid-4">
        
          <?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

          
                  <li class="card__product"> 


                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="card__product--link-thumb" > <?php the_post_thumbnail( '', array('class' => 'card__product--link-thumb-img') ); ?>  </a>  
                    <?php endif; ?>
                    <?php the_title( '<span class="card__product--title" >', '</span>' ); ?>
                     <span class="card__product--dimension"><?php the_field('acf_product_dimensions') ?> </span>


                    <?php /* edit_post_link('editar', '<small class="edit-content">', '</small>  ');  */?>

                    
        <?php /* $images = get_field('acf_product_gallery');
              if( $images ): ?>
                  <ol>
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <ol>
                            <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                            <li><strong>Imagem</strong> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                            <li><strong>Titulo</strong> <?php echo $image['title']; ?></li>
                            <li><strong>Caption</strong> <?php echo $image['caption']; ?></li>
                            <li><strong>Description</strong> <?php echo $image['description']; ?></li>
                          </ol>
                         </li>
                    <?php endforeach; ?>
                  </ol>
        <?php endif; */?>


         



                     

                    </li> <!-- //card -->
         
           <?php endwhile; ?>



      <?php else : ?>

         <li class="card__product">  Nada cadastrado!</li>

        <?php endif; // End have_posts() check. ?>



       
      <ul>


</div> <!-- end row -->


<?php get_footer(); ?>
