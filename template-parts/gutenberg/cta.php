
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
//pr($block);
	$sqz_top_space =get_field('sqz_top_space');
	$sqz_bottom_space =get_field('sqz_bottom_space');
	$sqz_bg_color =get_field('sqz_background_color');
	$sqz_bg_img =get_field('sqz_background_image');




	$sqz_hasbg = 'sqz-has_bgr sqz-bgr_cover';
	$sqz_hasovl = 'sqz-has_overlay';
	$sqz_ovr =get_field('sqz_overlay');
	$sqz_cta_title = get_field('sqz_cta_title');
	$sqz_cta_description = get_field('sqz_cta_description');
	$sqz_cta_link = get_field('sqz_cta_link');
	$sqz_cta_title = get_field('sqz_cta_title');

?>
<div class="sqz-section sqz-has_bgr sqz-bgr_cover text-center sqz-call_action sqz-<?php echo esc_attr($block['align']); ?> <?php  echo $sqz_top_space.' '.$sqz_bottom_space.' '.$sqz_bg_color ;?> <?php if($sqz_bg_img){ echo $sqz_ovr.' '.$sqz_hasbg; } ?> <?php if($sqz_ovr){ echo $sqz_ovr.' '.$sqz_hasovl; } ?>" <?php if ($sqz_bg_img) { ?> style="background-image: url(<?php echo$sqz_bg_img['url'];?>"  <?php } ?> >
<div class="sqz-call_action_cnt">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
            <h2 class="sqz-section_title"><?php echo $sqz_cta_title; ?></h2>      
	    	<div class="sqz-section_content"><?php echo $sqz_cta_description; ?></div>


	    	<?php if($sqz_cta_link) { ?>
	          <div class="sqz-quote sqz-clearfix"> <a href="<?php echo($sqz_cta_link['url']); ?>" class="sqz-btn" <?php if($sqz_cta_link['target'] == '_blank') { echo('target="_blank"'); } ?>><span>
	            <?php  if($sqz_cta_link['title']) { echo($sqz_cta_link['title']); } else { echo('Read More'); } ?>
	            </span></a>
	            <?php } ?>
	        </div>
	    </div>
	</div>
</div>
</div>

<<?php 
/*echo($sqz_ovr);
echo $sqz_top_space;

echo $sqz_bottom_space;*/
 ?>