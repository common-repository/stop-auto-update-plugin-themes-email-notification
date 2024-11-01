<?php
/*
* Plugin Name: Stop Auto Update Plugin & Themes Email Notification
* Description: Just install this plugin and all plugin and theme auto update email notifications will stop.
* Version: 1.1
* Author: Nikos Kavvadas
* Author URI: https://mylefkada.eu/
*/

// Disable plugins auto-update email notifications .
add_filter( 'auto_plugin_update_send_email', '__return_false' );
 
// Disable themes auto-update email notifications.
add_filter( 'auto_theme_update_send_email', '__return_false' );
  
  
?>