<?php

/**
 * Main Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

//pr($block);
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



$sqz_top_space =get_field('sqz_top_space');
$sqz_bottom_space =get_field('sqz_bottom_space');
$sqz_slider = get_field('sqz_slider');
$sqz_slider_effect = get_field('sqz_slider_effect');
$sqz_slider_auto_play = get_field('sqz_auto_play');
$sqz_slider_number = get_field('sqz_number_of_slides_to_show');
$sqz_slider_speed = get_field('sqz_slide_speed');
$sqz_slider_navigation = get_field('sqz_slider_navigation');
$sqz_slider_pagination = get_field('sqz_slider_pagination');
if($sqz_slider) :
?>
<div  class="sqz-<?php echo esc_attr($block['align']); ?>  ">

<?php if( have_rows('sqz_slider') ): ?>
	<div id="<?php echo $block['id'];?>" class="<?php echo $sqz_top_space; ?> <?php echo $sqz_bottom_space; ?> ">
	<?php $i=1; while( have_rows('sqz_slider') &&$i<=$sqz_slider_number): the_row(); 
		$sqz_slider_title = get_sub_field('sqz_slider_title');
		$sqz_slider_image = get_sub_field('sqz_slider_image');
        $sqz_caption_position_h = get_sub_field('sqz_caption_position_h');
        $sqz_caption_position_v = get_sub_field('sqz_caption_position_v');
		$sqz_mobile_slider_image = get_sub_field('mobile_slider_image');
		 $image_first_mobile=wp_get_attachment_image_src($sqz_mobile_slider_image,'mobile_banner_image');
		  $image_first_mobile_2x=wp_get_attachment_image_src($sqz_mobile_slider_image,'mobile_banner_image_2x');

		 $image_first=wp_get_attachment_image_src($sqz_slider_image,'banner_image');
		  $image_first_2x=wp_get_attachment_image_src($sqz_slider_image,'banner_image_2x');
		$sqz_slider_caption = get_sub_field('sqz_slider_description');
		$sqz_slider_link = get_sub_field('sqz_slider_button');
		//$sqz_slider_button_text = get_sub_field('_slider_button_text');
		//$sqz_new_window = get_sub_field('new_window');
		$sqz_columns_overlay_destop = get_sub_field('sqz_columns_overlay_destop');
		$sqz_columns_overlay_mobile = get_sub_field('sqz_columns_overlay_mobile');

		if($sqz_mobile_slider_image){
        $mobileimage=$image_first_mobile['0'];
        $mobileimage_2x=$image_first_mobile_2x['0'];
		} 
        else {
        $mobileimage=$image_first['0'];
        $mobileimage_2x=$image_first_2x['0'];
		}
		?>
	
    <div class="sqz-slider_all <?php if($sqz_slider_button_text == null && $sqz_slider_link) { ?>sqz-has_link <?php } ?>" <?php if($sqz_slider_button_text == null && $sqz_slider_link) { ?>data-link="<?php echo ($sqz_slider_link); ?>" <?php } ?> >
		<div class="sqz-slide <?php if(!empty($sqz_columns_overlay_destop)){ echo('sqz-has_overlay'); } ?>" style="background-image:url(<?php echo $image_first['0'];?>)" data-rjs="<?php echo($image_first_2x['0']); ?>">
            <img src="<?php echo $image_first['0'];?>">
			<div class="sqz-slider_caption_wrap">
            	<div class="container">
                	   <div class="row <?php echo($sqz_caption_position_h); ?>">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-6  <?php echo($sqz_caption_position_v); ?>">
							<?php if($sqz_slider_title) : ?>
                                <h2 class="sqz-slider_title"><?php echo $sqz_slider_title; ?></h2>
                            <?php endif; ?>
                            <?php if($sqz_slider_caption) : ?>
                                <div class="sqz-slider_caption">
                                    <?php echo $sqz_slider_caption; ?>
                                </div>
                            <?php endif; ?>
                           <?php if($sqz_slider_link) : ?>
                                <a style="pointer-events: none;" href="<?php echo $sqz_slider_link['url']; ?>" class="sqz-btn" <?php if($sqz_slider_link['target'] == '_blank'){ echo('target="_blank"'); } ?>><?php if($sqz_slider_link['title']) { echo($sqz_slider_link['title']); } else { echo('Read More'); } ?></a>
                            <?php endif; ?>
                		</div> <!-- //col -->
                    </div> <!-- //row -->
                </div> <!-- //container -->
            </div> <!-- // sqz-slider_caption_wrap -->
		</div>	
		</div>	
	<?php $i++; endwhile; ?>
	</div>
<?php endif; ?>
</div>
<?php endif; ?>



<?php
$sqz_slider_effect = get_field('sqz_slider_effect');
$sqz_slider_auto_play = get_field('sqz_auto_play');
$sqz_slider_number = get_field('sqz_number_of_slides_to_show');
$sqz_slide_speed = get_field('sqz_slide_speed');
$sqz_slider_navigation = get_field('sqz_slider_navigation');
$sqz_slider_pagination = get_field('sqz_slider_pagination');
?>
<script>
//<![CDATA[
jQuery(document).ready(function($) {
	$("#<?php echo $block['id'];?>").slick({





      arrows : <?php if($sqz_slider_navigation) { echo 'true'; } else { echo'false';} ?>, // Show next and prev buttons
	  dots : <?php if($sqz_slider_pagination) { echo 'true'; } else { echo'false';} ?>,
	  navigationText : ["",""],
	  autoplay: <?php if($sqz_slider_auto_play && $i>1) { echo 'true'; } else { echo'false';} ?>,
	  speed : 500<?php //echo $sqz_slide_speed; ?>,
      items:true,
      slidesToShow:1,
      infinite:true,
	  rewindSpeed: 100,
	  <?php if($sqz_slider_effect == 'fade') { ?>
	  fade: true,
	  <?php } ?>

	  	
  	});

	//slider link
  	$('.sqz-has_link').click(function() {
		var dataLink = $(this).attr('data-link');
        <?php if($sqz_slider_target) { ?>
		   //   window.open(dataLink);
        <?php } else { ?>
          //  location.href = dataLink;
        <?php } ?>
	});
});
//]]>
</script>