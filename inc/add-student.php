<?php 
function dii_add_student() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'dii_students';

    // Handle form submission
    if (
        isset($_POST['student_name']) &&
        check_admin_referer('save_student_data')
    ) {
        $name    = sanitize_text_field($_POST['student_name']);
        $phone   = sanitize_text_field($_POST['student_phone']);
        $email   = sanitize_email($_POST['student_email']);
        $address = sanitize_textarea_field($_POST['student_address']);
        $batch   = sanitize_text_field($_POST['student_batch']);

        $wpdb->insert($table_name, [
            'name'    => $name,
            'phone'   => $phone,
            'email'   => $email,
            'address' => $address,
            'batch'   => $batch,
        ]);

        echo '<div class="notice notice-success is-dismissible"><p>Student added successfully!</p></div>';
    }

    ?>
    <div class="wrap">
        <h1>Add Student</h1>
        <form method="post">
            <?php wp_nonce_field('save_student_data'); ?>
            <table class="form-table">
                <tr><th><label for="name">Name</label></th>
                    <td><input type="text" name="student_name" class="regular-text" required></td>
                </tr>
                <tr><th><label for="phone">Phone</label></th>
                    <td><input type="text" name="student_phone" class="regular-text" required></td>
                </tr>
                <tr><th><label for="email">Email</label></th>
                    <td><input type="email" name="student_email" class="regular-text" required></td>
                </tr>
                <tr><th><label for="address">Address</label></th>
                    <td><textarea name="student_address" rows="3" class="regular-text" required></textarea></td>
                </tr>
                <tr><th><label for="batch">Batch</label></th>
                    <td><input type="text" name="student_batch" class="regular-text" required></td>
                </tr>
            </table>
            <?php submit_button('Save Student'); ?>
        </form>
    </div>
    <?php
}