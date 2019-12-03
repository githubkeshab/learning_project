  <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
  <div class="sqz-entry_footer sqz-clearfix">
      <?php 
    $sqz_show_date = get_field('_show_cateogry', 'option');
    $sqz_show_category = get_field('_show_cateogry', 'option');
    
    ?>
      
      
        <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'squeeze' ) );
        if ( $categories_list) :
        ?>   
       
        <div class="sqz-item sqz-cateogry">  
        
        <?php // printf( __( '%1$s', 'squeeze' ), $categories_list ); ?>
        
        <?php $i=0;
    foreach((get_the_category()) as $category) : 
    
    $sqz_page_link = get_field('page_link','category_'.$category->term_id);
          if($sqz_page_link){
           $link= $sqz_page_link;

          } else {
             $link=get_term_link($category);
          } 
    ?>
      <?php //if($i!=0) {echo ', ';}?><a href="<?php echo $link; ?>"><?php echo $category->cat_name;?></a>
        <?php $i++;
endforeach; 
    ?>
        
        </div>
      <?php endif; // End if categories ?>
          
         <?php if($sqz_show_date): ?>
        <div class="sqz-item sqz-posted_on">
    <?php squeeze_posted_on(); ?>
    </div>
        <?php endif; ?> 
         
  </div>        
  <?php endif; ?>