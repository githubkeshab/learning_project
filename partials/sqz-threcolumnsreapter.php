<?php
/**
 * The template for thre column reapter home
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */$sqz_promo_remove_top_space = get_sub_field('promo_remove_top_space');
                            $sqz_promo_remove_bottom_space = get_sub_field('promo_remove_bottom_space');
                            $promo_topspacingpadding = $sqz_promo_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $promo_bottomspacingpadding = $sqz_promo_remove_bottom_space ==1 ?'sqz-pb_0' : ''; // returns true
   if( have_rows('builder_three_columns_list') ):  
?>

  <div class="sqz-section sqz-clear sqz-large_padding sqz-dark_bgr sqz-three_column vive-homebuilder-section_<?php echo($GLOBALS['homecount']); ?> <?php echo($promo_topspacingpadding.' '.$promo_bottomspacingpadding); ?>">
        <div class="container">
            <div class="row justify-content-center sqz-module_content">
                 <?php  while( have_rows('builder_three_columns_list')):  the_row();
                          $sqz_three_columns_image = get_sub_field('three_columns_image');
                           $sqz_thre_coulmns_title = get_sub_field('thre_coulmns_title');
                            $sqz_three_columns_content = get_sub_field('three_columns_content');

                               $threecolumnimage= wp_get_attachment_image_src($sqz_three_columns_image,'full');
       $threecolumnimage_2x= wp_get_attachment_image_src($sqz_three_columns_image,'full');

                            if($sqz_three_columns_image || trim($sqz_thre_coulmns_title) || trim($sqz_three_columns_content)){
                 ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="sqz-content">
                                    <?php if($sqz_three_columns_image){  ?>
                                          <figure class="sqz-thumb">
                                              <img src="<?php echo($threecolumnimage['0']); ?>" alt="<?php echo($sqz_thre_coulmns_title); ?>" title="<?php echo($sqz_thre_coulmns_title); ?>" data-rjs="<?php echo($threecolumnimage_2x['0']); ?>">
                                          </figure>
                                    <?php } ?>
                                    <?php if(trim($sqz_thre_coulmns_title)){ ?>
                                       <h3><?php echo($sqz_thre_coulmns_title); ?></h3>
                                    <?php } ?>
                                    <?php echo($sqz_three_columns_content); ?>
                                        </div>
                                </div>
                            <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
  </div>    
<?php endif; ?>  
