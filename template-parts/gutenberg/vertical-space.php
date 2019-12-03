<?php

$sqz_vertical_space_in_pixel =get_field('sqz_vertical_space_in_pixel');
if (empty($sqz_vertical_space_in_pixel)) {
	$sqz_vertical_space_in_pixel = '30px';
}

?>
<div style="width: 100%; height: <?php echo $sqz_vertical_space_in_pixel; ?>;"></div>