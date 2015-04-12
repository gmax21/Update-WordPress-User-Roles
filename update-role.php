<?php
/*
Plugin Name: Update Roles - Replace missing roles in multisite.
Plugin URI: https://premium.wpmudev.org
Missing your roles in your website? This plugin will add the default roles to your website if they are missing. Remove or at least deactivate it when your done so that it doesn't keep running. :)
Author: Timothy Bowers
Author URI: https://auroral.co.uk
Version: 1.0
*/
 
require_once(ABSPATH . '/wp-admin/includes/schema.php');
 
add_action('admin_init','tkb_update_roles');
function tkb_update_roles(){    
	populate_roles();
}