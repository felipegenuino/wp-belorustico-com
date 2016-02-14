<?php get_header(); ?>


<link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.theme.css" rel="stylesheet">
   <script src="http://owlgraphic.com/owlcarousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">


$(document).ready(function() {
 
  $("#owl-modal").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoHeight : true,
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});


 $(document).ready(function() {
 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: false,
    pagination:false,
    autoHeight : true,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    items : 5,
    itemsDesktop      : [1199,5],
    itemsDesktopSmall     : [979,5],
    itemsTablet       : [768,4],
    itemsMobile       : [479,3],
    pagination:false,
    autoHeight : true,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }
 
});

</script>



<style type="text/css">

#sync1 .item{
    background: #0c83e7;
     margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}
#sync2 .item{
    
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 2px solid transparent;
    text-align: center;
    cursor: pointer;
}
#sync2 .item h1{
  font-size: 18px;
}
#sync2 .synced .item{
  background: #0c83e7;
}







#owl-modal .owl-controls {
    margin-top: 10px;
    text-align: center;
    position: absolute !important;
    bottom: 0 !important;
    right: 0 !important;
    left: 0 !important;
}

#owl-modal .owl-controls .owl-page span{
  border: 1px solid #fff  ;
}
</style>
 
 







 











	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">




<div class="row">

 


	<div class="medium-12 large-7 columns single-product-slide" >


 

<div id="sync1" class="owl-carousel">
  <?php  $images = get_field('acf_product_gallery');  if( $images ): ?>
       <?php foreach( $images as $image ): ?>
        <div class="item">
          <a href="<?php echo $image['url']; ?>"  data-reveal-id="modal-carousel">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
          </div>
            <?php endforeach; ?>
         <?php endif; ?>
</div>
<div id="sync2" class="owl-carousel">
     <?php  $images = get_field('acf_product_gallery');  if( $images ): ?>
       <?php foreach( $images as $image ): ?>
           <div class="item"> 
            <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" />
           </div>
           <?php endforeach; ?>
         <?php endif; ?>
</div>




 
     <div id="modal-carousel" class="reveal-modal xlarge" style="padding: 0;" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
   
                <div id="owl-modal" class="owl-carousel">
                  <?php  $images = get_field('acf_product_gallery');  if( $images ): ?>
                       <?php foreach( $images as $image ): ?>
                        <div class="item">
                          <a href="<?php echo $image['url']; ?>"  data-reveal-id="modal-carousel">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                          </div>
                            <?php endforeach; ?>
                         <?php endif; ?>
                </div>


                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>



	</div><!-- // end columns -->



 




  <div class="medium-12 large-5 columns single-product-content" >
    <h1 class="product_title"><?php the_title(); ?></h1>
    <h5 class="product_dimension"><?php the_field('acf_product_dimensions') ?> </h5>
    <div class="product_description"><?php  the_field('acf_product_description') ?></div>
        <div class="product_price"><span>Price (FOB) US$:</span> <?php  the_field('acf_product_price') ?></div>

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






 
