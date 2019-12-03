<?php
/**
 * The template for displaying price pack
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php
$sqz_fc_pricing_title = get_sub_field('_fc_pricing_title');
$sqz_fc_pricing_subtitle = get_sub_field('_fc_pricing_sub_title');
$sqz_fc_pricing_bgr = get_sub_field('_fc_pricing_background_image');
$sqz_fc_pricing_bgr_position = get_sub_field('_fc_pricing_bp');
	 $sqz_pricing_pb = get_sub_field('_bottom_space_new');  	
   $sqz_has_intro = get_sub_field('_has_intro');     
?>
<section class="sqz-section sqz-large_padding<?php if(($sqz_pricing_pb) && ($sqz_fc_pricing_bgr_position == 'wrapper_bgr')) { echo (' sqz-mb_0');} ?><?php if($sqz_fc_pricing_bgr_position == 'wrapper_bgr') { echo (' sqz-special_pack sqz-has_bgr sqz-bgr_cover'); } else { echo(' sqz-pt_0'); } ?>" <?php if($sqz_fc_pricing_bgr_position == 'wrapper_bgr') { ?>style="background-image:url(<?php echo ($sqz_fc_pricing_bgr); ?>);" <?php } ?> >
          <div class="container">
            <div class="sqz-section_header text-center">
			<?php if(trim($sqz_fc_pricing_title)){ ?>
            <h2 class="sqz-section_title"><?php echo($sqz_fc_pricing_title); ?></h2>
            <?php } ?>
            <?php // if(trim($sqz_fc_pricing_subtitle)){ ?>
            <h3 class="sqz-section_subtitle"><?php echo($sqz_fc_pricing_subtitle); ?></h3>
            <?php // } ?>
            </div>
            <?php if($sqz_has_intro == 1) { ?>
              <?php if( have_rows('_package_intro') ): ?>
			  <div class="sqz-price_intro">
                 <div class="row">
                     <?php while ( have_rows('_package_intro') ) : the_row();
                          $sqz_intro_title = get_sub_field('_intro_title');
                          $sqz_intro_content = get_sub_field('_intro_content');
                           if(trim($sqz_intro_title) || trim($sqz_intro_content)) {
                     ?>
                          <div class="col-xs-12 col-sm-3">
                              <div class="sqz-intro_pack_content">
                                <?php if(trim($sqz_intro_title)){ ?>
                                  <h4><?php echo($sqz_intro_title); ?></h4>
								   <?php if(trim($sqz_intro_content)){ ?>
                                  <p><?php echo($sqz_intro_content); ?></p>				  
								 
								  <?php } ?>
                                <?php } ?>
                               </div>
                          </div>
                      <?php } ?>
                   <?php endwhile; ?>
                 </div>
              <?php endif; ?>
			  </div>				  
              <?php } ?>
            <?php if( have_rows('_fc_pack_list') ): ?>
              <div class="row">
                <?php while ( have_rows('_fc_pack_list') ) : the_row();
                $sqz_pricing_title = get_sub_field('_pack_title');
				$sqz_pricing_subtitle = get_sub_field('_pack_sub_title');
                $sqz_pricing_caption = get_sub_field('_pack_caption');
                $sqz_pricing = get_sub_field('_pack_pricing');
				$sqz_pricing_button = get_sub_field('_pack_button_label');
				$sqz_pricing_url = get_sub_field('_pack_url');
				$sqz_pricing_target = get_sub_field('_pack_target');
			
       
                if($sqz_pricing_title){ ?>

                <div class="col-xs-12 col-sm-6">
                  <div class="sqz-pricing_box text-center sqz-equal_height <?php if($sqz_fc_pricing_bgr_position != 'wrapper_bgr') { echo ('sqz-has_bgr sqz-bgr_cover'); }  ?>" <?php if($sqz_fc_pricing_bgr_position != 'wrapper_bgr') { ?>style="background-image:url(<?php echo ($sqz_fc_pricing_bgr); ?>);" <?php } ?>>
                   <?php if(trim($sqz_pricing_title)){ ?>
                   <h3><?php echo($sqz_pricing_title); ?>
                   <?php if(trim($sqz_pricing_title)){ ?>
                   <span><?php echo($sqz_pricing_subtitle); ?></span>
                   <?php }?>
                   </h3>
                   <?php } ?>
                   <div class="price"><strong><?php if($sqz_pricing){ echo('$'.$sqz_pricing); } else { echo('$0'); } ?></strong></div>
					<?php if(trim($sqz_pricing_caption)){ ?>
                   <p><?php echo($sqz_pricing_caption); ?></p>
                   <?php } ?>  
                   <?php if(trim($sqz_pricing_url)){ ?>
                   <a class="sqz-btn <?php if($sqz_fc_pricing_bgr_position == 'wrapper_bgr') { echo ('sqz-btn_dark'); } ?>" href="<?php echo($sqz_pricing_url); ?>" <?php if($sqz_pricing_target) { echo('target="_blank"'); } ?>><?php echo($sqz_pricing_button); ?></a>
                   <?php } ?>
                 </div>
               </div>

               <?php } endwhile;  ?>
             </div>
           <?php endif; ?>
         </div>
       </section>
       
    