<?php
	$sqz_social_share = get_field('_social_media', 'option');
	$thumb_image= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'thumbnail');
?>
<?php if($sqz_social_share) : ?>

<nav class="sqz-social">
  <ul class="sqz-clearfix">
    
    <?php if( in_array('_twitter', $sqz_social_share) ) : ?>
    <li><a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
    <?php endif; ?>
    <?php if( in_array('_facebook', $sqz_social_share) ) :?> 
    <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
    <?php endif; ?>
   
    
  </ul>
</nav>
<?php endif; ?>
