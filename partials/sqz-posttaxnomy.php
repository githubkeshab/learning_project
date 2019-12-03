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
$sqz_post_section_heading = get_sub_field('post_section_heading_taxnomy');
$sqz_post_section_content = get_sub_field('post_section_content_taxnomy');
$sqz_pagebuilder_postsection_taxnomy_note = get_sub_field('pagebuilder_postsection_taxnomy_note');
$sqz_builder_postsection_column_padding = get_sub_field('builder_postsection_column_padding_taxnomy');

$sqz_pagebuilder_postsection_fullwidth_solid_color = get_sub_field('pagebuilder_postsection__fullwidth_solid_color_taxnomy');
 if($sqz_pagebuilder_postsection_fullwidth_solid_color == '_dark') {
  $sqz_column_bgr = 'sqz-dark_bgr';
} else if($sqz_pagebuilder_postsection_fullwidth_solid_color == '_light') {
  $sqz_column_bgr = 'sqz-light_bgr';
} else {
  $sqz_column_bgr = 'sqz-plain_bgr';
}


$sqz_builderpost_remove_top_space = get_sub_field('builderpost_remove_top_space_taxnomy');
$sqz_package_taxonomy = get_sub_field('package_taxonomy');
//print_r($sqz_package_taxonomy);
                            $sqz_builderpost_remove_bottom_space = get_sub_field('builderpost_remove_bottom_space_taxnomy');
                            $postsection_topspacingpadding = $sqz_builderpost_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true  post_section_heading
                           $postsection_bottomspacingpadding = $sqz_builderpost_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
    if(!empty($sqz_package_taxonomy)){
?>
<section class="sqz-section section-post-section_taxonomy <?php echo($sqz_column_bgr); ?> <?php echo($sqz_builder_postsection_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($postsection_topspacingpadding.''.$postsection_bottomspacingpadding); ?>">
 <div class="container">
        <div class="row justify-content-center">
               <div class="<?php echo(sqz_columns_narrow());?>">
                <?php if(trim($sqz_post_section_heading) || trim($sqz_post_section_content)){  ?>
              <div class="sqz-section text-center sqz-module_content">
 
       <heading sqz="sqz_main-title">
            <h2><?php echo($sqz_post_section_heading); ?></h2>
       </heading>  
  
            
  <?php echo($sqz_post_section_content); ?>
                  </div>
                  <?php } ?>
            </div>
     </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-12 sqz-section text-center sqz-module_content">
        <heading class="<?php echo($sqz_package_taxonomy->slug); ?>">
           <h3><?php echo($sqz_package_taxonomy->name); ?></h3>
        </heading>
      </div>
    <?php
    $args_post_section = array(
     'post_type' =>'packages',
     'posts_per_page' =>'-1',
     'order' => 'asc',
      'tax_query' => array(
              array (
                'taxonomy' => 'packages-cat',
                'field' => 'slug',
                'terms' => $sqz_package_taxonomy->slug,
                )
              ),
     'orderby'  => 'menu_order'
   );
    $wp_query_post_section = new WP_Query(  $args_post_section );
    if( $wp_query_post_section->have_posts() ) :
     while( $wp_query_post_section->have_posts() ) :  $wp_query_post_section->the_post();
 
     ?>
     
        
            <div class="col-12 col-lg-6 col-xl-4 sqz-card_wrap">
               <div class="sqz-card">
               
                <div class="sqz-card_content text-center">
                <h3><?php the_title(); ?></h3>
                <div class="sqz-excerpt sqz-show">
            <?php the_content(); ?>
            </div>
             

                 </div>
         </div>
             </div>
         
      <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>
   </div>
            <?php if($sqz_pagebuilder_postsection_taxnomy_note) : ?>
                          <p><?php echo($sqz_pagebuilder_postsection_taxnomy_note); ?></p>
             <?php endif; ?>
      </div>
 

</section>
<?php } 
?>
