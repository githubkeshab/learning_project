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


	$sqz_vertical_space =get_field('sqz_vertical_space_in_pixel');
	$sqz_top_space =get_field('sqz_top_space');
	$sqz_bottom_space =get_field('sqz_bottom_space');
	$sqz_background_type =get_field('sqz_background_type');
	$sqz_bg_color =get_field('sqz_background_color');
	$sqz_bg_img =get_field('sqz_background_image');
	$sqz_ovr =get_field('sqz_overlay');
	$sqz_layout = get_field('sqz_layout_type');

	$sqz_hasbg = 'sqz-has_bgr sqz-bgr_cover';
	$sqz_hasovl = 'sqz-has_overlay';

?>
<div class="sqz-acc_module sqz-section sqz-<?php echo esc_attr($block['align']); ?> <?php  echo $sqz_top_space.' '.$sqz_bottom_space.' '.$sqz_bg_color ;?> <?php if($sqz_bg_img){ echo $sqz_ovr.' '.$sqz_hasbg; } ?> <?php if($sqz_ovr){ echo $sqz_ovr.' '.$sqz_hasovl; } ?>" <?php if ($sqz_bg_img) { ?> style="background-image: url(<?php echo$sqz_bg_img['url'];?>"  <?php } ?> >
	 <div class="row">

			<?php
			$row_limit =0;
			$col =0;


			if( have_rows('sqz_columns') ):
			    while ( have_rows('sqz_columns') ) : the_row();
						$row_limit ++;
						$col ++;
			    endwhile;
			endif;


			if ($col) {

				 if ($col==1) {
				 	$col =12;
				 }elseif ($col==2) {
				 	$col =6;
				 }elseif ($col==3) {
				 	$col =4;
				 }else{
				 	$col =3;
				 }
		

			if( have_rows('sqz_columns') ):
			    while ( have_rows('sqz_columns') ) : the_row();
			        if ($row_limit == 5) { break; }
			        $sqz_image = get_sub_field('sqz_image');
					$sqz_title = get_sub_field('sqz_title');
					$sqz_descriptions = get_sub_field('sqz_descriptions');
					?>
					<div class="col-md-<?php echo($col) ?>" data-match-height="items-global">
							<h4><?php echo $sqz_title; ?></h4>
							<?php if ( $sqz_image) {?>
							<img src="<?php echo $sqz_image['url']; ?>" alt="<?php echo $sqz_image['alt'] ?>" class="img img-responsive"/>
							<?php } ?>
							<p> <?php echo $sqz_descriptions; ?></p>
					</div>
					<?php
			    endwhile;
			endif;

		}
			?>
		</div>

	</div>
