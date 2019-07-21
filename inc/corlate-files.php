<?php
    function my_function_name(){
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '2.1.3', 'all' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.0.3', 'all' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.1', 'all' );
        wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '2.2.1', 'all' );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all' );

        
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), '2.1.3', true);
        wp_enqueue_script( 'prettyPhoto-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js' , array('jquery'), '1.0', true);
        wp_enqueue_script( 'owl.carouse-js', get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery'), '1.0', true);
        wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/jquery.isotope.min.js' , array('jquery'), '1.0', true);
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' , array(), '1.0', true);
        
    }

    add_action('wp_enqueue_scripts', 'my_function_name')
?>