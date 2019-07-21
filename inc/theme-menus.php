<?php 
    function corlate_custom_menus(){
        register_nav_menus(array(
            'Main_menu'=>'Main menu',
        ));

    }
    add_action('init', 'corlate_custom_menus');

    function wpex_default_menu() {
        echo '<h2>Hi ! Set you menus </h2>';
    }
?>