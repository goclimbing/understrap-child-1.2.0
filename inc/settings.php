<?php

function mytheme_customize_register($wp_customize)
{
    //All our sections, settings, and controls will be added here

    $wp_customize->add_setting('header_textcolor', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_section('mytheme_new_section_name', array(
        'title'      => __('Visible Section Name', 'mytheme'),
        'priority'   => 30,
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'      => __('Header Color', 'mytheme'),
        'section'    => 'your_section_id',
        'settings'   => 'your_setting_id',
    )));
}
add_action('customize_register', 'mytheme_customize_register');

 
//include get_template_directory() . '/templates/';
