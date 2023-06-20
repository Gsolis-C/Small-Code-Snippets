<?php

    /*Add a CSS file*/
    function addStyle() {
        wp_enqueue_style('css', get_template_directory_uri().'/css/css.css');
    }
    add_action('wp_head', 'addStyle');

    /*Add Javascript file */
    function addScript() {
        wp_enqueue_script('js', get_template_directory_uri().'/js/javascript.js');
    }
    add_action('wp_enqueue_scripts', 'addScript');

?>