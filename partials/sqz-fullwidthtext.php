<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

 $sqz_page_full_width_builder_title = get_sub_field('full_width_builder_title');
 $sqz_page_full_width_builder_text = get_sub_field('full_width_builder_text');
 $sqz_builder_fullwidth_column_padding = get_sub_field('builder_fullwidthtext_column_padding');
  $sqz_pagebuilder_remove_top_space = get_sub_field('builderpost_remove_top_space_fullwidth');
                            $sqz_pagebuilder_remove_bottom_space = get_sub_field('builderpost_remove_bottom_space_fullwidth');
                            $defaultbuilder_topspacingpadding = $sqz_pagebuilder_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true
                           $defaultbuilder_bottomspacingpadding = $sqz_pagebuilder_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
                          //   $image_postioning = $sqz_page_builder_feature_image_postion=='sqz_right' ? ' order-md-12' : ''; 
                           $sqz_pagebuilder_fullwidth_solid_color = get_sub_field('pagebuilder_fullwidth_solid_color'); 
 if($sqz_pagebuilder_fullwidth_solid_color == '_dark') {
  $sqz_cta_bgr_pagebuilder = 'sqz-dark_bgr';
} else if($sqz_pagebuilder_fullwidth_solid_color == '_light') {
  $sqz_cta_bgr_pagebuilder = 'sqz-light_bgr';

} else {
  $sqz_cta_bgr_pagebuilder = 'sqz-plain_bgr';
}                         
  if(trim($sqz_page_full_width_builder_title) || trim($sqz_page_full_width_builder_text)){
?>
  <div class="sqz-section sqz-clear sqz-large_padding sqz-bgr_block <?php echo($sqz_builder_fullwidth_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($defaultbuilder_topspacingpadding.''.$defaultbuilder_bottomspacingpadding); ?> <?php echo($sqz_cta_bgr_pagebuilder); ?>">
        <div class="container">
            <div class="row justify-content-center">
            	 <div class="<?php echo(sqz_columns_narrow());?> align-self-center text-center sqz-module_content">
            	 		<?php if(trim($sqz_page_full_width_builder_title)) { ?>
										<h2><?php echo($sqz_page_full_width_builder_title); ?></h2>
									<?php } ?>
										<?php echo($sqz_page_full_width_builder_text); ?>
								
			 </div>
			  </div>
 		</div>
 </div>
 <?php } ?>
