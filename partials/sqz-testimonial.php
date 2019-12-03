<?php
/**
 * The template for displaying Testimonial Slider
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */


?>

<section class="sqz-section sqz-large_padding sqz-testimonial sqz-light_bgr">
 <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8">
  <div class="sqz-testimonial_slider owl-carousel">
    <?php
    $args_testimonial = array(
     'post_type' =>'testimonial',
     'posts_per_page' =>'-1',
     'order' => 'ASC',
     'orderby'  => 'rand'
   );
    $wp_query_testimonial = new WP_Query(  $args_testimonial );
    if( $wp_query_testimonial->have_posts() ) :
     while( $wp_query_testimonial->have_posts() ) :  $wp_query_testimonial->the_post();

      $author_name = get_field('author_name');
    //  $testiomanials_rate = get_field('testiomanials_rate');
     ?>
      <div class="item text-center">
        
              <?php the_content(); ?>
              
              <?php $testiomanials_rate=5; //if($testiomanials_rate) { $testiomanials_rate=$testiomanials_rate; } else {$testiomanials_rate=5; } ?>
          <div class="sqz-rating">
                 <?php for($i=1; $i<=$testiomanials_rate; $i++){
                ?>
          
                       <i class="mdi mdi-star" aria-hidden="true"></i>
          <?php  } ?>
          </div>
             
          <?php if($author_name){ ?>
                <h6><?php echo $author_name; ?></h6>
              <?php } else { ?>
                <h6><?php the_title(); ?></h6>
              <?php } ?>
            </div>
          
      <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>
</div>
</div>
        </div>
      </div>
</section>

<script>
//<![CDATA[
jQuery(document).ready(function($) {
  $(".sqz-testimonial_slider").owlCarousel({
      nav : true, // Show next and prev buttons
      dots : false,
      navText: ["<i class='mdi mdi-chevron-left'></i>","<i class='mdi mdi-chevron-right'></i>"],
      autoplay: true,
      // slideSpeed : <?php echo $sqz_slider_speed; ?>,
      items:true,
      loop:true,
    
     


    });

});
//]]>
</script>
