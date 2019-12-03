<?php
/**
* The template for displaying Slider
* @author Squeeze Creative
* For more information on hooks, actions, and filters,
* @package Squeeze Toolbox.
* Version: 1.0
*/
$sqz_page_type = get_field('_page_type');
$terms = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if($terms->taxonomy == 'locations'){
 
  $id='608';
}

?>
<?php 

$frontbanner_img= wp_get_attachment_image_src(get_post_thumbnail_id($id),'full'); 
$frontbanner_img_2x= wp_get_attachment_image_src(get_post_thumbnail_id($id),'full');

$default_banner_image_id = get_field('default_banner_image', 'option');
$default_banner_image= wp_get_attachment_image_src($default_banner_image_id,'full');
$default_banner_image_2x= wp_get_attachment_image_src($default_banner_image_id,'full'); 


?>
<?php if($frontbanner_img){ ?>
<div class="sqz-section sqz-media_module sqz-has_bgr sqz-bgr_cover sqz-dark_bgr sqz-has_overlay sqz-medium_padding"  style="background-image:url(<?php  echo($frontbanner_img['0']);  ?>)" data-rjs="<?php echo($frontbanner_img_2x['0']);  ?>">
  <?php } elseif($default_banner_image ) { ?>
  <div class="sqz-section sqz-media_module sqz-has_bgr sqz-bgr_cover sqz-dark_bgr sqz-has_overlay sqz-medium_padding"  style="background-image:url(<?php  echo($default_banner_image['0']);  ?>)" data-rjs="<?php echo($default_banner_image_2x['0']);  ?>">
   <?php } else { ?>
   <div class="sqz-section sqz-media_module sqz-has_bgr sqz-bgr_cover sqz-dark_bgr sqz-has_overlay sqz-medium_padding">
    <?php } ?>

    
    <div class="container">
      <div class="row justify-content-center">
        <div class="<?php echo sqz_columns_narrow(); ?> text-center align-self-center"> 
          <div class="sqz-module_content">
          <?php $sqz_show_page_title = get_field('_hide_page_title',$id);
    if($sqz_show_page_title == ''):
      ?>
         
            <?php 
            if(is_category()) { ?>
             <h1 class="sqz-page_title"><?php single_cat_title() ?></h1>
            <?php

            } else {
            $sqz_sub_title = get_field('_sub_title',$id); 
            if($sqz_sub_title) {
              $sqz_page_title = $sqz_sub_title;
            }else{
              $sqz_page_title = get_the_title($id);
            }
            ?>
            <h1 class="sqz-page_title"><?php echo $sqz_page_title; ?></h1>
            <?php } ?>
        
        <?php endif; ?>
        
        


             <?php  //while ( have_posts() ) : the_post(); 
             $post_content = get_post($id);
            $content = $post_content->post_content;
             if(trim($content)){ 
             ?>

            
                <?php echo apply_filters('the_content',$content); ?>
          

             <?php } //endwhile;  ?>
        
       </div>
     </div>
   </div>
 </div>
</div>