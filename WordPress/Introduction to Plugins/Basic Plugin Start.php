<?php
/**
 * Plugin Name: Name
 * Description: Project Description
 * Version: 0.0
 * Author: Your_name
 */

add_action('admin_menu', 'sidebar_display');
function sidebar_display(){
    add_menu_page( 'Title Tag', 'Menu Title', 'manage_options', 'your-URL', 'display' );
}
fuction display(){
	echo("<h1>Hello World!</h1>")
}
?>