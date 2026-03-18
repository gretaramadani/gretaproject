<?php
// File for WordPress Theme Customizer functions
// Safe placeholder to avoid errors

function wpdevs_customizer($wp_customize) {

    // Section for Copyright
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'       => 'Copyright Settings',
            'description' => 'Copyright Settings',
        )
    );

    // Setting
    $wp_customize->add_setting(
        'sec_copyright',
        array(
            'type'              => 'theme_mod',
            'default'           => 'Copyright X - All rights Reserved',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Control
    $wp_customize->add_control(
        'sec_copyright',
        array(
            'label'       => 'Copyright information',
            'description' => 'Please, type your copyright here',
            'section'     => 'sec_copyright',
            'type'        => 'text',
        )
    );
}

// Hook into WordPress Customizer
add_action('customize_register', 'wpdevs_customizer');