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

  $frontbanner_img= wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts', true)),'innerbanner_image'); 
$frontbanner_img_2x= wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts', true)),'innerbanner_image_2x'); 
$default_banner_image_id = get_field('default_banner_image', 'option');
$default_banner_image= wp_get_attachment_image_src($default_banner_image_id,'innerbanner_image');
$default_banner_image_2x= wp_get_attachment_image_src($default_banner_image_id,'innerbanner_image_2x'); 
$add_a_background_tint = get_field('add_a_background_tint', 'option');
if($add_a_background_tint){
  $tintclass=' sqz-has_overlay'; 
} 
        ?>
         <?php if($frontbanner_img){ ?>
<div class="sqz-page_banner sqz-has_bgr sqz-bgr_cover<?php echo($tintclass); ?>"  style="background-image:url(<?php  echo($frontbanner_img['0']);  ?>)" data-rjs="<?php echo($frontbanner_img_2x['0']);  ?>">
  <?php } elseif($default_banner_image) { ?>
  <div class="sqz-page_banner sqz-has_bgr sqz-bgr_cover<?php echo($tintclass); ?>"  style="background-image:url(<?php  echo($default_banner_image['0']);  ?>)" data-rjs="<?php echo($default_banner_image_2x['0']);  ?>">
 <?php } else { ?>
 <div class="sqz-page_banner">
  <?php } ?>
   
             <?php $sqz_show_page_title = get_field('_hide_page_title',get_option('page_for_posts', true));
  if($sqz_show_page_title == ''):
    ?>
  <header class="sqz-page_header">
    <?php $sqz_sub_title = get_field('_sub_title',get_option('page_for_posts', true)); 
    if($sqz_sub_title) {
      $sqz_page_title = $sqz_sub_title;
    }else{
     
$sqz_page_title = get_the_title(get_option('page_for_posts', true));
     
    }
    ?>
    <h1 class="sqz-page_title"><?php echo $sqz_page_title; ?></h1>
  </header>
<?php endif; ?>

       </div>
