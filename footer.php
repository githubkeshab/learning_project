</div>
<footer id="sqz-footer" class="sqz-section sqz-dark_color">
 <?php 
if ( !is_front_page() && is_home() ) {
 $id=get_option('page_for_posts', true);
} elseif(is_category()){
	$id=get_option('page_for_posts', true);
} else {
  $id=$post->ID;

} 

$sqz_cta_show = get_field('cta_show',$id);  	
   if($sqz_cta_show  == 1){
 get_template_part('partials/sqz', 'callofaction'); 
   }
 ?>
 <?php get_template_part('partials/sqz', 'testimonial');?>
        <!-- # Instragram Feeds start -->
        <?php get_template_part('partials/sqz', 'instrgram-feeds'); ?>
        <?php get_template_part('partials/sqz', 'social'); ?>
        <?php get_template_part('partials/sqz', 'subscribes'); ?>
        
        
        
        <div class="sqz-footer_bottom text-md-center">
           <div class="container-fluid">
               <div class="row">
                <hr>

                <div class="col-12 col-lg-8 text-lg-left">
                        <p class="sqz-copyright">&copy; <?php echo esc_attr(get_bloginfo('name', 'display')); ?></p>
                  <?php wp_nav_menu( array( 'theme_location' => 'footer-nav','menu_id' => 'sqz-footer_navigation', 'menu_class'=>'sqz-footer_navigation', 'container'=>'nav' ) ); ?></div>
               <div class="col-12 col-lg-4  text-lg-right"> <span class="sqz-site_by">Site by <a href="//squeezecreative.com.au" target="_blank">Squeeze Creative</a></span></div>
                </div>
            </div>
        </div>

    </footer>
</div><!--//#sqz-page-->
<?php wp_footer(); ?>

</body>
</html>