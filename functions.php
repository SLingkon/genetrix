<?php

    function load_stylesheet(){


        
        wp_register_style( 'stylecss', get_template_directory_uri(). '/css/style.css', array(), 1, 'all' );
        wp_enqueue_script('stylecss');

        // wp_register_style( 'boot', get_template_directory_uri('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'), array(), 1, 'all' );
        // wp_enqueue_script('boot');



        
    }

    add_action( 'wp_enqueue_scripts', 'load_stylesheet' );

//  <link
//             rel="stylesheet"
//             href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
//         />

//loadscript
    function addjs(){


wp_register_script( 'jquery', get_template_directory_uri(). 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', '1', '1','1','1' );
wp_enqueue_script('jquery');

wp_register_script( 'cloud', get_template_directory_uri(). 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', '1', '1','1','1' );
wp_enqueue_script('cloud');

wp_register_script( 'ajax', get_template_directory_uri(). 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js', '1', '1','1','1' );
wp_enqueue_script('ajax');

wp_register_script( 'popper', get_template_directory_uri(). 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js', '1', '1','1','1' );
wp_enqueue_script('popper');

wp_register_script( 'jsdeliver', get_template_directory_uri(). 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', '1', '1','1','1' );
wp_enqueue_script('jsdeliver');

wp_register_script( 'customjs', get_template_directory_uri(). '/custom.js', '1', 'all' );
wp_enqueue_script('customjs');


    }

?>



