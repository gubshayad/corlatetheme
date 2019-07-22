<?php
    function corlate_custom_post(){
        register_post_type( 'slide', array(
            'public' => true,
            'label'  => 'Slides',
            'menu_icon'  => 'dashicons-images-alt2',
            'labels'=>array(
                'name'=>'Slides',
                'add_new'=>'add new slide',
            ),
            'supports'=>array('title','editor','excerpt','thumbnail'), 
        ));
        register_post_type( 'feature', array(
            'public' => true,
            'label'  => 'feature',
            'labels'=>array(
                'name'=>'features',
                'add_new'=>'add new features',
            ),
            'supports'=>array('title','editor','excerpt','custom-fields','page-attributes'), 
        ));
        register_post_type( 'portfolio', array(
            'public' => true,
            'label'  => 'portfolio',
            'labels'=>array(
                'name'=>'portfolios',
                'add_new'=>'add new portfolio',
            ),
            'supports'=>array('title','editor','excerpt','thumbnail','page-attributes'), 
        ));
        register_post_type('service', array(
            'public'=> true,
            'label'=>'service',
            'labels'=>array(
                'name'=>'services',
                'add_new'=>'add new service',
            ),
            'supports'=>array('title','editor','excerpt','thumbnail','page-attributes'),
        ));
        register_post_type('video', array(
            'public'=> true,
            'label'=>'service',
            'labels'=>array(
                'name'=>'services',
                'add_new'=>'add new service',
            ),
            'supports'=>array('title','editor','excerpt','thumbnail','page-attributes'),
        ));
    }
    add_action('init', 'corlate_custom_post');
?>