<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

 ?>
<?php 
$builderacc_solid_color = get_sub_field('builderacc_solid_color');
      
if($builderacc_solid_color == '_dark') {
  $sqz_acc = 'sqz-dark_bgr';
} else if($builderacc_solid_color == '_light') {
  $sqz_acc = 'sqz-light_bgr';

} else {
  $sqz_acc = 'sqz-plain_bgr';
}  
$builder_acc_column_padding = get_sub_field('builder_acc_column_padding');
 $sqz_top_space = get_sub_field('pagebuilderacc_remove_top_space');
                            $sqz_bottom_space = get_sub_field('pagebuilderacc_remove_bottom_space');
                            $sbuttontospace = $sqz_top_space==1 ? ' sqz-pt_0' : ''; // returns true
                           $sbuttonbuttomspace = $sqz_bottom_space==1 ? ' sqz-pb_0' : ''; // returns true

?>

<section class="sqz-section sqz-acc_module <?php echo($sqz_acc); ?> <?php echo($builder_acc_column_padding); ?> <?php echo($sbuttontospace.''.$sbuttonbuttomspace); ?>">
 <div class="container">
               <div class="row justify-content-center">
                <div class="<?php //echo(sqz_columns());?> <?php echo sqz_columns_narrow(); ?> text-center">
                    <div class="sqz-module_content">
<?php if(get_sub_field('_accordion_title')) : ?>
<div class="sqz-section_header text-center">
	<h2><?php the_sub_field('_accordion_title'); ?></h2>

<?php endif; ?>
                        </div>
<div class="sqz-accordion" id="accordion<?php echo($GLOBALS['buildercount']); ?>" role="tablist" aria-multiselectable="true">
	<?php if(get_row_layout() == '_fc_accordion'):
		if( have_rows('_accordion') ):
		$i = 0;
		while ( have_rows('_accordion') ) : the_row();
		$sqz_acc_title = get_sub_field('_acc_title');
		$sqz_acc_content = get_sub_field('_acc_content');
		$sqz_acc_image = get_sub_field('_acc_image');
		$countvariable=$i.''.$GLOBALS["buildercount"];
	?> 
    <div class="sqz-acc_panel text-left">
              <div class="sqz-acc_header" id="heading<?php echo($i); ?><?php echo($GLOBALS['buildercount']); ?>">
                  <h3 data-toggle="collapse" data-target="#collapse<?php echo($i); ?><?php echo($GLOBALS['buildercount']); ?>" aria-expanded="false" aria-controls="collapse<?php echo($i); ?><?php echo($GLOBALS['buildercount']); ?>" class="collapsed"> 
                      <?php echo($sqz_acc_title); ?> 
                </h3>
              </div>
              <div id="collapse<?php echo($i); ?><?php echo($GLOBALS['buildercount']); ?>" class="collapse" aria-labelledby="heading<?php echo($i); ?><?php echo($GLOBALS['buildercount']); ?>" data-parent="#accordion<?php echo($GLOBALS['buildercount']); ?>">
                <div class="sqz-acc_body sqz-entry_content"> <?php echo($sqz_acc_content); ?> </div>
              </div>
            </div>
    
    
 
  <?php $i++; endwhile; endif; endif; ?>
</div>
                    </div>
</div></div></div>
</section>
