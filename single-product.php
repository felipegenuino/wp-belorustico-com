<?php get_header(); ?>


<script src="http://malsup.github.io/jquery.cycle2.js"></script>

<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<!-- <script src="http://malsup.github.io/jquery.cycle2.tile.js"></script>
 -->


	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">




<div class="row">




	<div class="medium-12 large-7 columns single-product-slide" >



<style>
* { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
#cycle-1 div { width:100%; }
#cycle-2 .cycle-slide { border:3px solid #fff; }
#cycle-2 .cycle-slide-active { border:3px solid #004; }

#slideshow-1,#slideshow-2 { width: 100%; max-width: 600px; margin: auto }
#slideshow-2 { margin-top: 10px; margin-bottom: 50px; }
.cycle-slideshow img { width: 100%; height: auto; display: block; }
</style>


<div id="slideshow-1" >
		<!-- http://www.w3schools.com/charsets/ref_utf_dingbats.asp -->
         <a href="#" class="cycle-prev">&#10094;  </a>
         <a href="#" class="cycle-next"> &#10095; </a>
		<!-- <span class="custom-caption"></span> -->
     <div id="cycle-1" class="cycle-slideshow"
        data-cycle-slides="> div"
        data-cycle-timeout="0"
        data-cycle-prev="#slideshow-1 .cycle-prev"
        data-cycle-next="#slideshow-1 .cycle-next"
        data-cycle-caption="#slideshow-1 .custom-caption"
        data-cycle-caption-template="Slide {{slideNum}} of {{slideCount}}"
        data-cycle-fx="tileBlind"
        >
          <?php  $images = get_field('acf_product_gallery');  if( $images ): ?>
			 <?php foreach( $images as $image ): ?>
			 <div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>  width=500 height=500" /></div>
        	 <?php endforeach; ?>
 		<?php endif; ?>
    </div>
</div>

<div id="slideshow-2">
    <div id="cycle-2" class="cycle-slideshow"
        data-cycle-slides="> div"
        data-cycle-timeout="0"
        data-cycle-prev="#slideshow-2 .cycle-prev"
        data-cycle-next="#slideshow-2 .cycle-next"
        data-cycle-caption="#slideshow-2 .custom-caption"
        data-cycle-caption-template="Slide {{slideNum}} of {{slideCount}}"
        data-cycle-fx="carousel"
        data-cycle-carousel-visible="5"
        data-cycle-carousel-fluid=true
        data-allow-wrap="false"
        >
        <?php  $images = get_field('acf_product_gallery');  if( $images ): ?>
			 <?php foreach( $images as $image ): ?>
			 <div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>  width=100 height=100" /></div>
        	 <?php endforeach; ?>
 		<?php endif; ?>

    </div>

</div>


<script>
jQuery(document).ready(function($){

var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function(e, opts) {
    // advance the other slideshow
    slideshows.not(this).cycle('goto', opts.currSlide);
});

$('#cycle-2 .cycle-slide').click(function(){
    var index = $('#cycle-2').data('cycle.API').getSlideIndex(this);
    slideshows.cycle('goto', index);
});

});
</script>



	</div><!-- // end columns -->









  <div class="medium-12 large-5 columns single-product-content" >
    <h1 class="product_title"><?php the_title(); ?></h1>
    <h5 class="product_dimension"><?php the_field('acf_product_dimensions') ?> </h5>
    <div class="product_price"><span>Price: USD $</span> <?php  the_field('acf_product_price') ?></div>
    <div class="product_description"><?php  the_field('acf_product_description') ?></div>
  </div><!-- // end columns -->







</div> <!-- // end row -->


   		</article>
	<?php endwhile;?>




<?php get_footer(); ?>




	<?php /*  $images = get_field('acf_product_gallery');
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
<?php endif; */ ?>
