<?php
/**
 * The template for displaying Promotion section
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

                            $sqz_newpromo_remove_top_space = get_sub_field('newpromo_remove_top_space');
                            $sqz_newpromo_remove_bottom_space = get_sub_field('newpromo_remove_bottom_space');
                            $newpromo_topspacingpadding = $sqz_newpromo_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $newpromo_bottomspacingpadding = $sqz_newpromo_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true  
 $sqz_home_builder_promotion_show = get_sub_field('home_builder_promotion_show');
  if( have_rows('home_builder_promotion_list') && ($sqz_home_builder_promotion_show==1)): 
                           
?>
  <div id="section-promotion_slider" class="sqz-section sqz-medium_padding section-promotion_slider vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($newpromo_topspacingpadding.' '.$newpromo_bottomspacingpadding); ?>">
       <div class="sqz-promotion_slider owl-carousel">
        <?php while( have_rows('home_builder_promotion_list')): the_row();  
                    $sqz_promo_image = get_sub_field('promo_image');
                     $sqz_promo_title = get_sub_field('promo_title');
                     $sqz_promo_content = get_sub_field('promo_content');
                     $sqz_promo_button_link = get_sub_field('promo_button_link');
                     
                               $image_promotion=wp_get_attachment_image_src($sqz_promo_image,'full');
                                $image_promotion_2x=wp_get_attachment_image_src($sqz_promo_image,'full');
                    if($sqz_promo_image || trim($sqz_promo_title) || trim($sqz_promo_content)){
                        
        ?>
             <div class="sqz-slide" style="background-image:url(<?php // echo($image_promotion['0']); ?>);">
                  <div class="container-fluid">
                      <div class="row no-gutters justify-content-end sqz-module_content">
                        <?php if($sqz_promo_image){ ?>
                        <div class="col-12 col-lg-6 order-lg-12">
                            <img src="<?php echo($image_promotion['0']); ?>">
                        </div>
                        <?php } ?>
                        <?php if(trim($sqz_promo_title) || trim($sqz_promo_content)){ ?>
                          <div class="col-12 <?php if($sqz_promo_image){  echo('col-sm-12 col-md-12 col-lg-5 col-xl-4'); } else { echo('col-md-12'); } ?> align-self-center">
                              <div class="sqz-section sqz-small_padding">
                              <?php if(trim($sqz_promo_title)){  ?>
                                  <h2><?php echo($sqz_promo_title); ?></h2>
                              <?php } ?>
                                        <?php echo($sqz_promo_content); ?>
                              
                               <?php if($sqz_promo_button_link) : ?>
                                  <a href="<?php echo $sqz_promo_button_link['url']; ?>" class="sqz-btn sqz-btn_dark" <?php if($sqz_promo_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_promo_button_link['title']) { echo $sqz_promo_button_link['title']; } else { echo('Read More');} ?></a>
                               <?php endif; ?>
                                  </div>
                          </div>
                        <?php } ?>
                      </div>
                  </div>
             </div>
             <?php } ?>
        <?php  endwhile; ?>
       </div>
       <script>
//<![CDATA[
jQuery(document).ready(function($) {
  $(".sqz-promotion_slider").owlCarousel({
      nav : true, // Show next and prev buttons
      dots : false,
      navText: ["<i class='mdi mdi-chevron-left'></i>","<i class='mdi mdi-chevron-right'></i>"],
      autoplay: true,
      // slideSpeed : <?php echo $sqz_slider_speed; ?>,
      items:true,
      loop:true,
    autoHeight:false
     


    });

});
//]]>
</script>
  </div>
<?php endif; ?>

 
