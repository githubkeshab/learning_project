<?php
/**
 * The template for displaying Testimonial Slider
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */$button_builder_title = get_sub_field('button_builder_title');
$button_builder_content = get_sub_field('button_builder_content');
   $sqz_button_padding = get_sub_field('builder_button_column_padding');
 $sqz_builder_button_remove_top_space = get_sub_field('builder_button_remove_top_space');
                            $sqz_builder_button_remove_bottom_space = get_sub_field('builder_button_remove_bottom_space');
                            $buttontospace = $sqz_builder_button_remove_top_space==1 ? 'sqz-pt_0' : ''; // returns true
                           $buttonbuttomspace = $sqz_builder_button_remove_bottom_space==1 ? 'sqz-pb_0' : ''; // returns true
$sqz_solidsubfield = get_sub_field('builder_backgroundbutton_color_class',$posr->ID);
      
 if($sqz_solidsubfield == '_dark') {
  $sqz_cta_bgr_pagebuilder = 'sqz-dark_bgr';
} else if($sqz_solidsubfield == '_light') {
  $sqz_cta_bgr_pagebuilder = 'sqz-light_bgr';

} else {
  $sqz_cta_bgr_pagebuilder = 'sqz-plain_bgr';
}  
 if( have_rows('button_list') ): 
?>

<section id="sqz-button"class="sqz-button_module sqz-section <?php echo($sqz_button_padding); ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?>  <?php echo($buttontospace.''.$buttonbuttomspace.' '.$sqz_cta_bgr_pagebuilder); ?>">
         <div class="container">
               <div class="row justify-content-center">
                     <?php if(trim($button_builder_title) || trim($button_builder_content)){ ?>
                     <div class="<?php echo sqz_columns_narrow(); ?> text-center">
                            <div class="sqz-module_content">
     
                             <?php if(trim($button_builder_title)){ ?>
                                 <h2><?php echo($button_builder_title); ?></h2>
                           <?php } ?>
                        <?php if(trim($button_builder_content)){ ?>
                          <p><?php echo($button_builder_content); ?></p>
                        <?php }  ?>
                      </div>
                 <?php } ?>
          
                    <?php while( have_rows('button_list')): the_row();  
                                $sqz_builder_button_link = get_sub_field('builder_button_link');
                                $sqz_builder_button_color = get_sub_field('builder_button_color');
                    ?>
                          
                              <?php if($sqz_builder_button_link) : ?>
                                                    <a href="<?php echo $sqz_builder_button_link['url']; ?>" class="sqz-btn <?php echo($sqz_builder_button_color); ?>" <?php if($sqz_builder_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_builder_button_link['title']) { echo $sqz_builder_button_link['title']; } else { echo('Read More');} ?></a>
                              <?php endif; ?>
                          
                    <?php endwhile; ?>
                  </div>
                   </div>
    </div>
          
</section>
<?php endif; ?>
