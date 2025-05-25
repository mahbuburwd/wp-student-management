<?php 
function dii_student_scripts($hook){

    if ('toplevel_page_dii-students' === $hook || 'students-section_page_dii-add-students' === $hook) {

             wp_enqueue_style( 'dii-stylesheet', plugins_url('../asset/css/style.css', __FILE__));

             wp_enqueue_script( 'dii-jquery', plugins_url( '../asset/js/jquery.js', __FILE__), [], true, true );
             wp_enqueue_script( 'dii-custom-jquery', plugins_url( '../asset/js/custom.js', __FILE__), ['dii-jquery'], true, true );


    }
}

add_action( 'admin_enqueue_scripts', 'dii_student_scripts');
