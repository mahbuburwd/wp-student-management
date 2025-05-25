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
