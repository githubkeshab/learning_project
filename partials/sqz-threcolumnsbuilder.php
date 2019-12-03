<?php
/**
 * The template for thre column reapter home
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */$sqz_promo_remove_top_space = get_sub_field('pagebuilder_remove_top_space_columns_three');
                            $sqz_promo_remove_bottom_space = get_sub_field('pagebuilder_remove_bottom_space_columns_three');
                            $promo_topspacingpadding = $sqz_promo_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $promo_bottomspacingpadding = $sqz_promo_remove_bottom_space ==1 ?'sqz-pb_0' : ''; // returns true
                            $sqz_builder_threecolumns_column_padding = get_sub_field('builder_threecolumns_column_padding');
                            $sqz_builderthreecolumns_solid_color = get_sub_field('builderthreecolumns_solid_color');
 if($sqz_builderthreecolumns_solid_color == '_dark') {
  $sqz_column_bgr = 'sqz-dark_bgr';
} else if($sqz_builderthreecolumns_solid_color == '_light') {
  $sqz_column_bgr = 'sqz-light_bgr';
} else {
  $sqz_column_bgr = 'sqz-plain_bgr';
}

   if( have_rows('benefits_list') ):  
?>

  <div class="sqz-section sqz-clear sqz-features_module <?php echo($sqz_column_bgr); ?> <?php echo($sqz_builder_threecolumns_column_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> <?php echo($promo_topspacingpadding.' '.$promo_bottomspacingpadding); ?>">
        <div class="container">
            <div class="row justify-content-center">
                 <?php  while( have_rows('benefits_list')):  the_row();
                          $sqz_three_columns_image = get_sub_field('three_benifts_icon');
                           $sqz_thre_coulmns_title = get_sub_field('three_benefits_title');
                            $sqz_three_columns_content = get_sub_field('three_benefits_text');

                              $threecolumnimage= wp_get_attachment_image_src($sqz_three_columns_image,'full');
       $threecolumnimage_2x= wp_get_attachment_image_src($sqz_three_columns_image,'full');

                            if($sqz_three_columns_image || trim($sqz_thre_coulmns_title) || trim($sqz_three_columns_content)){
                 ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 test 2">
                                    <div class="sqz-content sqz-module_content">
                                    <?php if($sqz_three_columns_image){  ?>
                                          <figure class="sqz-thumb">
                                              <img src="<?php echo($threecolumnimage['0']); ?>" alt="<?php echo($sqz_thre_coulmns_title); ?>" title="<?php echo($sqz_thre_coulmns_title); ?>" data-rjs="<?php echo($threecolumnimage_2x['0']); ?>">
                                          </figure>
                                    <?php } ?>
                                    <?php if(trim($sqz_thre_coulmns_title)){ ?>
                                       <h3><?php echo($sqz_thre_coulmns_title); ?></h3>
                                    <?php } ?>
                                    <p><?php echo($sqz_three_columns_content); ?></p>
                                        </div>
                                </div>
                            <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
  </div>    
<?php endif; ?>  
