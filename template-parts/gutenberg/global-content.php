<?php
//pr($block);

$sqz_vertical_space =get_field('sqz_vertical_space_in_pixel', $block['id']);
$sqz_layout =get_field('sqz_layout', $block['id']);
$sqz_top_space =get_field('sqz_top_space', $block['id']);
$sqz_bottom_space =get_field('sqz_bottom_space', $block['id']);
$sqz_background_type =get_field('sqz_background_type', $block['id']);
$sqz_background_color =get_field('sqz_background_color', $block['id']);
$sqz_background_image =get_field('sqz_background_image', $block['id']);
$sqz_overlay =get_field('sqz_overlay', $block['id']);

// $queried_object = get_queried_object();
// echo "<pre>";
//print_r($queried_object);

	
?>

<div id="book" class="<?php  echo $sqz_overlay.' '.$sqz_top_space.' '.$sqz_bottom_space.' '.$sqz_background_color ;?> " <?php if ($sqz_background_image) { ?> style="background-image: url(<?php echo$sqz_background_image['url'];?>"  <?php } ?>  style="height: auto;">

	<div  class="<?php  echo $sqz_layout ;?> ">
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
			        if ($row_limit == 4) { break; }
			        $sqz_image = get_sub_field('sqz_image');
					$sqz_title = get_sub_field('sqz_title');
					$sqz_descriptions = get_sub_field('sqz_descriptions');
					?>
					<div class="col-md-<?php echo($col) ?>" data-match-height="items-global">
							<h4><?php echo $sqz_title; ?></h4>
							<img src="<?php echo $sqz_image['url']; ?>" alt="<?php echo $sqz_image['alt'] ?>" class="img img-responsive"/>
							<p> <?php echo $sqz_descriptions; ?></p>
					</div>
					<?php
			    endwhile;
			endif;

		}
			?>
		</div>
	</div>
</div>
