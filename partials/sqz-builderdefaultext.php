<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

 $sqz_page_builder_feature_image_show = get_sub_field('page_builder_feature_image_show');
 $sqz_page_builder_feature_image_postion = get_sub_field('page_builder_feature_image_postion');
 $sqz_builder_defaulteditor_column_padding = get_sub_field('builder_defaulteditor_column_padding');
  $sqz_pagebuilder_remove_top_space = get_sub_field('pagebuilder_remove_top_space');
                            $sqz_pagebuilder_remove_bottom_space = get_sub_field('pagebuilder_remove_bottom_space');
                            $defaultbuilder_topspacingpadding = $sqz_pagebuilder_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true
                           $defaultbuilder_bottomspacingpadding = $sqz_pagebuilder_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
                             $image_postioning = $sqz_page_builder_feature_image_postion=='sqz_right' ? ' order-md-12' : ''; 
                         $sqz_builderdefaulteditor_solid_color = get_sub_field('builderdefaulteditor_solid_color'); 
if($sqz_builderdefaulteditor_solid_color == '_dark') {
  $sqz_builso = 'sqz-dark_bgr';

} else if($sqz_builderdefaulteditor_solid_color == '_light') {
  $sqz_builso = 'sqz-light_bgr';
} else {
  $sqz_builso = 'sqz-plain_bgr';
}  
        
  if(trim(get_the_content())){
?>
  <div class="sqz-section sqz-module_default  <?php echo($sqz_builder_defaulteditor_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($defaultbuilder_topspacingpadding.''.$defaultbuilder_bottomspacingpadding.' '.$sqz_builso); ?>">
        <div class="container">
            <div class="row justify-content-center">
            	 <div class="<?php echo(sqz_columns_narrow()); ?>">
            	 	<div class="row">
				<?php	while ( have_posts() ) : 	the_post();
							if ( has_post_thumbnail() && ($sqz_page_builder_feature_image_show== 1)) : ?>
							    <div class="col-12 col-sm-12 <?php if($sqz_page_builder_feature_image_show==1) { echo('col-md-6'.$image_postioning); } else { echo('col-md-12'); } ?>">
							    	<figure class="sqz-thumb">
     									<?php  the_post_thumbnail('full');  ?>
     								</figure>
     							</div>
   							<?php  endif; ?>
								<div class="col-12 <?php if($sqz_page_builder_feature_image_show==1) { echo('col-sm-12 col-md-6'); } else { echo('col-md-12'); } ?> align-self-center">
									<div class="sqz-module_content">
										<?php the_content(); ?>
									</div>
								</div>

			<?php 	
						endwhile; // End of the loop.
			?>
				 </div>
			 </div>
			  </div>
 		</div>
 </div>
 <?php } ?>
