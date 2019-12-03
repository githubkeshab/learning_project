<?php 
/**
 * The template for video section home
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>

  <?php $sqz_vidoe_builder_title = get_sub_field('vidoe_builder_title');
        $sqz_video_builder_content = get_sub_field('video_builder_content');
        $sqz_video_button_link = get_sub_field('video_button_link');
         $sqz_home_builder_button_link = get_sub_field('home_builder_button_link');
         $sqz_home_builder_video_option = get_sub_field('home_builder_video_option');
           $sqz_home_builder_video_backgroundimage = get_sub_field('home_builder_video_backgroundimage');
          $sqz_video_remove_top_space = get_sub_field('video_remove_top_space');
                            $sqz_video_remove_bottom_space = get_sub_field('video_remove_bottom_space');
                             $sqz_home_buildervideo_background_overlay = get_sub_field('home-buildervideo_background_overlay');
                            $video_topspacingpadding = $sqz_video_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $video_bottomspacingpadding = $sqz_video_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true

                            $bck_overlay = $sqz_home_buildervideo_background_overlay==1 ? ' sqz-has_overlay' : ''; // returns true
 

		$video = get_sub_field('video_url'); // OEmbed Code
		$video_url = get_sub_field('video_url', FALSE, FALSE); // URL
		$video_thumb_url = get_video_thumbnail_uri($video_url); // thumbnail URL

	if($video_url){ 
  ?>

  		<section class="sqz-video sqz-section sqz-bgr_block sqz-has_bgr sqz-bgr_cover <?php echo($bck_overlay); ?> vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?>">
    <?php if($sqz_home_builder_video_backgroundimage) { ?>
          <img src="<?php echo $sqz_home_builder_video_backgroundimage; ?>" alt="<?php echo($sqz_vidoe_builder_title ); ?>">
        <?php } ?>  
    <div class="sqz-section sqz-exlarge_padding <?php echo($video_topspacingpadding.' '.$video_bottomspacingpadding); ?> <?php if($sqz_home_builder_video_backgroundimage) { echo ('sqz-content-wrap'); }?>">
    			<div class="container">
    				 <div class="row justify-content-center sqz-module_content">
     					 <?php if($sqz_video_builder_content){ ?>
     								 <div class="col-12 col-sm-10 col-md-8 align-self-center">
			                      <?php if(trim($sqz_vidoe_builder_title )){ ?>
       													 <h2><?php echo($sqz_vidoe_builder_title ); ?></h2>
     											 <?php } ?>
   
      										<?php echo($sqz_video_builder_content); ?> 
                           <?php if($sqz_home_builder_video_option == 'video_link'){  ?>
                           <a class="sqz-play" data-fancybox href="<?php echo $video_url; ?>?autoplay=1&modestbranding=1&showinfo=0&rel=0" data-featherlight="iframe" data-toggle="modal" data-target="#homeVideo" class="img-responsive">
                   <i class="sqz-play_icon"></i>
              </a>
            <?php } else { ?>
                 <?php if($sqz_home_builder_button_link) : ?>
                                    <a href="<?php echo $sqz_home_builder_button_link['url']; ?>" class="sqz-btn sqz-btn_primary" <?php if($sqz_home_builder_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_home_builder_button_link['title']) { echo $sqz_home_builder_button_link['title']; } else { echo('Learn More');} ?></a>
                                <?php endif; ?>
            <?php } ?>
       								</div>
      					 <?php } ?>
       
     					
      					
 
    				 </div>
  				</div>
            </div>
    <script type="text/javascript">
      jQuery(document).ready( function(){
         jQuery('[data-fancybox]').fancybox({
        youtube : {
            controls : 0,
            showinfo : 0
        },
        vimeo : {
            color : 'f00'
        }
    });
      });
    </script>  			
 				
		</section>


<?php } ?>

