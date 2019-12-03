<?php 

	// Create class attribute allowing for custom "className" and "align" values.
/*	$className = '';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}



	*/
	$sqz_top_space =get_field('sqz_top_space');
	$sqz_bottom_space =get_field('sqz_bottom_space');
	$sqz_bg_type =get_field('sqz_background_type');
	$sqz_bg_color =get_field('sqz_background_color');
	$sqz_bg_img =get_field('sqz_background_image');
	$sqz_ovr =get_field('sqz_overlay');
	$sqz_layout = get_field('sqz_layout_type');

	$sqz_hasbg = 'sqz-has_bgr sqz-bgr_cover';
	$sqz_hasovl = 'sqz-has_overlay';

	if( have_rows('sqz_accordions') ):
	?>

	<div class="sqz-acc_module sqz-section sqz-<?php echo esc_attr($block['align']); ?> <?php  echo $sqz_top_space.' '.$sqz_bottom_space.' '.$sqz_bg_color ;?> <?php if($sqz_bg_img){ echo $sqz_ovr.' '.$sqz_hasbg; } ?> <?php if($sqz_ovr){ echo $sqz_ovr.' '.$sqz_hasovl; } ?>" <?php if ($sqz_bg_img) { ?> style="background-image: url(<?php echo$sqz_bg_img['url'];?>"  <?php } ?> >

		<div class="container">
		<?php $acc_title = get_field('sqz_accordion_title');
		if ($acc_title) {
			echo "<h2>$acc_title</h2>";
		}
		?>

		<div class="sqz-accordion" id="sqz-acc_<?php echo $block['id']; ?>">
		 <?php  
	        while ( have_rows('sqz_accordions') ) : the_row();
	            $sqz_accordion_desc= get_sub_field('sqz_accordion_desc');
	            $sqz_accordion_text = get_sub_field('sqz_accordion_text');
	            $acc_id = $block['id'].get_row_index();
				?>
				 <div class="sqz-acc_panel">
				    <div class="sqz-acc_header" id="sqz-heading_<?php echo $acc_id; ?>">
				       <h3 class="collapsed" data-toggle="collapse" data-target="#sqz-collapse_<?php echo $acc_id; ?>"
				          aria-expanded="false" aria-controls="sqz-collapse_<?php echo $acc_id; ?>">
				        <?php echo $sqz_accordion_text ;?>
				        </h3>
				    </div>
				    <div id="sqz-collapse_<?php echo $acc_id; ?>" class="collapse" aria-labelledby="sqz-heading_<?php echo $acc_id; ?>"
				      data-parent="#sqz-acc_<?php echo $block['id']; ?>">
				      <div class="sqz-acc_body sqz-entry_content"><p><?php echo $sqz_accordion_desc ;?></p>
				      </div>
				    </div>
				  </div>
				<?php		
		    endwhile; // while ( have_rows('sqz_accordions') ) : the_row();
		    ?>
		</div><!-- //sqz_accordions -->
		</div>
	</div><!-- //sqz_acc_module -->
<?php endif; // if( have_rows('sqz_accordions') ):	?>

	 