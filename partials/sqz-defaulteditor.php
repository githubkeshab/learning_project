<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

 $sqz_deafult_editor_feature_image = get_sub_field('deafult_editor_feature_image');
 $sqz_feature_image_postion = get_sub_field('feature_image_postion');
  $sqz_defaulteditor_remove_top_space = get_sub_field('defaulteditor_remove_top_space');
                            $sqz_default_editor_remove_bottom_space = get_sub_field('default_editor_remove_bottom_space');
                            $default_topspacingpadding = $sqz_defaulteditor_remove_top_space==1 ? $default_classpaddingtop='sqz-pt_0' : $default_classpaddingtop=''; // returns true
                           $default_bottomspacingpadding = $sqz_default_editor_remove_bottom_space==1 ? $default_classpaddingbottom='sqz-pb_0' : $default_classpaddingbottom=''; // returns true
          $deafulteditor_solid_color = get_sub_field('deafulteditor_solid_color',$posr->ID);
    	
if($deafulteditor_solid_color == '_dark') {
  $sqz_defulteditor = 'sqz-dark_bgr';
} else if($deafulteditor_solid_color == '_light') {
  $sqz_defulteditor = 'sqz-light_bgr';

} else {
  $sqz_cta_bgr_pagebuilder = 'sqz-plain_bgr';
}  
  if(trim(get_the_content())){
?>
  <div class="sqz-section sqz-bgr_block sqz-default_editor_home vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($default_topspacingpadding.' '.$default_bottomspacingpadding.' '.$sqz_defulteditor); ?>">
        <div class="<?php if($sqz_deafult_editor_feature_image==1) { echo('container-fluid'); } else {  echo('container'); } ?>">
            <div class="row <?php if($sqz_deafult_editor_feature_image==1) { echo('justify-content-end no-gutters'); } else {  echo('justify-content-center'); } ?>">
				<?php	while ( have_posts() ) : 	the_post();
							if ( has_post_thumbnail() && ($sqz_deafult_editor_feature_image== 1)) : ?>
							    <div class="col-12 col-lg-6 col-md-6  <?php if($sqz_feature_image_postion!=1) { echo('order-lg-12'); } ?>">
							    	<figure class="sqz-thumb">
     									<?php  the_post_thumbnail('full');  ?>
     								</figure>
     							</div>
   							<?php  endif; ?>
								<div class="col-12 <?php if($sqz_deafult_editor_feature_image==1) { echo('col-lg-5 col-xl-4'); } else {  echo(sqz_columns_narrow()); } ?> align-self-center">
									<div class="sqz-section sqz-large_padding sqz-module_content">
										<?php the_content(); ?>
									</div>
								</div>

			<?php 	
						endwhile; // End of the loop.
			?>
			 </div>
 		</div>
 </div>
 <?php } ?>

