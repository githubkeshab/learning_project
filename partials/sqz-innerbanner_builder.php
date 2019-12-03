<?php
/**
* The template for displaying Slider
* @author Squeeze Creative
* For more information on hooks, actions, and filters,
* @package Squeeze Toolbox.
* Version: 1.0
*/
$sqz_page_type = get_field('_page_type');

?>
<?php $sqz_background_image = get_field('sqz_background_image',$post->ID); 
$sqz_banner_image = get_field('sqz_banner_image',$post->ID);
$frontbanner_img= wp_get_attachment_image_src($sqz_banner_image,'full'); 
$frontbanner_img_2x= wp_get_attachment_image_src($sqz_banner_image,'full');

$default_banner_image_id = get_field('default_banner_image', 'option');
$default_banner_image= wp_get_attachment_image_src($default_banner_image_id,'full');
$default_banner_image_2x= wp_get_attachment_image_src($default_banner_image_id,'full'); 
$add_a_background_tint = get_field('add_a_background_tint', 'option');
if($add_a_background_tint){
  $tintclass=' sqz-has_overlay'; 
} 

?>
<?php if($frontbanner_img && $sqz_background_image){ ?>
<div class="sqz-page_topcontent sqz-has_bgr sqz-bgr_cover"  style="background-image:url(<?php  echo($frontbanner_img['0']);  ?>)" data-rjs="<?php echo($frontbanner_img_2x['0']);  ?>">
  <?php } elseif($default_banner_image && $sqz_background_image) { ?>
  <div class="sqz-page_topcontent sqz-has_bgr sqz-bgr_cover"  style="background-image:url(<?php  echo($default_banner_image['0']);  ?>)" data-rjs="<?php echo($default_banner_image_2x['0']);  ?>">
   <?php } else { ?>
   <div class="sqz-page_topcontent">
    <?php } ?>

   
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
         <?php $sqz_show_page_title = get_field('_hide_page_title');
    if($sqz_show_page_title == ''):
      ?>
          <header class="sqz-page_header">
            <?php $sqz_sub_title = get_field('_sub_title'); 
            if($sqz_sub_title) {
              $sqz_page_title = $sqz_sub_title;
            }else{
              $sqz_page_title = get_the_title();
            }
            ?>
            <h1 class="sqz-page_title"><?php echo $sqz_page_title; ?></h1>
          </header>
        <?php endif; ?>
        
        <main id="sqz-main">


         <?php while ( have_posts() ) : the_post(); 
         if(trim(get_the_content())){ ?>

         <article class="sqz-section sqz-medium_padding sqz-entry_content">
           <?php the_content(); ?>

         </article>

         <?php } endwhile;  ?>
       </main>
     </div>
   </div>
 </div>
</div>