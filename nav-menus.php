<?php
    wp_nav_menu(array(
        'theme_location'=>'Main_menu',
        'menu_class'=>'nav navbar-nav',
        'fallback_cb'=>'wpex_default_menu',
    ));
?>
