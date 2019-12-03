<?php
/**
 * The template for displaying hero block section content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
  $sqz_getapp_remove_top_space = get_sub_field('getapp_remove_top_space');
                            $sqz_getapp_remove_bottom_space = get_sub_field('getapp_remove_bottom_space');
                            $getapp_topspacingpadding = $sqz_getapp_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $getapp_bottomspacingpadding = $sqz_getapp_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true

                            $sqz_hero_section_caption = get_sub_field('hero_section_caption');
 
$sqz_hero_section_image = get_sub_field('hero_section_image'); 
 $heroimage_first=wp_get_attachment_image_src($sqz_hero_section_image,'full');
 $heroimage_first_2x=wp_get_attachment_image_src($sqz_hero_section_image,'full');

 $sqz_hero_section_tilte = get_sub_field('hero_section_tilte'); 
 $sqz_hero_section_content = get_sub_field('hero_section_content'); 
 $sqz_hero_section_button_link = get_sub_field('hero_section_button_link'); 

?> <?php if(trim($sqz_hero_section_tilte) || trim($sqz_hero_section_content)){ ?>
     <section class="sqz-section sqz-app_section sqz-light_bgr vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php // echo($getapp_topspacingpadding.' '.$getapp_bottomspacingpadding); ?>" >
         
         
         <div class="sqz-app_content">
             <div class="container">
                     <div class="row justify-content-end sqz-module_content">
                         
                        <div class="col-12 col-md-6 col-lg-4 align-self-top align-self-md-center">
                              
                                <?php if(trim($sqz_hero_section_tilte)){ ?>
                                  <h2><?php echo($sqz_hero_section_tilte); ?></h2>
                                <?php } ?>
                                <?php echo($sqz_hero_section_content); ?>

                                <?php if($sqz_hero_section_button_link) : ?>
                                    <a href="<?php echo $sqz_hero_section_button_link['url']; ?>" class="sqz-btn sqz-btn_primary" <?php if($sqz_hero_section_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_hero_section_button_link['title']) { echo $sqz_hero_section_button_link['title']; } else { echo('Read More');} ?></a>
                                <?php endif; ?>
                                <?php if(trim($sqz_hero_section_caption)){ ?>
                                 <small><?php echo($sqz_hero_section_caption); ?></small>
                                <?php } ?>
                           </div>
                        <div class="col-12 col-lg-1"></div>
                       
                    </div>
          </div>
         </div>
         <div class="container sqz-app_container">
              <?php if($sqz_hero_section_image){ ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-7">
                    <div class="sqz-section sqz-app_image sqz-has_bgr" style="background-image:url();" >
                        <img src="<?php echo($heroimage_first[0]); ?>">    
                    </div>
                    </div>
             </div>
                <?php } ?>
         </div>
    </section>
    <?php } ?>

 