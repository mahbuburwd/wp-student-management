<?php 



function dii_all_students() {
    ?>
    

    <div class="wrap">
    <h2>All Students</h2>

    <table class="wp-list-table widefat fixed striped table-view-list">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Batch</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            global $wpdb;

            $table_name = $wpdb->prefix . 'dii_students';

            $students = $wpdb->get_results("SELECT * FROM $table_name");

            if ($students) {
                foreach ($students as $student) {
                    echo '<tr>';
                    echo '<td>' . esc_html($student->name) . '</td>';
                    echo '<td>' . esc_html($student->phone) . '</td>';
                    echo '<td>' . esc_html($student->email) . '</td>';
                    echo '<td>' . esc_html($student->address) . '</td>';
                    echo '<td>' . esc_html($student->batch) . '</td>';
                    echo '<td><a class="button button-primary" href="?page=edit-student&id=' . esc_attr($student->id) . '">Edit</a></td>';
                    echo '<td><a class="button button-danger delete-student" href="?page=delete-student&id=' . esc_attr($student->id) . '" onclick="return confirm(\'Are you sure you want to delete this student?\')">Delete</a></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="7">No students found.</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php
}
