<?php
/**
 * The template for displaying Slider
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>

<div id="sqz-inner_banner">

	<?php $sqz_new_window= ""; if( have_rows('carousel_slider') ): ?>
	<div id="sqz-main_innerslider" class="owl-carousel">
		<?php $i=1;  while( have_rows('carousel_slider')): the_row(); 
		
		$sqz_slider_image = get_sub_field('sqz_craousel_image');
		$sqz_slider_image_mobile = get_sub_field('mobile_image');
		$sqz_crausel_text = get_sub_field('sqz_crausel_text');
		$sqz_craousel_link = get_sub_field('sqz_craousel_link');
		$sqz_target = get_sub_field('sqz_target');
		//echo($sqz_slider_image);

		$image_first=wp_get_attachment_image_src($sqz_slider_image,'carousel_image');
		$image_first_2x=wp_get_attachment_image_src($sqz_slider_image,'carousel_image_2x');
		$image_first_mobile=wp_get_attachment_image_src($sqz_slider_image_mobile,'carousel_image');
		$image_first_mobile_2x=wp_get_attachment_image_src($sqz_slider_image_mobile,'carousel_image_2x');


		if($sqz_slider_image) { ?>
		
		
		<div class="sqz-slider_all" >
			<?php //endif; ?>
<?php if($sqz_slider_image_mobile){ ?>
<div class="sqz-slide_mobile sqz-slide sqz-has_bgr sqz-bgr_cover" style="background-image: url(<?php echo($image_first_mobile_2x['0']); ?>);">
		<!--<img src="<?php // echo $image_first['0'];?>" data-rjs="<?php // echo($image_first_2x['0']); ?>">-->
				<div class="sqz-slider_content">
					<?php if($sqz_crausel_text) { ?>
					<?php echo($sqz_crausel_text); ?>
					<?php } ?>
					<?php if($sqz_craousel_link){ ?>
					<a href="<?php echo($sqz_craousel_link); ?>" class="sqz-btn" <?php if($sqz_target){ echo("class='_target'"); } ?>>Learn More</a>
					<?php } ?>
				</div>
			</div>	
	
<?php }  ?>
			<div class="sqz-slide sqz-has_bgr sqz-bgr_cover" style="background-image: url(<?php echo($image_first_2x['0']); ?>);">

				<!--<img src="<?php // echo $image_first['0'];?>" data-rjs="<?php // echo($image_first_2x['0']); ?>">-->
				<div class="sqz-slider_content">
					<?php if($sqz_crausel_text) { ?>
					<?php echo($sqz_crausel_text); ?>
					<?php } ?>
					<?php if($sqz_craousel_link){ ?>
					<a href="<?php echo($sqz_craousel_link); ?>" class="sqz-btn" <?php if($sqz_target){ echo("class='_target'"); } ?>>Learn More</a>
					<?php } ?>
				</div>
			</div>	
		</div>	
		<?php } $i++; endwhile; ?>
	</div>
<?php endif; ?>
</div>

<script>
//<![CDATA[
jQuery(document).ready(function($) {
	$("#sqz-main_innerslider").owlCarousel({
		nav : false,
		dots : true,
		navigationText : ["",""],
		autoplay: true,
		slideSpeed : 100,
		items:1,
		rewindSpeed: 100,
		
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
		
	});

	//slider link
	
});
//]]>
</script>