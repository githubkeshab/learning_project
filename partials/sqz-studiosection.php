<?php
/**
 * The template for displaying content
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
  
     $sqz_studio_heading_title = get_sub_field('studio_heading_title');
     $sqz_studio_content = get_sub_field('studio_content'); 
    

       $sqz_studio_remove_top_space = get_sub_field('studio_remove_top_space');
                            $sqz_studio_remove_bottom_space = get_sub_field('studio_remove_bottom_space');
                            $studio_topspacingpadding = $sqz_studio_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $studio_bottomspacingpadding = $sqz_studio_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true
 

    if( have_rows('studio_list') ):                    
?>
       <div class="sqz-section sqz-clear sqz-large_padding sqz-studio_section sqz-dark_bgr vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($studio_topspacingpadding.' '.$studio_bottomspacingpadding); ?>">
              <div class="container">
                    <?php if(trim($sqz_studio_heading_title) || trim($sqz_studio_content)){  ?>
                        <div class="row justify-content-center">
                              <div class="<?php echo sqz_columns_narrow(); ?> sqz-module_content">
                                <div class="sqz-section sqz-large_padding sqz-pt_0 sqz-header_section text-center">
                                 <?php if(trim($sqz_studio_heading_title)){  ?>
                                       <header class="sqz-header">
                                            <h2><?php echo($sqz_studio_heading_title); ?></h2>
                                       </header>
                                 <?php } ?>
                                    <p><?php echo($sqz_studio_content); ?></p>
                              </div>
                          </div>
                        </div>
                    <?php } ?>
           </div>
            <div class="container-fluid">
                    <div class="row no-gutters">
                           <?php while( have_rows('studio_list')):  the_row();
                                  $sqz_studio_image = get_sub_field('studio_image'); 
                                   $sqz_studio_title = get_sub_field('studio_title');
                                    $sqz_studio_link = get_sub_field('_studio_link');
                                   $image_studio=wp_get_attachment_image_src($sqz_studio_image ,'studiohome');
                                $image_studio_2x=wp_get_attachment_image_src($sqz_studio_image ,'studiohome_2x');
                            ?>
                                     <div class="col-12 col-md-6 sqz-studio_content sqz-module_content">
                                        <?php if($sqz_studio_image){  ?>
                                         <figure class="sqz-thumb">
                                            <img src="<?php echo($image_studio['0']); ?>" alt="<?php echo($sqz_studio_title); ?>" title="<?php echo($sqz_studio_title); ?>" data-rjs="<?php echo($image_studio_2x['0']); ?>">
                                         </figure>
                                        <?php } ?>
                                        <?php if(trim($sqz_studio_title)){  ?>
                                            <a href="<?php echo $sqz_studio_link; ?>" class="sqz-btn sqz-btn_primary"><?php echo($sqz_studio_title); ?></a>
                                        <?php } ?>
                                        
                                    </div>
                          <?php  endwhile; ?>
                    </div>
               </div>
        </div>
    <?php endif; ?>
   

