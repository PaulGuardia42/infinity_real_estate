<?php 

    function infinity_scripts(){



        // Main Stylesheet
        // You put the normalize and google font within the dependencies array because you want them to run first before then running your stylesheet
        wp_enqueue_style('style', get_stylesheet_uri(), array(),'1.0.0');
    }
    add_action('wp_enqueue_scripts', 'infinity_scripts');

?>