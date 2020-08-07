<?php
function about_customize($wp_customize)
{
    $wp_customize->add_section('about-customization-section', array(
        'title' => 'About Page'
    ));

    $wp_customize->add_setting('about-customization-description', array(
        'default' => 'Established in 2003, GBS (Singapore) Pte Ltd have built a reputation for our technical expertise and our ability to develop solution-based products and services to meet our customers\' needs. This is made possible with our in-depth knowledge of advanced technologies.

Over the years, we have grown to become a major supplier for Semiconductor, Defence industries and its adjacent markets. We value-add to our customers by developing a range of customised solutions and applications to meet their needs.

With our extensive network of business partners, we can complement our expertise with their competencies and deliver the best solutions to our customers.'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'about-cutomization-description-control',
            array(
                'label' => 'Description',
                'section' => 'about-customization-section',
                'settings' => 'about-customization-description',
                'type' => 'textarea'
            )
        ));

}

add_action('customize_register', 'about_customize');