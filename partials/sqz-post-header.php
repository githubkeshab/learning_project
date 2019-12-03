<header class="sqz-entry_header">
	<?php $sqz_sub_title = get_field('_sub_title'); 
				if($sqz_sub_title) {
					$sqz_page_title = $sqz_sub_title;
				}else{
					$sqz_page_title = get_the_title();
				}
			if ( is_single() ) :
			?>
            <h1 class="sqz-entry_title"><?php echo $sqz_page_title; ?></h1>
		<?php else : ?>
        	<h2 class="sqz-entry_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo $sqz_page_title; ?></a></h2>
		<?php endif; ?>
</header><!-- .sqz-entry_header -->