</<?php 
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

?>
<div class="sqz-accordion" id="accordion1" role="tablist" aria-multiselectable="true">
    <div class="sqz-acc_panel text-left">
      <div class="sqz-acc_header" id="heading01">
        <h3 data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01" class="collapsed"> 
              The Workout 
        </h3>
      </div>
      <div id="collapse01" class="collapse" aria-labelledby="heading01" data-parent="#accordion1">
        <div class="sqz-acc_body sqz-entry_content">
            <p><strong>I’ve never done reformer pilates before, is that ok? </strong><br>Absolutely. Our classes are newbie friendly and designed to allow everyone to work out at their own pace. If it’s your first time, we recommend an intro class (see below).</p><p><strong>I’m new, should I book an intro class?</strong><br>Our free 20-minute&nbsp;<a href="/classes-and-pricing/">Intro</a>&nbsp;classes are not compulsory, but if you’re new to reformer pilates, you’ll get to meet your trainer and ask any burning questions. You’ll also learn how to use your reformer and adjust your springs to get the most out of each session. Make sure you book the&nbsp;class directly following, as the Vive Intro class is a free instructional class, not a workout.</p><p><strong>
                </strong>
            </p>
        </div>    
	  </div>
    </div>
</div>