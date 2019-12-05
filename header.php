<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SQZ_Toolbox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="SKYPE_TOOLBAR" CONTENT="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php
if(is_front_page()) {
  bloginfo( 'name' )?><?php //bloginfo('description');
} else {
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;
  wp_title( '-', true, 'right' );
}
  ?></title>
	<?php wp_head(); ?>
    <script>
$=jQuery.noConflict();
  !function(){
    // configure legacy, retina, touch requirements @ conditionizr.com
//    conditionizr()
  }()
</script>
</head>

<body <?php body_class(); ?>>
<header class="sqz-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-auto">
            	<div class="sqz-logo">
                <?php if(is_front_page()) { echo '<h1>'; } else { echo '<h2>'; }  ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <img src="<?php the_field('_logo', 'option'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
                <?php if(is_front_page()) { echo '</h1>'; } else { echo '</h2>'; }  ?>
                </div>
            </div>
            <div class="col-12 col-lg">
                <button class="sqz-toggle_menu"><span class="sqz-menu_bars"></span></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-nav','container_id' => 'sqz-main_navigation', 'container_class'=>'sqz-main_navigation', 'container'=>'nav' ) ); ?>
            </div>
        </div>
    </div>
</header>
