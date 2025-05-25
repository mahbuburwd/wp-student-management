<?php 



add_action('admin_init', function () {
    if (
        isset($_POST['student_name']) &&
        check_admin_referer('save_student_data')
    ) {
        // Sanitize input
        $name = sanitize_text_field($_POST['student_name']);
        $phone = sanitize_text_field($_POST['student_phone']);
        $email = sanitize_email($_POST['student_email']);
        $address = sanitize_textarea_field($_POST['student_address']);
        $batch = sanitize_text_field($_POST['student_batch']);

        // Here you can save to database or do something else
        // For now, just display a message
        add_action('admin_notices', function () {
            echo '<div class="notice notice-success is-dismissible"><p>Student added successfully!</p></div>';
        });

        // Example: save to custom table or post type, etc.
    }
});