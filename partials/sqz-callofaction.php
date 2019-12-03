<?php
/**
 * The template for displaying Call of action
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php if ( !is_front_page() && is_home() ) {
 $callid=get_option('page_for_posts', true);
} else {
  $callid=$post->ID;

} 

 
?>
<?php  $add_image=get_post_meta($callid,'add_image_page',true);


$add_text=get_post_meta($callid,'add_text_page',true); 
$add_title=get_post_meta($callid,'add_title',true); 
 if($add_image || trim($add_text) || trim($add_title)) { 
  $add_image=get_post_meta($callid,'add_image_page',true); 
       $callon_image= wp_get_attachment_image_src($add_image,'calloff_thumb');
       $callon_image_2x= wp_get_attachment_image_src($add_image,'calloff_thumb_2x');
          $add_text=get_post_meta($callid,'add_text_page',true); 
       
           $button_link=get_post_meta($callid,'button_link',true); 
             $cta_content=get_post_meta($callid,'cta_content',true); 
        $sqz_cta_solid_color = get_field('cta_solid_color'); 
 if($sqz_cta_solid_color == '_dark') {
  $sqz_cta_bgr = 'sqz-dark_bgr';
   $sqz_cta_btn = 'sqz-btn_primary';
  } else if($sqz_cta_solid_color == '_primary') {
$sqz_cta_bgr = 'sqz-primary_bgr';
  $sqz_cta_btn = 'sqz-btn_dark';
} else if($sqz_cta_solid_color == '_light') {
  $sqz_cta_bgr = 'sqz-light_bgr';
    $sqz_cta_btn = 'sqz-btn_dark';
} else {
  $sqz_cta_bgr = 'sqz-plain_bgr';
    $sqz_cta_btn = 'sqz-btn_dark';
}  
     
} else {
  $add_image=get_field('add_image_option','option'); 
       
          $add_text=get_field('add_text_option','option'); 
           $button_link=get_field('button_link_option','option'); 
         
             $add_title=get_field('cta_title_option','option');
              $cta_content=get_post_meta('cta_content_option','option'); 
          $callon_image= wp_get_attachment_image_src($add_image,'calloff_thumb');
       $callon_image_2x= wp_get_attachment_image_src($add_image,'calloff_thumb_2x');

        $sqz_cta_solid_color = get_field('cta_solid_color_option','option'); 
if($sqz_cta_solid_color == '_primary') {
  $sqz_cta_bgr = 'sqz-primary_bgr';
    $sqz_cta_btn = 'sqz-btn_dark';
 
} else if($sqz_cta_solid_color == '_dark') {
  $sqz_cta_bgr = 'sqz-dark_bgr';
   $sqz_cta_btn = 'sqz-btn_primary';
} else if($sqz_cta_solid_color == '_light') {
  $sqz_cta_bgr = 'sqz-light_bgr';
     $sqz_cta_btn = 'sqz-btn_dark';

} else {
  $sqz_cta_bgr = 'sqz-plain_bgr';
    $sqz_cta_btn = 'sqz-btn_dark';
}  
}


      if($add_image || trim($add_text)){    
   
              
     ?>
  
        <section id="sqz-cta" class="sqz-section sqz-has_bgr sqz-call_action <?php echo($sqz_cta_bgr); ?>">
            <div class="container-fluid">
              <div class="row no-gutters justify-content-end">
              <?php if($add_image) {  ?>
              <div class="col-12 col-lg-6 order-lg-12">
                    <img src="<?php echo($callon_image['0']); ?>">
              </div>
              <?php } ?>
              <div class="col-12 <?php if($add_image) { echo('col-lg-5 col-xl-4'); } else { echo(' col-lg-8'); } ?> align-self-center">
                  <div class="sqz-section sqz-medium_padding sqz-module_content"> 
                  <h2 class="sqz-section_title"><?php echo($add_text); ?></h2>
                    <?php if(trim($cta_content)){  ?>
                       <p><?php echo($cta_content); ?></p>
                    <?php } ?>
               
                 <?php if($button_link) : ?>
                                                    <a href="<?php echo $button_link['url']; ?>" class="sqz-btn <?php echo($sqz_cta_btn); ?>" <?php if($button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($button_link['title']) { echo $button_link['title']; } else { echo('Read More');} ?></a>
                                                <?php endif; ?>
                    </div>
                  </div> 
                </div>
              </div>
      
    </section>
<?php } ?>