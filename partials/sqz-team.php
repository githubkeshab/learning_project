<?php
/**
 * The template for displaying team
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php $sqz_el_layout = get_sub_field('_column_width');
if($sqz_el_layout == 'half_width') :
	$sqz_el_column_class = 'col-xs-12 col-sm-6';
elseif($sqz_el_layout == 'one_third') :
	$sqz_el_column_class = 'col-xs-12 col-sm-4';
elseif($sqz_el_layout == 'two_third') :
	$sqz_el_column_class = 'col-xs-12 col-sm-8';	
else:
	$sqz_el_column_class = 'sqz-clear';
endif;
if($sqz_el_layout == 'full_width'){
 $openclose= '<div class="container"><div class="row"><div class="col-xs-12 col-md-12">';
 $closed= '</div></div></div>';
}
$block_width = get_sub_field('block_width');	
?>
<?php if($block_width == 'Start' && $sqz_el_layout != 'full_width') { ?>
<div class="container">
 <div class="row">
   <div class="<?php sqz_columns(); ?>">
     <div class="row">
      <?php } ?>
      <div class="<?php echo $sqz_el_column_class; ?>">
        <section id="sqz-team_inner" class="sqz-section sqz-large_padding sqz-pt_0 ">
          <?php echo($openclose); ?>
          <?php if(get_sub_field('_our_team_title')) : ?>
           <h3 class="sqz-vertical_title"><?php the_sub_field('_our_team_title'); ?></h3>
         <?php endif; ?>
         <div class="row">
           <?php if(get_row_layout() == '_fc_our_team'):
           if( have_rows('_our_team') ):
            while ( have_rows('_our_team') ) : the_row();
          $sqz_team_image = get_sub_field('_team_picture');
          $sqz_team_title = get_sub_field('_team_member');
          $sqz_team_designation = get_sub_field('_team_designation');
          $sqz_team_description = get_sub_field('_team_short_description');
          
          if($sqz_team_image){
           ?> 
           <div id="<?php echo(str_replace(' ','',strtolower($sqz_team_title))); ?>" class="sqz-team_single sqz-clearfix">
            <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1">

             <figure class="sqz-thumb">
               <img src="<?php echo $sqz_team_image['sizes']['hero_image_thumb']; ?>" data-rjs="<?php echo $sqz_team_image['sizes']['hero_image_thumb_2x']; ?>" alt="<?php echo $sqz_team_title; ?>" />
             </figure>
           </div>
           <?php } if(trim($sqz_team_title) || trim($sqz_team_description)) { ?>
           <div class="col-xs-12 col-sm-7 col-md-6">
            <div class="sqz-team_description">
              <?php if(trim($sqz_team_title)){ ?>
              <h3 class="sqz-team_title">
                <?php echo $sqz_team_title; ?>
                <?php } ?>
                <?php if(trim($sqz_team_designation)){ ?>
                <span><?php echo $sqz_team_designation; ?></span>
              </h3>
              <?php } ?>

              <?php echo $sqz_team_description; ?>
            </div>
          </div>
        </div>
        
        <?php } endwhile; endif; endif; ?>
      </div>
      <?php echo($closed); ?>
    </section>
  </div>
  <?php if($block_width == 'End' && $sqz_el_layout != 'full_width') { ?>
</div>
</div>
</div>
</div>
<?php } ?>