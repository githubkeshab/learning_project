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
//block background
$sqz_columns_heading = get_sub_field('columns_heading');
$sqz_colmn_get_bgr = get_sub_field('_block_background');
$sqz_colmn_get_bgr_solid = get_sub_field('_solid_color'); 
$sqz_colmn_get_bgr_img = get_sub_field('_background_image');
     $collum_backgroundimage= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'columnbck_image');
       $collum_backgroundimage_2x= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'columnbck_image_2x');
$sqz_pagebuilder_remove_top_space_columns = get_sub_field('pagebuilder_remove_top_space_columns');
                            $sqz_pagebuilder_remove_bottom_space_columns = get_sub_field('pagebuilder_remove_bottom_space_columns');
                            $columns_topspacingpadding = $sqz_pagebuilder_remove_top_space_columns==1 ? 'sqz-pt_0' : ''; // returns true
                           $columns_bottomspacingpadding = $sqz_pagebuilder_remove_bottom_space_columns==1 ? 'sqz-pb_0' : ''; // returns true
        

if($sqz_colmn_get_bgr_solid == '_dark') {
	$sqz_column_bgrs = 'sqz-dark_bgr';
} else if($sqz_colmn_get_bgr_solid == '_light') {
	$sqz_column_bgrs = 'sqz-light_bgr';
} else {
	$sqz_column_bgrs = 'sqz-plain_bgr';
}


if($sqz_colmn_get_bgr == '_image') {
	$sqz_column_bgr_img = 'style="background-image:url('.$collum_backgroundimage['0'].');';

    $sqz_column_datargs= 'data-rjs="'.$collum_backgroundimage_2x['0'].'"';
	$sqz_column_bgr = 'sqz-has_bgr sqz-bgr_cover';
} else {
    $sqz_column_bgr_img = '';
}

//padding
$sqz_get_padding = get_sub_field('_column_padding');
if($sqz_get_padding == '_small_padding') {
	$sqz_column_padding = 'sqz-small_padding';
} else {
	$sqz_column_padding = 'sqz-large_padding';
}
//column lagyout
$sqz_colmn_layout = get_sub_field('_column_types');
//full width column
$sqz_full_width_column = get_sub_field('_full_width_column');
//two half columns
$sqz_two_half_first = get_sub_field('_two_half_first');
$sqz_two_half_second = get_sub_field('_two_half_second');

//one third columns
$sqz_one_third_first = get_sub_field('_one_third_first');
$sqz_one_third_second = get_sub_field('_one_third_second');
$sqz_one_third_last = get_sub_field('_one_third_last');

//one fourth columns
$sqz_one_fourth_first = get_sub_field('_one_fourth_first');
$sqz_one_fourth_second = get_sub_field('_one_fourth_second');
$sqz_one_fourth_third = get_sub_field('_one_fourth_third');
$sqz_one_fourth_last = get_sub_field('_one_fourth_last');

//two third left large
$sqz_two_third_left_large = get_sub_field('_two_third_left_large');
$sqz_two_third_left_small = get_sub_field('_two_third_left_small');
//two third right large
$sqz_two_third_right_large = get_sub_field('_two_third_right_large');
$sqz_two_third_right_small = get_sub_field('_two_third_right_small');


switch($sqz_colmn_layout) {
	case 'two_half':
?>	
    <section  class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		<div class="<?php sqz_columns(); ?>">
        <div class="row">
	<?php if($sqz_two_half_first) : // get two half columns ?>
	<div class="col-12 col-sm-6">
    	<?php echo $sqz_two_half_first; ?>
    </div>
    <?php endif;
	if($sqz_two_half_second): 
	?>
    <div class="col-12 col-sm-6">
    	<?php echo $sqz_two_half_second; ?>
    </div>
    <?php endif; ?>
</div>
		</div>
        </div>
        </div>
	</section>
<?php break; ?>    
<?php case 'one_third': // get one third columns ?>
    <section class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		<div class="<?php sqz_columns(); ?>">
        <div class="row">
	<?php if($sqz_one_third_first) : ?>
    <div class="col-12 col-sm-4 <?php if($sqz_one_third_second) {echo ('sqz-clear');} ?>">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_one_third_first; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_one_third_second): 
	?>
    <div class="col-12 col-sm-4">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_one_third_second; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_one_third_last): 
	?>
    <div class="col-12 col-sm-4">
    	<div class="sqz-entry_content">
		<?php echo $sqz_one_third_last; ?>
        </div>
    </div>
    <?php endif; ?>
</div></div>
    	</div>
        </div>
    </section>
<?php break; ?>    
<?php case 'one_fourth': // get one fourth columns ?>
	<section class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		<div class="<?php sqz_columns(); ?>">
        <div class="row">
	<?php if($sqz_one_fourth_first) : ?>
    <div class="col-12 col-sm-3">
    	<div class="sqz-entry_content">
		<?php echo $sqz_one_fourth_first; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_one_fourth_second): 
	?>
    <div class="col-12 col-sm-3">
    	<div class="sqz-entry_content">
		<?php echo $sqz_one_fourth_second; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_one_fourth_third): 
	?>
    <div class="col-12 col-sm-3">
    	<div class="sqz-entry_content">
		<?php echo $sqz_one_fourth_third; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_one_fourth_last): 
	?>
    <div class="col-12 col-sm-3">
    	<div class="sqz-entry_content">
		<?php echo $sqz_one_fourth_last; ?>
        </div>
    </div>
    <?php endif; ?>  
</div>
</div>
</div>
</div>
    </section>
<?php break; ?>    
<?php case 'two_third_left': // get two third left large columns ?>  
    <section class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		<div class="<?php sqz_columns(); ?>">
        <div class="row">
	<?php if($sqz_two_third_left_large) : ?>
	<div class="col-12 col-sm-8">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_two_third_left_large; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_two_third_left_small): 
	?>
    <div class="col-12 col-sm-4 sqz-clearfix">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_two_third_left_small; ?>
        </div>
    </div>
    <?php endif; ?> 
</div>
</div>
</div>
</div>
	</section>    
<?php break; ?>     
<?php case 'two_third_right': // get two third right large columns ?>  
    <section class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		<div class="<?php sqz_columns(); ?>">
        <div class="row">
	<?php if($sqz_two_third_right_small) : ?>
	<div class="col-12 col-sm-4">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_two_third_right_small; ?>
        </div>
    </div>
    <?php endif;
	if($sqz_two_third_right_large): 
	?>
    <div class="col-12 col-sm-8">
    	<div class="sqz-entry_content">
    	<?php echo $sqz_two_third_right_large; ?>
        </div>
    </div>
    <?php endif; ?> 
    </div>
    </div> 
    </div>
    </div>
    </section>
<?php break; 
default: // get default (one column column) ?>
    <section class="sqz-section <?php echo $sqz_column_bgrs; ?> <?php echo $sqz_column_padding; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($columns_topspacingpadding.''.$columns_bottomspacingpadding); ?> sqz-clearfix" <?php echo $sqz_column_bgr_img; ?> <?php echo($sqz_column_datargs); ?>>
        <div class="container">
        <div class="row justify-content-center">
                      <div class="<?php echo(sqz_columns_narrow()); ?>">
            <?php if(trim($sqz_columns_heading)){  ?>
              <h2><?php echo($sqz_columns_heading); ?></h2>
            <?php } ?>
        		
     

    	<div class="sqz-module_content">
    	<?php echo $sqz_full_width_column; ?>
      
   
</div>
</div>
</div>
</div>
    </section>
<?php	
	break;	
}
?>

