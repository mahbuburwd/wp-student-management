<?php
// Hook to add admin menu
add_action('admin_menu', 'dii_admin_pages');

function dii_admin_pages() {
    // Add top-level menu
    add_menu_page(
        'Students Section',        // Page title
        'Students Section',        // Menu title
        'manage_options',          // Capability
        'dii-students',            // Menu slug
        'dii_all_students',        // Callback function
        'dashicons-admin-users',   // Menu icon
        30                         // Menu position
    );

    // Add submenu: All Students
    add_submenu_page(
        'dii-students',            // Parent slug
        'All Students',            // Page title
        'All Students',            // Menu title
        'manage_options',          // Capability
        'dii-students',            // Menu slug
        'dii_all_students'         // Callback function
    );

    // Add submenu: Add Student
    add_submenu_page(
        'dii-students',            // Parent slug
        'Add Student',             // Page title
        'Add Student',             // Menu title
        'manage_options',          // Capability
        'dii-add-students',        // Menu slug
        'dii_add_student'          // Callback function
    );
}

require_once(__DIR__.'/all-students.php');

require_once(__DIR__ . '/add-student.php');
