 <?php if ( is_active_sidebar( 'subscribes_sidebar' ) ) : ?>
 	<section id="sqz-subscribes" class="sqz-section sqz-medium_padding text-center">
 		<div class="container">
 			<div class="row justify-content-center">
                <div class="<?php echo sqz_columns_narrow(); ?>"><?php dynamic_sidebar( 'subscribes_sidebar' ); ?></div>
 				
 			</div>
 		</div>
 	</section>
 <?php endif; ?>