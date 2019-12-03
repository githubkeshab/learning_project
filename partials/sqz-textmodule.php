<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */$sqz_page_type = get_field('_page_type');

						 $sqz_builder_intro_title = get_sub_field('builder_intro_title');
						 $sqz_builder_intro_content = get_sub_field('builder_intro_content');
						 $sqz_builder_background_color_class = get_sub_field('builder_background_color_class');
						  $sqz_builder_intro_column_padding = get_sub_field('builder_intro_column_padding');
						  $sqz_builder_intro_remove_top_space = get_sub_field('builder_intro_remove_top_space');
                            $sqz_builder_intro_remove_bottom_space = get_sub_field('builder_intro_remove_bottom_space');
                            $builderintro_topspacingpadding = $sqz_builder_intro_remove_top_space==1 ? ' sqz-pt_0' : ''; // returns true
                           $builderintro_bottomspacingpadding = $sqz_builder_intro_remove_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true
                            $sqz_builder_background_color_class = $sqz_builder_background_color_class!=null ? ' '.$sqz_builder_background_color_class : ''; // returns true
                            $sqz_builderdefaulteditor_solid_colords = get_sub_field('builder_background_color_class');  
if($sqz_builderdefaulteditor_solid_colords == '_dark') {
  $sqz_builsods = 'sqz-dark_bgr';

} else if($sqz_builderdefaulteditor_solid_colords == '_light') {
  $sqz_builsods = 'sqz-light_bgr';
} else {
  $sqz_builsods = 'sqz-plain_bgr';
}  
  if(trim($sqz_builder_intro_title) || trim($sqz_builder_intro_content)){
?>
  <div class="sqz-section sqz-text_module <?php echo($sqz_builder_intro_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount'].''.$sqz_builder_background_color_class); ?><?php echo($builderintro_topspacingpadding.''.$builderintro_bottomspacingpadding.' '.$sqz_builsods); ?>">
        <div class="container">
            <div class="row justify-content-center">
				
								<div class="<?php echo(sqz_columns_narrow()); ?> align-self-center">
									<div class="sqz-module_content">
										<?php if(trim($sqz_builder_intro_title)){ ?>
											<h2><?php echo($sqz_builder_intro_title); ?></h2>
										<?php } ?>
										<?php echo($sqz_builder_intro_content); ?>
									</div>
								</div>

			
			 </div>
 		</div>
 </div>
 <?php } ?>
