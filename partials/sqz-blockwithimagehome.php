<?php
/**
 * The template for displaying content and image
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

?>
<?php 

//block background
$sqz_colmn_get_bgr = get_sub_field('home_builderbck_block_background');

$sqz_colmn_get_bgr_img = get_sub_field('home_builderbck_background_image');
     $collum_backgroundimage= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'columnbck_image');
       $collum_backgroundimage_2x= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'columnbck_image_2x');

$sqz_two_imagetext_image = get_sub_field('hmoebuilderbck_image_block');
 $block_image= wp_get_attachment_image_src($sqz_two_imagetext_image,'twoblock_image');
  $block_image_2x= wp_get_attachment_image_src($sqz_two_imagetext_image,'twoblock_image_2x'); 

if($block_image) {
  $sqz_column_bgr_img = 'style="background-image:url('.$block_image['0'].');"';
    $sqz_column_datargs= 'data-rjs="'.$block_image_2x['0'].'"';
  
} else {
    $sqz_column_bgr_img = '';
}


 
 
    $sqz_two_imagetext_text = get_sub_field('homebuilderbck_content');
     $sqz_imagepostion = get_sub_field('homebuilderbck_image_postion');
    $sqz_img_postion = $sqz_imagepostion == 'image_right' ? 'sqz-image_right' : 'sqz-image_left'; // returns true
      $sqz_pagebuilderblockimage_remove_top_space = get_sub_field('homebuilderblockimagebck_remove_top_space');
                            $sqz_pagebuilderblockimage_remove_bottom_space = get_sub_field('homebuilderblockimagebck_remove_bottom_space');
                            $builderimagecolumn_topspacingpadding = $sqz_pagebuilderblockimage_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true
                           $builderimagecolumn_bottomspacingpadding = $sqz_pagebuilderblockimage_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
                          
$sqz_img_postion = $sqz_imagepostion == 'image_right' ? 'order-lg-12' : ''; // returns true
       $sqz_col_postion = $sqz_imagepostion == 'image_left' ? 'justify-content-start' : 'justify-content-end'; // returns true  

$sqz_solidsubfielda = get_sub_field('home-builderbck_solid_color',$posr->ID);
      
 if($sqz_solidsubfielda == '_dark') {
  $sqz_cta_bgr_pagebuildera = 'sqz-dark_bgr';
} else if($sqz_solidsubfielda == '_light') {
  $sqz_cta_bgr_pagebuildera = 'sqz-light_bgr';

} else {
  $sqz_cta_bgr_pagebuildera = 'sqz-plain_bgr';
}  
        if($sqz_page_banner_small_imagetext_image || trim($sqz_two_imagetext_text)) { ?>

<div class="sqz-section sqz-image_text_block vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($builderimagecolumn_topspacingpadding.' '.$builderimagecolumn_bottomspacingpadding); ?> sqz-clearfix <?php echo $sqz_img_postion;?> <?php echo($sqz_cta_bgr_pagebuildera); ?>" >
          <div class="container-fluid">    
                  <div class="row no-gutters <?php echo $sqz_col_postion; ?>">
          		                <?php if($block_image) {  ?>
                                  <div class="col-12 col-lg-6 <?php echo $sqz_img_postion; ?>">
                                        <img src="<?php echo($block_image['0']); ?>">
                                  </div>
                                  <?php } ?>
                               <div class="col-12 col-lg-5 col-xl-4 align-self-center">
                                    <div class="sqz-content_wrap sqz-module_content">
                                        <div class="sqz-content_wrap sqz-module_content sqz-content_inner">
                                            <?php echo(trim($sqz_two_imagetext_text)); ?>
                                        </div>
                                    </div>
                                </div>
                          </div> 
                      </div>
                  </div>



<?php  } ?>
