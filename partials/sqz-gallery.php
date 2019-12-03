<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php $sqz_el_layout = get_sub_field('_glry_column_width');

if($sqz_el_layout == 'half_width') :
	$sqz_el_column_class = 'col-xs-12 col-sm-6';
elseif($sqz_el_layout == 'one_third') :
	$sqz_el_column_class = 'col-xs-12 col-sm-4';
elseif($sqz_el_layout == 'two_third') :
	$sqz_el_column_class = 'col-xs-12 col-sm-8';	
else:
	$sqz_el_column_class = 'container-fluid';
endif;	
if($sqz_el_layout == 'full_width'){
   $openclose= '<div class="container"><div class="row"><div class="'.sqz_columns_element().'">';
   $closed= '</div></div></div>';
}
$block_width = get_sub_field('block_width');
?>
<?php if($block_width == 'Start' && $sqz_el_layout != 'full_width' ) { ?>
	<div class="container">
    	<div class="row">
        	<div class="<?php sqz_columns(); ?>">
            	<div class="row">
<?php } ?>
<div class="<?php echo $sqz_el_column_class; ?> test-col">
<section class="sqz-section sqz-small_padding sqz-pt_0">
	<?php echo($openclose); ?>
<?php if(get_sub_field('_gallery_title')) : ?>
<div class="sqz-section_header">
	<h2 class="sqz-section_title"><?php the_sub_field('_gallery_title'); ?></h2>
</div>
<?php endif; ?>
<?php 
	$sqz_image_gallery = get_sub_field('_gallery');
	if($sqz_image_gallery): // only show the image if gallery exists
?>
    <div class="row">
    	<?php foreach( $sqz_image_gallery as $sqz_gallery_image ): ?>
        <div class="col-xs-12 <?php if($sqz_el_layout == 'full_width'){ ?>col-sm-3<?php } else {?>col-sm-4<?php } ?>">
		<figure class="sqz-thumb">
        	<a href="<?php echo $sqz_gallery_image['url']; ?>" class="sqz-fancy" rel="sqz-gallery">
        		<img src="<?php echo $sqz_gallery_image['sizes']['thumbnail']; ?>" data-rjs="<?php echo $sqz_gallery_image['sizes']['thumbnail_2x']; ?>" alt="<?php echo $sqz_gallery_image['alt']; ?>" />
       		</a>	
        </figure>
        </div>
        <?php endforeach; ?>
	</div>        
	<?php endif; ?>
<?php echo($closed); ?>
</section>
</div>
<?php if($block_width == 'End'  && $sqz_el_layout != 'full_width') { ?>
	</div>
    	</div>
        	</div>
            	</div>
<?php } ?>