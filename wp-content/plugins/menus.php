<?php
/*
Plugin Name: Custom Menus
Plugin URI: lindsaypeters.dev
Description: A place to register custom menus for the Daily 49er Special Issues
Author: Lindsay Peters
Version: 1.0
Author URI: 
*/
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

