<?php

/*adding sections for header options*/
$wp_customize->add_section( 'event-star-popup-option', array(
    'priority'                  => 90,
    'capability'                => 'edit_theme_options',
    'title'                     => esc_html__( 'Popup', 'event-star' ),
    'panel'                     => 'event-star-header-panel',
    'active_callback'   => 'event_star_menu_right_button_if_booking'
) );

/*Title*/
$wp_customize->add_setting( 'event_star_theme_options[event-star-popup-widget-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['event-star-popup-widget-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'event_star_theme_options[event-star-popup-widget-title]', array(
	'label'		        => esc_html__( 'Main Title', 'event-star' ),
	'section'           => 'event-star-popup-option',
	'settings'          => 'event_star_theme_options[event-star-popup-widget-title]',
	'type'	  	        => 'text',
	'priority'	  	    => 1,
) );

/*Button Right booking Message*/
$wp_customize->add_setting('event_star_theme_options[event-star-popup-widget-message]', array(
    'capability'		=> 'edit_theme_options',
    'sanitize_callback' => 'wp_kses_post'
));
$description = sprintf( esc_html__( '%1$s Add Popup Widget from here%2$s ', 'event-star' ), '<a class="at-customizer" data-section="sidebar-widgets-popup-widget-area" style="cursor: pointer">','</a>' );
$wp_customize->add_control(
    new Event_Star_Customize_Message_Control(
        $wp_customize,
        'event_star_theme_options[event-star-popup-widget-message]',
        array(
            'section'           => 'event-star-popup-option',
            'description'       => $description,
            'settings'          => 'event_star_theme_options[event-star-popup-widget-message]',
            'type'	  	        => 'message',
        )
    )
);