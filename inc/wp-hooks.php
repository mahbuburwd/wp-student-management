<?php 

function dii_student_create_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'dii_students';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(100) NOT NULL,
        address varchar(100) NOT NULL,
        batch varchar(100) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($sql);
}



// deactivation hook

function dii_table_removed(){
    global $wpdb;

    $table_name = $wpdb->prefix.'dii_students';

       $sql = "DROP TABLE IF EXISTS $table_name;";

    $wpdb->query($sql);  
}