<?php

/**
 * MVideo Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
	$sqz_top_space = get_field('sqz_top_space');
	$sqz_bottom_space = get_field('sqz_bottom_space');
  $sqz_bg_color = get_field('sqz_media_background_color');

  $sqz_title = get_field('sqz_title');
  $sqz_content = get_field('sqz_content');

  $sqz_vi_option = get_field('sqz_video_image_option');
  $sqz_button_link = get_field('sqz_button_link');
  $sqz_bg_image = get_field('sqz_background_image');
  if (get_field('sqz_overlay')) {
    $sqz_overlay = 'sqz-has_overlay';
  }
  else{
    $sqz_overlay = '';

  }

  $video = get_field('sqz_video_url'); // OEmbed Code

  $video_url = get_field('sqz_video_url', FALSE, FALSE); // URL


//echo "fclose(handle)";
?>

<section class="sqz-video sqz-<?php echo esc_attr($block['align']); ?> <?php  echo $sqz_top_space.' '.$sqz_bottom_space ;?> sqz-section sqz-bgr_block sqz-has_bgr sqz-bgr_cover <?php echo($sqz_overlay); ?> ">
  <?php if($sqz_bg_image) { ?>
        <img src="<?php echo $sqz_bg_image['url']; ?>" alt="<?php echo($sqz_title ); ?>">
      <?php } ?>  
  <div class="sqz-section sqz-exlarge_padding <?php if($sqz_bg_image) { echo ('sqz-content-wrap'); }?>">
        <div class="container">
           <div class="row justify-content-center sqz-module_content">
             <?php if($sqz_content){ ?>
                   <div class="col-12 col-sm-10 col-md-8 align-self-center">
                          <?php if(trim($sqz_title )){ ?>
                               <h2><?php echo($sqz_title ); ?></h2>
                         <?php } ?>
 
                        <?php echo($sqz_content); ?> 

                         <?php if($sqz_vi_option == 'video_link'){  ?>
                            <?php if ($video_url){?>
                               <a class="sqz-play" data-fancybox href="<?php echo $video_url; ?>?autoplay=1&modestbranding=1&showinfo=0&rel=0" data-featherlight="iframe" data-toggle="modal" data-target="#homeVideo" class="img-responsive"><i class="sqz-play_icon"></i>
                               </a>
                             <?php  } else{ }?>

                          <?php } else { ?>

                          <?php if($sqz_button_link) : ?>
                              <a href="<?php echo $sqz_home_builder_button_link['url']; ?>" class="sqz-btn sqz-btn_primary" <?php if($sqz_button_link['target'] == "_blank"){ echo('target="_blank"'); } ?>><?php if($sqz_button_link['title']) { echo $sqz_button_link['title']; } else { echo('Learn More');} ?></a>
                              <?php endif; ?>
                          <?php } ?>
                    </div>
               <?php } ?>
     
            
              

           </div>
        </div>
          </div>
  <script type="text/javascript">
    jQuery(document).ready( function(){
       jQuery('[data-fancybox]').fancybox({
      youtube : {
          controls : 0,
          showinfo : 0
      },
      vimeo : {
          color : 'f00'
      }
  });
    });
  </script>       
        
  </section>
<?php
/*echo $sqz_vi_option;
  pr($video);*/