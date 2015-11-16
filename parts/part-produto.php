<div class="row">

<?php if (is_front_page() )  { ?>
  <div class="small-12 columns">
      <h1 class="featured-title"> Featured Products</h1>
    </div>
<? }   ?>


        <ul class="medium-block-grid-2 large-block-grid-3 block-grid-list-products ">

        <?php

             if (is_front_page() ) {
                  $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => -1,
                  'fix_home' => 'fixo-na-home',
                  'order' => 'ASC'
                  );

              } else{
                 $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'order' => 'ASC'
                );
              }


            $query = new WP_Query($args);
            ?>

            <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

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





                        <?php endwhile; endif; wp_reset_postdata(); ?>
        <ul>


</div><!-- end row -->
