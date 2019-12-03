<?php $sqz_show_page_title = get_field('_hide_page_title');
			if($sqz_show_page_title == ''):
		?>
        <header class="sqz-page_header">
        	<div class="container">
        	<?php $sqz_sub_title = get_field('_sub_title'); 
				if($sqz_sub_title) {
					$sqz_page_title = $sqz_sub_title;
				}else{
					$sqz_page_title = get_the_title();
				}
			?>
        	<h1 class="sqz-page_title"><?php echo $sqz_page_title; ?></h1>
            </div>
        </header>
        <?php endif; ?>