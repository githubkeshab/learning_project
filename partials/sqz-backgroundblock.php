<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

//block background
$sqz_colmn_get_bgr = get_sub_field('_bb_block_background');
$sqz_colmn_get_bgr_solid = get_sub_field('_bb_solid_color'); 
$sqz_colmn_get_bgr_img = get_sub_field('_bb_background_image');
$sqz_colmn_get_bgr_image= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'innerbanner_image');
$sqz_colmn_get_bgr_image_2x= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'innerbanner_image_2x'); 

$sqz_builder_bckblock_column_padding = get_sub_field('builder_bckblock_column_padding');

if($sqz_colmn_get_bgr_solid == '_primary') {
    $sqz_column_bgr = 'sqz-primary_bgr '.$sqz_custom_class;
} else if($sqz_colmn_get_bgr_solid == '_dark') {
    $sqz_column_bgr = 'sqz-dark_bgr '.$sqz_custom_class;
} else {
    $sqz_column_bgr = 'sqz-light_bgr '.$sqz_custom_class;
}


if($sqz_colmn_get_bgr == '_image') {
    $sqz_column_bgr_img = 'style="background-image:url('.$collum_backgroundimage['0'].');background-color:'.$sqz_color_picker.';"';
    $sqz_column_data_rgs = 'data-rjs="'.$sqz_colmn_get_bgr_image_2x['0'].'"';
   $sqz_column_bgr = 'sqz-has_bgr sqz-bgr_cover '.$sqz_custom_class;
} else {
    $sqz_column_bgr_img = 'style="background-color:'.$sqz_color_picker.';"';
}
?>
  <div class="sqz-section sqz-clear sqz-large_padding sqz-pt_0 sqz-bgr_block <?php echo($sqz_builder_bckblock_column_padding); ?> <?php echo($sqz_column_bgr); ?> sqz-clearfix" <?php echo($sqz_column_bgr_img.' '.$sqz_column_data_rgs); ?>>

    </div>
