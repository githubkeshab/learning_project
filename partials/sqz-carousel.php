<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php $sqz_el_layout = get_sub_field('_crls_column_width');
if($sqz_el_layout == 'half_width') :
	$sqz_el_column_class = 'col-12 col-sm-6';
elseif($sqz_el_layout == 'one_third') :
	$sqz_el_column_class = 'col-12 col-sm-4';
elseif($sqz_el_layout == 'two_third') :
	$sqz_el_column_class = 'col-12 col-sm-8';	
else:
	$sqz_el_column_class = 'sqz-clear';
endif;
//carousel settings
//$sqz_carousel_auto_play = get_field('_auto_play');
$sqz_carousel_number = get_sub_field('_show_items');
//$sqz_carousel_speed = get_field('_slide_speed');
$sqz_carousel_navigation = get_sub_field('_carousel_navigation');
$sqz_carousel_pagination = get_sub_field('_carousel_pagination');
if($sqz_el_layout == 'full_width'){
 $openclose= '<div class="container"><div class="row"><div class="'.sqz_columns_element().'">';
 $closed= '</div></div></div>';
}
$block_width = get_sub_field('block_width');	
?>
<?php if($block_width == 'Start' && $sqz_el_layout != 'full_width') { ?>
<div class="container">
 <div class="row justify-content-center">
   <div class="<?php sqz_columns(); ?>">
     <div class="row justify-content-center">
      <?php } ?>
      <div class="<?php echo $sqz_el_column_class; ?>">
        <section class="sqz-section sqz-small_padding sqz-pt_0">
         <?php echo($openclose); ?>
         <?php if(get_sub_field('_carousel_title')) : ?>
          <div class="sqz-section_header">
           <h2 class="sqz-section_title"><?php the_sub_field('_carousel_title'); ?></h2>
         </div>
       <?php endif; ?>
       <div class="owl-carousel sqz-carousel">
         <?php if(get_row_layout() == '_fc_carousel'):
         if( have_rows('_carousel') ):
          $i = 0;
        while ( have_rows('_carousel') ) : the_row();
        $sqz_crsl_title = get_sub_field('_crsl_title');
        $sqz_crsl_content = get_sub_field('_crsl_description');
        $sqz_crsl_image = get_sub_field('_crsl_image');
        $sqz_crsl_link = get_sub_field('_crsl_button');
        
        ?> 
        <div class="sqz-item">
         <div class="sqz-caro_block">
           <?php if($sqz_crsl_image) :?>
            <figure class="sqz-thumb">
             <img src="<?php echo $sqz_crsl_image['sizes']['hero_image_thumb']; ?>" data-rjs="<?php echo $sqz_crsl_image['sizes']['hero_image_thumb_2x']; ?>" alt="<?php echo $sqz_crsl_title; ?>" />
           </figure>
         <?php endif; ?>
         <?php if($sqz_crsl_title) : ?>
          <h4 class="sqz-widget_title">
           <?php if($sqz_crsl_link): ?>
            <a href="<?php echo $sqz_crsl_link; ?>" title="<?php echo $sqz_crsl_title; ?>">
            <?php endif; ?>                
            <?php echo $sqz_crsl_title; ?>
            <?php if($sqz_crsl_link): ?>
            </a>
          <?php endif; ?>
        </h4>
      <?php endif; ?>
      <?php if($sqz_crsl_content) : ?>
        <div class="sqz-widget_content">
        	<?php echo $sqz_crsl_content; ?>
        </div>
      <?php endif; ?>
      <?php if($sqz_crsl_link): ?>
        <a href="<?php echo $sqz_crsl_link; ?>" title="<?php echo $sqz_crsl_title; ?>" class="sqz-btn">Read More</a>
      <?php endif; ?>
    </div>
  </div>
  <?php $i++; endwhile; endif; endif; ?>
</div>

<script>
//<![CDATA[
jQuery(document).ready(function($) {
	$(".sqz-carousel").owlCarousel({
    	navigation : <?php if($sqz_carousel_pagination) { echo 'true'; } else { echo'false';} ?>, // Show next and prev buttons
      pagination : <?php if($sqz_carousel_navigation) { echo 'true'; } else { echo'false';} ?>,
      navigationText : ["<i class='mdi mdi-chevron-left'>","<i class='mdi mdi-chevron-right'>"],
      dots : <?php if($sqz_slider_pagination) { echo 'true'; } else { echo'false';} ?>,
      autoPlay: true,
      slideSpeed : 600,
      items : <?php echo $sqz_carousel_number; ?>,
      responsiveClass:true,
      responsive:{
        0:{
          items:1
        },
        768:{
          items:2
        },
        1024:{
          items:3
        }
      }
    });
});
//]]>
</script>
<?php echo($closed); ?>
</section>
</div>
<?php if($block_width == 'End' && $sqz_el_layout != 'full_width') { ?>
</div>
</div>
</div>
</div>
<?php } ?>