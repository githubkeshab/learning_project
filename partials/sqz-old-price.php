<!-- #start introductions pack block -->
      <?php $sqz_ip_title = get_field('_ip_title');
      if(trim($sqz_ip_title) || ( have_rows('_ip_pack_list'))){ 
        ?>
        <section id="intro-packs" class="sqz-section sqz-has_bgr sqz-bgr_cover sqz-large_padding" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pricing-introductory-packs-bg.jpg);">
          <div class="container">
            <?php if(trim($sqz_ip_title)){ ?>
            <h2><?php echo($sqz_ip_title); ?></h2>
            <?php } ?>
            <?php if( have_rows('_ip_pack_list') ): ?>
              <div class="row">
                <?php   while ( have_rows('_ip_pack_list') ) : the_row();
                $sqz_ip_pack_title = get_sub_field('_ip_pack_title');
                $sqz_ip_pack_sub_title = get_sub_field('_ip_pack_sub_title');
                $sqz_ip_pack_caption = get_sub_field('_ip_pack_caption');
                $sqz_ip_pack_url = get_sub_field('_ip_pack_url');
                $sqz_ip_pack__target = get_sub_field('_ip_pack__target');
                $sqz_ip_pack_pricing = get_sub_field('_ip_pack_pricing');
                if($sqz_ip_pack_title || $sqz_ip_pack_sub_title || $sqz_ip_pack_caption){ ?>

                <div class="col-xs-12 col-sm-6">
                <div class="sqz-pricing_box text-center">
                   <h3>
                     <?php if(trim($sqz_ip_pack_title)){ ?>
                     <?php echo($sqz_ip_pack_title); ?>
                     <?php } ?>
                     <?php if(trim($sqz_ip_pack_sub_title)){ ?>
                     <span><?php echo($sqz_ip_pack_sub_title); ?></span>
                     <?php } ?>
                   </h3>
                   <?php if(trim($sqz_ip_pack_caption)){ ?>
                   <p><?php echo($sqz_ip_pack_caption); ?></p>
                   <?php } ?>

                   <div class="price"><strong><?php if($sqz_ip_pack_pricing){ echo('$'.$sqz_ip_pack_pricing); } else { echo('$0'); } ?></strong></div>
                   <?php if(trim($sqz_ip_pack_url)){ ?>
                   <a class="sqz-btn sqz-btn_dark" href="<?php echo($sqz_ip_pack_url); ?>" <?php if($sqz_ip_pack__target) { echo('target="_blank"'); } ?>><?php the_sub_field('_ip_button_label'); ?></a>
                 </div>
                 <?php } ?>
               </div>

               <?php } endwhile;  ?>
             </div>
           <?php endif; ?>
         </div>
       </section>
       <?php  } ?>
       <!-- #end introductions pack block -->
       <!-- monthly pack block -->
       <?php $sqz_mp_title = get_field('_mp_title');
       if(trim($sqz_mp_title) || ( have_rows('_mp_pack_list'))){ 
        ?>
        <section id="intro-monthpacks" class="sqz-section sqz-large_padding">
          <div class="container">
            <?php if(trim($sqz_mp_title)){ ?>
            <h2><?php echo($sqz_mp_title); ?></h2>
            <?php } ?>
            <?php if( have_rows('_mp_pack_list') ): ?>
              <div class="row">
                <?php   while ( have_rows('_mp_pack_list') ) : the_row();
                $sqz_mp_pack_title = get_sub_field('_mp_pack_title');
                $sqz_mp_pack_mexpire = get_sub_field('_mp_pack_mexpire');
                $sqz_mp_pack_url = get_sub_field('_mp_pack_url');
                $sqz_mp_pack_target = get_sub_field('_mp_pack_target');
                $sqz_mp_pack_pricing = get_sub_field('_mp_pack_pricing');
                if($sqz_mp_pack_title){ ?>

                <div class="col-xs-12 col-sm-6">
                  <div class="sqz-pricing_box text-center">
                   <?php if(trim($sqz_mp_pack_title)){ ?>
                   <h3><?php echo($sqz_mp_pack_title); ?></h3>
                   <?php } ?>
                   <?php if(trim($sqz_mp_pack_mexpire)){ ?>
                   <p><?php echo($sqz_mp_pack_mexpire.'  month expiry'); ?></p>
                   <?php } ?>

                   <div class="price"><strong><?php if($sqz_mp_pack_pricing){ echo('$'.$sqz_mp_pack_pricing); } else { echo('$0'); } ?></strong></div>
                   <?php if(trim($sqz_mp_pack_url)){ ?>
                   <a class="sqz-btn" href="<?php echo($sqz_mp_pack_url); ?>" <?php if($sqz_mp_pack_target) { echo('target="_blank"'); } ?>><?php the_sub_field('_mp_button_label'); ?></a>
                   <?php } ?>
                 </div>
               </div>

               <?php } endwhile;  ?>
             </div>
           <?php endif; ?>
         </div>
       </section>
       <?php  } ?>
       <!-- #end monthly pack block -->
       <!-- yearly pack block -->
       <?php $sqz_yp_title = get_field('_yp_title');
       if(trim($sqz_yp_title) || ( have_rows('_yp_pack_list'))){ 
        ?>
        <section id="intro-yearlypacks" class="sqz-section sqz-large_padding sqz-pt_0">
          <div class="container">
            <?php if(trim($sqz_yp_title)){ ?>
            <h2><?php echo($sqz_yp_title); ?></h2>
            <?php } ?>
            <?php if( have_rows('_yp_pack_list') ): ?>
              <div class="row">
                <?php   while ( have_rows('_yp_pack_list') ) : the_row();
                $sqz_yp_pack_title = get_sub_field('_yp_pack_title');
                $sqz_yp_pack_mexpire = get_sub_field('_yp_pack_mexpire');
                $sqz_yp_pack_url = get_sub_field('_yp_pack_url');
                $sqz_yp_pack_target = get_sub_field('_yp_pack_target');
                $sqz_yp_pack_pricing = get_sub_field('_yp_pack_pricing');
                if($sqz_yp_pack_title){ ?>

                <div class="col-xs-12 col-sm-6">
                  <div class="sqz-pricing_box text-center">
                   <?php if(trim($sqz_yp_pack_title)){ ?>
                   <h3><?php echo($sqz_yp_pack_title); ?></h3>
                   <?php } ?>
                   <?php if(trim($sqz_yp_pack_mexpire)){ ?>
                   <p><?php echo($sqz_yp_pack_mexpire.'  year expiry'); ?></p>
                   <?php } ?>

                   <div class="price"><strong><?php if($sqz_yp_pack_pricing){ echo('$'.$sqz_yp_pack_pricing); } else { echo('$0'); } ?></strong></div>
                   <?php if(trim($sqz_yp_pack_url)){ ?>
                   <a class="sqz-btn" href="<?php echo($sqz_yp_pack_url); ?>" <?php if($sqz_yp_pack_target) { echo('target="_blank"'); } ?>><?php the_sub_field('_yp_button_label'); ?></a>
                   <?php } ?>
                 </div>
               </div>

               <?php } endwhile;  ?>
             </div>
           <?php endif; ?>
         </div>
       </section>
       <?php  } ?>
       <!-- #end yearly pack block -->