
<?php

/**
 * Main Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?><?php

	$sqz_top_space =get_field('sqz_top_space');
	$sqz_bottom_space =get_field('sqz_bottom_space');
	$sqz_bg_color =get_field('sqz_background_color');
	$sqz_bg_img =get_field('sqz_background_image');
	$sqz_ovr =get_field('sqz_overlay');

	$sqz_hasbg = 'sqz-has_bgr sqz-bgr_cover';
	$sqz_hasovl = 'sqz-has_overlay';

?>
<style type="text/css">

/* The width of each slide */
.sqz-carousel-item{
  width: 340px;
  height: 250px;
  object-fit: cover;
  margin-right: 15px;
}

/* Color of the arrows */
.slick-next::before, .slick-prev::before {
  color: red;
  width: 30px;

}
</style>

<div class="sqz-acc_module sqz-section sqz-<?php echo esc_attr($block['align']); ?> <?php  echo $sqz_top_space.' '.$sqz_bottom_space ;?> ">
<?php if( have_rows('sqz_carousel_sliders') ): ?>
	<div class="sqz_slick_carousel">
	<?php while( have_rows('sqz_carousel_sliders') ): the_row(); 
		$image = get_sub_field('sqz_carousel_image');
		$link = get_sub_field('sqz_carousel_link');
		?>
		<div class="sqz-carousel-item">
			<?php if( $link ): ?>
				<a href="<?php echo $link['url']; ?>">
			<?php endif; ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
</div>
<!-- /.container -->
<script type="text/javascript">
$(document).ready(function(){

$('.sqz_slick_carousel').slick({
  infinite: true,
  slidesToShow: 4, // Shows a three slides at a time
  slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
  arrows: true, // Adds arrows to sides of slider
  dots: true // Adds the dots on the bottom
});
  
});

</script>