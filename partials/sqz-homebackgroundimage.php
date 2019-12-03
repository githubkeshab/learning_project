<?php
/**
 * The template for displaying with background image
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

$sqz_home_builder_background_image = get_sub_field('home_builder_background_image');
$sqz_background_image_title = get_sub_field('background_image_title'); 
$sqz_background_image_content = get_sub_field('background_image_content'); 
$sqz_background_image_button__link = get_sub_field('background_image_button__link'); 
$sqz_homebuilder_section_class = get_sub_field('homebuilder_section_class'); 
//$sqz_colmn_get_bgr_image= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'innerbanner_image');homebuilder_section_class

       $sqz_bckimage_remove_top_space = get_sub_field('bckimage_remove_top_space');
                            $sqz_bckimage_remove_bottom_space = get_sub_field('bckimage_remove_bottom_space');
                            $bckimage_topspacingpadding = $sqz_bckimage_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $bck_bottomspacingpadding = $sqz_bckimage_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true




if($sqz_home_builder_background_image) {
    $sqz_column_bgr_img = 'style="background-image:url('.$sqz_home_builder_background_image.');"';
   
   $sqz_column_bgr = 'sqz-has_bgr sqz-bgr_cover';
} else {
    //$sqz_column_bgr_img = 'style="background-color:'.$sqz_color_picker.';"';
}
//if($sqz_home_builder_background_image || trim($sqz_background_image_title)){
?>
  <section class="sqz-section sqz-clear sqz-bgr_block vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($bckimage_topspacingpadding.' '.$bck_bottomspacingpadding); ?> <?php echo($sqz_column_bgr); ?> <?php echo($sqz_homebuilder_section_class); ?> sqz-clearfix" <?php //echo($sqz_column_bgr_img); ?>>
    <?php if($sqz_home_builder_background_image) { ?>
      <img src="<?php echo $sqz_home_builder_background_image; ?>" alt="our-trainers">
      <?php } ?>
      <div class="sqz-section sqz-large_padding <?php if($sqz_home_builder_background_image) { echo ('sqz-content-wrap'); } ?>">
             <div class="container">
                 <div class="row justify-content-center text-center sqz-module_content">
                      <div class="<?php echo sqz_columns_narrow(); ?>">
                        <?php if(trim($sqz_background_image_title)){ ?>
                            <h2><?php echo($sqz_background_image_title); ?></h2>
                        <?php } ?>
                        <?php if(trim($sqz_background_image_content)){ ?>
                            <?php echo($sqz_background_image_content); ?>
                        <?php } ?>
                         <?php if($sqz_background_image_button__link) : ?>
                             <a href="<?php echo $sqz_background_image_button__link['url']; ?>" class="sqz-btn sqz-btn_dark" <?php if($sqz_background_image_button__link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_background_image_button__link['title']) { echo $sqz_background_image_button__link['title']; } else { echo('Read More');} ?></a>
                          <?php endif; ?>
                      </div>
                 </div>
             </div>
          </div>
    </section>
<?php //} ?>





