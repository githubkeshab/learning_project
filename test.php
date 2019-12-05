<?php

  $sqz_bg_color =get_field('sqz_background_color');
  $sqz_media_image =get_field('sqz_media_image');
  $sqz_desc_text_side =get_field('sqz_description_text_side');
  $sqz_media_side =get_field('sqz_media_side');

  ?>

<div class="sqz-<?php echo esc_attr($block['align']); ?> ">
<div class="sqz-section sqz-image_text_block <?php echo( $sqz_bg_color); ?>">
   <div class="container-fluid">
      <div class="row no-gutters justify-content-end">
         <div class="col-12 col-lg-6 <?php echo( $sqz_media_side); ?>">
            <img src="<?php echo($sqz_media_image['url']); ?>" alt="<?php echo($sqz_media_image['alt']); ?>" >
         </div>
         <div class="col-12 col-lg-5 col-xl-4 align-self-center">
            <div class="sqz-content_wrap sqz-module_content">
               <div class="sqz-content_wrap sqz-module_content sqz-content_inner">
                <?php
                  echo $sqz_desc_text_side;
                ?>
                 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>