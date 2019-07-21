<?php
     add_theme_support( 'post-formats', array('aside', 'Gallery', 'audio', 'video') );
     add_theme_support( 'post-thumbnails' );

     add_image_size('slide-image', 1024, 350, true);
     add_image_size('portfolio_thumb', 700, 700, true);
?>