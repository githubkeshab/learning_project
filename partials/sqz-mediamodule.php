<?php
/**
 * The template for displaying content and image
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

?>

  <?php $sqz_vidoe_builder_title = get_sub_field('_swz_vidoe_title');
        $sqz_video_builder_content = get_sub_field('_sqz_fc_video_content');
        $sqz_home_builder_button_link = get_sub_field('sqz_fc_button_link');
         $sqz_home_builder_video_option = get_sub_field('sqz_fc_video_option');
           $sqz_fc_content_center = get_sub_field('sqz_fc_content_center'); 
           $sqz_fc_video_backgroundimage = get_sub_field('sqz_fc_video_backgroundimage');
            $sqz_builder_fullwidth_column_padding = get_sub_field('builder_fullwidth_column_padding');
             $sqz_fc_video_background_overlay = get_sub_field('sqz_fc_video_background_overlay');
          
          $sqz_video_remove_top_space = get_sub_field('buildervideo_remove_top_space');
                            $sqz_video_remove_bottom_space = get_sub_field('buildervideo_remove_bottom_space');
                            $video_topspacingpadding = $sqz_video_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $video_bottomspacingpadding = $sqz_video_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true
                             $bck_overlay = $sqz_fc_video_background_overlay==1 ? ' sqz-has_overlay' : ''; // add overlay on moduel
                            $sqz_btn_style = $sqz_fc_video_background_overlay==1 ? ' sqz-btn_primary' : 'sqz-btn_dark'; // change button style 
 $sqz_builderdefaulteditor_solid_colord = get_sub_field('sqz_fc_video_solid_color');  
if($sqz_builderdefaulteditor_solid_colord == '_dark') {
  $sqz_builsod = 'sqz-dark_bgr';

} else if($sqz_builderdefaulteditor_solid_colord == '_light') {
  $sqz_builsod = 'sqz-light_bgr';
} else {
  $sqz_builsod = 'sqz-plain_bgr';
}  
        

    $video = get_sub_field('_sqz_fc_video'); // OEmbed Code
    $video_url = get_sub_field('_sqz_fc_video', FALSE, FALSE); // URL
    $video_thumb_url = get_video_thumbnail_uri($video_url); // thumbnail URL

 // if($video_url){ 
  ?>
  
      <section class="sqz-section sqz-media_module sqz-bgr_block sqz-has_bgr sqz-bgr_cover <?php echo($bck_overlay); ?>  sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($video_topspacingpadding.' '.$video_bottomspacingpadding.' '.$sqz_builsod); ?>">
      <?php if($sqz_fc_video_backgroundimage) { ?>
          <img src="<?php echo $sqz_fc_video_backgroundimage; ?>" alt="<?php echo($sqz_vidoe_builder_title ); ?>">
        <?php } ?>  
    <div class="sqz-section <?php echo($sqz_builder_fullwidth_column_padding); ?> <?php if($sqz_fc_video_backgroundimage) { echo ('sqz-content-wrap'); }?>">
          <div class="container">
             <div class="row justify-content-center">
                     <div class="<?php //echo(sqz_columns());?> <?php echo sqz_columns_narrow(); ?> text-center <?php echo($sqz_fc_content_center); ?>">
                        <div class="sqz-module_content">
                    <?php if($sqz_video_builder_content){ ?>
                             <?php if(trim($sqz_vidoe_builder_title )){ ?>
                                 <h2><?php echo($sqz_vidoe_builder_title ); ?></h2>
                           <?php } ?>
   
                          <h4><?php echo($sqz_video_builder_content); ?></h4>
                      
                 <?php } ?>
       
              <?php if($sqz_home_builder_video_option == 'video_link'){  ?>
                  <a class="sqz-play" data-fancybox href="<?php echo $video_url; ?>?autoplay=1&modestbranding=1&showinfo=0&rel=0" data-featherlight="iframe" data-toggle="modal" data-target="#homeVideo" class="img-responsive">
                   <i class="sqz-play_icon"></i>
              </a>
            <?php } else { ?>
                 <?php if($sqz_home_builder_button_link) : ?>
                                    <a href="<?php echo $sqz_home_builder_button_link['url']; ?>" class="sqz-btn <?php echo $sqz_btn_style; ?>" <?php if($sqz_home_builder_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_home_builder_button_link['title']) { echo $sqz_home_builder_button_link['title']; } else { echo('Learn More');} ?></a>
                                <?php endif; ?>
            <?php } ?>
                         </div>
                         </div>
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


<?php //} ?>

