<?php


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

// Load values and assign defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$sqz_image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');


_slider
_slider_title
_slider_image
mobile_slider_image
sqz_columns_overlay_destop
sqz_columns_overlay_mobile
_slider_description
_slider_button

?>
<div>
		
	<div id="<?php echo($block['id'])?>" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
	    </div>
	    <div class="carousel-item">
	      <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
	    </div>
	    <div class="carousel-item">
	      <img src="ny.jpg" alt="New York" width="1100" height="500">
	    </div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
</div>
