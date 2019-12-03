<?php
/**
 * The template for displaying Slider
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

?>
<?php 
//slider settings
$sqz_slider_show = get_field('_main_slider', 'option');
$sqz_slider_effect = get_field('_slider_effect', 'option');
$sqz_slider_auto_play = get_field('_auto_play', 'option');
$sqz_slider_number = get_field('_number_of_slides_to_show', 'option');
$sqz_slider_speed = get_field('_slide_speed', 'option');
$sqz_slider_navigation = get_field('_slider_navigation', 'option');
$sqz_slider_pagination = get_field('_slider_pagination', 'option');
if($sqz_slider_show) :
?>

    <div id="sqz-banner" class="vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?>">

        <?php   $count = count(get_sub_field('slider_image_list'));
                         $sqz_slider_content = get_sub_field('slider_content');
                          $sqz_slider_left_button = get_sub_field('slider_left_button');
                        
                           $sqz_slider_right_button = get_sub_field('slider_right_button');
                            $sqz_slider_image_remove_top_space = get_sub_field('slider_image_remove_top_space');
                            $sqz_slider_image_remove_bottom_space = get_sub_field('slider_image_remove_bottom_space');
                            $topspacingpadding = $sqz_slider_image_remove_top_space==1 ? $classpaddingtop='sqz-pt_0' : $classpaddingtop=''; // returns true
                           $bottomspacingpadding = $sqz_slider_image_remove_bottom_space==1 ? $classpaddingbottom='sqz-pb_0' : $classpaddingbottom=''; // returns true
                           
                            if( have_rows('slider_image_list') ): ?>
	           <div id="sqz-main_slider" class="owl-carousel <?php echo($topspacingpadding.' '.$bottomspacingpadding); ?>">
	               <?php 
                
                           $j=1; while( have_rows('slider_image_list') && $j<=$sqz_slider_number): the_row(); 
		                          $sqz_slider_image = get_sub_field('slider_image');
		
		                           $image_first=wp_get_attachment_image_src($sqz_slider_image,'full');
		                            $image_first_2x=wp_get_attachment_image_src($sqz_slider_image,'full');
		
		          ?>
		                          <div class="sqz-slider_all">
		              		 	       
			                 <img src="<?php echo $image_first['0'];?>" data-rjs="<?php echo($image_first_2x['0']); ?>" alt="slider" class="sqz-slide">
		                                	
		                          </div>	
	               <?php $j++; endwhile; ?></div>
                   <?php if(trim($sqz_slider_content)) { ?>
                        <div class="sqz-slider_caption_wrap">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-10 col-lg-8 col-xl-7 align-self-md-center align-self-end">
                                                
                                                <?php if($sqz_slider_content) : ?>
                                                    <div class="sqz-slider_caption">
                                                        <?php echo $sqz_slider_content; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($sqz_slider_left_button) : ?>
                                                    <a href="<?php echo $sqz_slider_left_button['url']; ?>" class="sqz-btn sqz-btn_primary" <?php if($sqz_slider_left_button['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_slider_left_button['title']) { echo $sqz_slider_left_button['title']; } else { echo('Read More');} ?></a>
                                                <?php endif; ?>
                                                 <?php if($sqz_slider_right_button) : ?>
                                                    <a href="<?php echo $sqz_slider_right_button['url']; ?>" class="sqz-btn" <?php if($sqz_slider_right_button['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_slider_right_button['title']) { echo $sqz_slider_right_button['title']; } else { echo('Read More');} ?></a>
                                                <?php endif; ?>
                                            </div> <!-- //col -->
                                        </div> <!-- //row -->
                                    </div> <!-- //container -->
                                </div> <!-- // sqz-slider_caption_wrap -->
                    	
                    <?php } ?>
        <?php endif; ?>
        <?php if($count > 1) {  ?>
<script>
//<![CDATA[
jQuery(document).ready(function($) {
  $("#sqz-main_slider").owlCarousel({
      nav : <?php if($sqz_slider_navigation) { echo 'true'; } else { echo'false';} ?>, // Show next and prev buttons
    dots : <?php if($sqz_slider_pagination) { echo 'true'; } else { echo'false';} ?>,
    navText: ["<i class='mdi mdi-chevron-left'></i>","<i class='mdi mdi-chevron-right'></i>"],
    autoplay: <?php if($sqz_slider_auto_play) { echo 'true'; } else { echo'false';} ?>,
      slideSpeed : <?php echo $sqz_slider_speed; ?>,
      items:1,
      loop: true,
    rewindSpeed: 100,
    <?php if($sqz_slider_effect == 'fade') { ?>
    animateOut : 'fadeOut',
    <?php } ?>

      
    });

  //slider link
    $('.sqz-has_link').click(function() {
    var dataLink = $(this).attr('data-link');
        <?php if($sqz_slider_target) { ?>
          window.open(dataLink);
        <?php } else { ?>
            location.href = dataLink;
        <?php } ?>
  });
});
//]]>
</script>
<?php  } ?>
    </div>
<?php endif; ?>
