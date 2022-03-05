<?php 

    function infinity_scripts(){



        // Main Stylesheet
        // You put the normalize and google font within the dependencies array because you want them to run first before then running your stylesheet
        wp_enqueue_style('style', get_stylesheet_uri(), array(),'1.0.0');
    }
    add_action('wp_enqueue_scripts', 'infinity_scripts');



//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
?>