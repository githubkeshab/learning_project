<?php

/*
**************************Blocks register*******************************
*/



function pr($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/******************************blocks category***********************************/
add_filter( 'block_categories', 'squeeze_block_category', 10, 2);
function squeeze_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'sqz-blocks',
                'title' => __( 'Squeeze Blocks Box Width', 'sqz-blocks' ),
            ),
            array(
                'slug' => 'sqz-blocks-full',
                'title' => __( 'Squeeze Blocks Full width', 'sqz-blocks-full' ),
            ),        )
    );
}

