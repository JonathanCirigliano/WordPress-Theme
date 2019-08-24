<?php
    

    // Nav Walker Registration
    require_once('wp_bootstrap_navwalker.php');

    // Theme Support
    function wp_theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('menus');
        // Nav Menus
        register_nav_menus(array(
            'primary' => ('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'wp_theme_setup');

    // Excerpt Length Control
    function set_excerpt_length(){
        return 60;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    // Widget Locations
    function wp_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget'  => '<div class="p-4">',
            'after_widget'  => '</div>',
            'before_title'  =>  '<h4>',
            'after_title'  =>  '</h4>'
        ));
    }

    add_action('widgets_init', 'wp_init_widgets');

    