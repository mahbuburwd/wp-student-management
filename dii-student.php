<?php 
/**
 * Plugin name: Dii Student
 * Author: Mahbubur Rahman
 * Description: This is my first student management plugin
 */

 if(!defined('ABSPATH')){
    exit;
 }
define('DII_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

require_once DII_PLUGIN_PATH . 'inc/admin-menu.php';
require_once DII_PLUGIN_PATH. 'inc/admin-scripts.php';

// register activation hook
register_activation_hook(__FILE__, 'dii_student_create_table');



// register deactivation hook

register_deactivation_hook( __FILE__, 'dii_table_removed');


// all active and deactive hooks pluign

require_once DII_PLUGIN_PATH.'inc/wp-hooks.php';