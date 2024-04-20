<?php
    /*****************************************************************************/
    /** THEME SUPPORT **/
    /*****************************************************************************/

    add_theme_support('post-thumbnails');

    /*****************************************************************************/
    /** THEME SCRIPTS **/
    /*****************************************************************************/
    
    /*
     *  Add theme style sheets
     */
    function add_theme_styles() {
        
        wp_register_style('style', get_stylesheet_uri());
        wp_enqueue_style('style');
    }
    add_action('wp_enqueue_scripts','add_theme_styles');

    /*
     *  Add theme JS scripts
     */
    function add_theme_scripts() {

        wp_register_script('main',  get_template_directory_uri().'/assets/js/main.js', null, null, true);
        wp_enqueue_script('main');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');