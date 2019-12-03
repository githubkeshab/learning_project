<?php
/**
 * The template for displaying post
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
$default_banner_image_id = get_field('default_banner_image', 'option');
$default_banner_image= wp_get_attachment_image_src($default_banner_image_id,'full');
$default_banner_image_2x= wp_get_attachment_image_src($default_banner_image_id,'full'); 
$sqz_post_section_heading = get_sub_field('post_section_heading');
$sqz_post_section_content = get_sub_field('post_section_content');
$sqz_post_type_page_link = get_sub_field('post_type_page_link');
$sqz_builder_postsection_column_padding = get_sub_field('builder_postsection_column_padding');

$sqz_pagebuilder_postsection_fullwidth_solid_color = get_sub_field('pagebuilder_postsection__fullwidth_solid_color');
 if($sqz_pagebuilder_postsection_fullwidth_solid_color == '_dark') {
  $sqz_column_bgr = 'sqz-dark_bgr';
} else if($sqz_pagebuilder_postsection_fullwidth_solid_color == '_light') {
  $sqz_column_bgr = 'sqz-light_bgr';
} else {
  $sqz_column_bgr = 'sqz-plain_bgr';
}

$sqz_post_tpye = get_sub_field('post_tpye');
$sqz_builderpost_remove_top_space = get_sub_field('builderpost_remove_top_space');


                            $sqz_builderpost_remove_bottom_space = get_sub_field('builderpost_remove_bottom_space');
                            $postsection_topspacingpadding = $sqz_builderpost_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true  post_section_heading
                           $postsection_bottomspacingpadding = $sqz_builderpost_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
    if($sqz_post_tpye){
?>
<section id="section-post_section" class="sqz-section section-post_section <?php echo($sqz_column_bgr); ?> <?php echo($sqz_builder_postsection_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($postsection_topspacingpadding.''.$postsection_bottomspacingpadding); ?>">
 <div class="container">
        <div class="row justify-content-center">
               <div class="<?php echo(sqz_columns_narrow());?>">
              <div class="sqz-section sqz-medium_padding sqz-pt_0 text-center">
 <?php if(trim($sqz_post_section_heading)){  ?>
       <heading sqz="sqz_main-title">
            <h2><?php echo($sqz_post_section_heading); ?></h2>
       </heading>  
  <?php } ?>
            
  <?php echo($sqz_post_section_content); ?>
                  </div>
            </div>
     </div>
    </div>
    <div class="container">
       <div class="row">
    <?php
    $args_post_section = array(
     'post_type' =>$sqz_post_tpye,
     'posts_per_page' =>'-1',
     'order' => 'asc',
     'orderby'  => 'menu_order'
   );
    $wp_query_post_section = new WP_Query(  $args_post_section );
    if( $wp_query_post_section->have_posts() ) :
     while( $wp_query_post_section->have_posts() ) :  $wp_query_post_section->the_post();
    $img= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); 
$img_2x= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); 
     ?>
     
        
            <div class="col-12 col-lg-6 col-xl-4 sqz-card_wrap">
               <div class="sqz-card">
              
              <figure class="sqz-thumb">
                     <?php if($img){ ?> <img src="<?php echo($img['0']); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" data-rjs="<?php echo($img_2x['0']); ?>">
                       <?php } ?> 
                </figure>
               
                <div class="sqz-card_content text-center">
                <h3><?php the_title(); ?></h3>
                <div class="sqz-excerpt sqz-show">
            <?php the_content(); ?>
            </div>
             <!-- <a class="sqz-slide_more">More</a>
            <div class="sqz-content sqz-hidden" style="display:none;">
                <?php the_content(); ?>
            </div>-->

                 </div>
         </div>
             </div>
         
      <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>
   </div>
            <?php if($sqz_post_type_page_link) : ?>
                                    <a href="<?php echo $sqz_post_type_page_link['url']; ?>" class="sqz-btn sqz-btn_primary sqz-btn_center" <?php if($sqz_post_type_page_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_post_type_page_link['title']) { echo $sqz_post_type_page_link['title']; } else { echo('Learn More');} ?></a>
                                <?php endif; ?>
      </div>
 

</section>
<?php } ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery(".sqz-slide_more").click(function(){
      if(jQuery(this).next().hasClass('sqz-hidden')){

            jQuery(this).next().slideDown();
            jQuery(this).prev().slideUp();
            jQuery(this).next().addClass('sqz-show').removeClass('sqz-hidden');
             jQuery(this).prev().addClass('sqz-hidden').removeClass('sqz-show');
             jQuery(this).text('Less');
             jQuery(this).parents('.sqz-card').addClass('sqz-expand');
          } else{ 
           jQuery(this).next().addClass('sqz-hidden').removeClass('sqz-show');
           jQuery(this).prev().addClass('sqz-show').removeClass('sqz-hidden');
 jQuery(this).next().slideUp();

  jQuery(this).prev().slideDown();
   jQuery(this).text('More');
     jQuery(this).parents('.sqz-card').removeClass('sqz-expand');
          }
    });

});
</script>