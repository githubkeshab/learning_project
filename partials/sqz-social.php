<?php
	$sqz_facebook = get_field('_facebook', 'option');
	$sqz_twitter = get_field('_twitter', 'option');
	$sqz_instagram = get_field('_instagram', 'option');
	//$sqz_youtube = get_field('_youtube', 'option');
    //    $sqz_linkden = get_field('sqz_linkden', 'option');
   // $sqz_google_plus = get_field('sqz_google_plus', 'option');
    $sqz_pinterest = get_field('pinterest', 'option');

?>
<?php if($sqz_facebook || $sqz_twitter || $sqz_instagram  || $sqz_pinterest) : ?>

<nav class="sqz-social">
   
  <ul> 
    <?php if($sqz_instagram) : ?>
    <li><a href="<?php echo $sqz_instagram; ?>" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
    <?php endif; ?>
    <?php if($sqz_twitter) : ?>
    <li><a href="<?php echo $sqz_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <?php endif; ?>
    <?php if($sqz_facebook) : ?>
    <li><a href="<?php echo $sqz_facebook; ?>" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
    <?php endif; ?> 
   
    <?php if($sqz_pinterest) : ?>
    <li><a href="<?php echo $sqz_pinterest; ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    <?php endif; ?>
    
  </ul>
</nav>
<?php endif; ?>
