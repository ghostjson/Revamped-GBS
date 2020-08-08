<?php

// customization

include_once 'customize/about.customize.php';

function new_settings($wp_customize){

    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'header_textcolor2' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'mytheme_new_section_name' , array(
        'title'      => __( 'Visible Section Name', 'mytheme' ),
        'priority'   => 30,
    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => __( 'Header Color', 'mytheme' ),
        'section'    => 'mytheme_new_section_name',
        'settings'   => 'header_textcolor',
    ) ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color2', array(
        'label'      => __( 'Header Color2', 'mytheme' ),
        'section'    => 'mytheme_new_section_name',
        'settings'   => 'header_textcolor2',
    ) ) );


}

add_action('customize_register', 'new_settings');


//theme settings

function site_init(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'site_init');


// career post type

function add_career_post_type(){
    register_post_type('career',
        array(
            'rewrite' => array('slug' => 'career'),
            'labels' => array(
                'name' => 'Career',
                'singular_name' => 'Career',
                'add_new_item' => 'Add New Career',
                'edit_item' => 'Edit Career'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor',
            )
        )
    );
}

add_action('init', 'add_career_post_type');

//contact form post

function contact_form(){


    if(isset($_POST['name'])){

        $contact = array(
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'company' => $_POST['company'],
            'service' => $_POST['service']
        );

        global $wpdb;
        $wpdb->insert('wp_contact_form', $contact);

        wp_redirect('/');
    }

}

add_action( 'admin_post_nopriv_contact_form', 'contact_form' );
add_action('admin_post_contact_form', 'contact_form');

//add pages to admin panel

include_once 'admin/contact.php';

