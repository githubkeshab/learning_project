<?php
/**
 * The template for displaying team
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */
?>
<?php //$category_list = get_field('sqz_category_list',$post->ID);
$fallback_default_image = get_field('fallback_default_image','option');
$args_latestpost = array(
 'post_type' =>'post',
 'posts_per_page' =>'3',
 'order' => 'ASC',
 'orderby' => 'menu_order'
// 'cat' =>$category_list->term_id

 );
$wp_query_latestpost = new WP_Query(  $args_latestpost );
if( $wp_query_latestpost->have_posts() )
{

  ?>
  <div id="sqz-blog_home" class="sqz-section sqz-entry_content sqz-medium_padding">
    <div class="container">
        <div class="sqz-section_header text-center">
            <h2 class="sqz-section_title">Blog</h2>
            <h4 class="sqz-section_subtitle">Latest news &amp; articles</h4>
        </div>
   <div class="sqz-newslist sqz-hideshow">
    <div class="row">
      <?php   while( $wp_query_latestpost->have_posts() )
      {
        $wp_query_latestpost->the_post();

        $post_image= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'hero_image_thumb');
  $post_image_2x= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'hero_image_thumb_2x');
        ?> 
        <div class="col-xs-12 col-sm-4">

         <div class="sqz-single_newspost sqz-equal_height">
          
           <figure class="sqz-thumb">
            <?php if($post_image){ ?>
                      <img src="<?php echo $post_image['0']; ?>" alt="<?php echo $sqz_hero_title; ?>" data-rjs="<?php echo($post_image_2x['0']); ?>"/>
                       <?php } else { ?>
                            <?php if($fallback_default_image){ ?>
                              <img src="<?php echo($fallback_default_image); ?>" alt="<?php echo $sqz_hero_title; ?>">
                            <?php } else {  ?>
                                 <img src="<?php echo(get_template_directory_uri()); ?>/images/placeholder-toolbox.png" alt="<?php echo $sqz_hero_title; ?>">
                            <?php } ?>
                        <?php } ?>
                    </figure>
           
          <div class="sqz-news_details">
            <h4><a href="<?php echo(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
         
            <a href="<?php echo(get_permalink($post->ID)); ?>">Read more</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  <div class="col-sm-12 text-center">
   <a href="<?php echo(get_the_permalink(get_option('page_for_posts', true))); ?>" class="sqz-btn">View Blog</a>
 </div>
 
</div>
</div>
<?php } wp_reset_query();  ?>