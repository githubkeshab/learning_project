<?php

/**
 * Main Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'mainsliders-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'mainsliders';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
echo "<pre>";
// Load values and assign defaults.


// check if the repeater field has rows of data
if( have_rows('_slider') ):

    // loop through the rows of data
    while ( have_rows('_slider') ) : the_row();

        // display a sub field value
        $_slider_title = get_sub_field('_slider_title') ?: 'Your mainsliders title here...';
        $_slider_image = get_sub_field('_slider_image') ?: 1024;
        $mobile_slider_image = get_sub_field('mobile_slider_image')?: 295;
        $sqz_columns_overlay_destop = get_sub_field('sqz_columns_overlay_destop');
        $sqz_columns_overlay_mobile = get_sub_field('sqz_columns_overlay_mobile');
        $_slider_description = get_sub_field('_slider_description')?: 'Your mainsliders descripition  here...';
        $_slider_button_link = get_sub_field('_slider_button');

    endwhile;

else :

    // no rows found

endif;

print_r($sqz_columns_overlay_destop);
print_r($sqz_columns_overlay_mobile);
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <p class="mainsliders-text"><?php echo $_slider_title; ?></p>
    <blockquote class="mainsliders-blockquote">
        <p class="mainsliders-author"><?php echo $_slider_description; ?></p>
    </blockquote>
        <p class="mainsliders-role"><?php echo $sqz_columns_overlay_destop[0]; ?></p>
        <p class="mainsliders-role"><?php echo $sqz_columns_overlay_mobile[0]; ?></p>

    <div class="mainsliders-image">
            <?php echo wp_get_attachment_image( $_slider_image, 'medium_large' ); ?>
    </div>

       <div class="mainsliders-image">
            <?php echo wp_get_attachment_image( $mobile_slider_image, 'thumbnail' ); ?>
    </div>
    <!-- <style type="text/css">
        #<?php /*echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color*/; ?>;
        }
    </style> -->
</div>