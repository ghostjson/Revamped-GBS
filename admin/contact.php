<?php

function contact_form_page(){
    add_menu_page(
        'Contacts',
        'Contacts',
        'manage_options',
        'contacts-page-admin',
        'contact_page_template',
        'dashicons-buddicons-buddypress-logo',
        6
    );
}

add_action('admin_menu', 'contact_form_page');

function contact_page_template(){

    global $wpdb;

    $contacts = $wpdb->get_results("SELECT * FROM wp_contact_form ORDER BY `id` DESC LIMIT 50");

    include_once 'templates/contact.template.php';
}