<?php
/**
 * Menu Right Button Link Options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_menu_right_button_link_options
 *
 */
if ( !function_exists('event_star_menu_right_button_link_options') ) :
	function event_star_menu_right_button_link_options() {
		$event_star_menu_right_button_link_options =  array(
			'disable'       => esc_html__( 'Disable', 'event-star' ),
			'booking'       => esc_html__( 'Popup Widgets ( Booking Form )', 'event-star' ),
			'link'          => esc_html__( 'One Link', 'event-star' )
		);
		return apply_filters( 'event_star_menu_right_button_link_options', $event_star_menu_right_button_link_options );
	}
endif;

/**
 * Header top display options of elements
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_header_top_display_selection
 *
 */
if ( !function_exists('event_star_header_top_display_selection') ) :
	function event_star_header_top_display_selection() {
		$event_star_header_top_display_selection =  array(
			'hide'          => esc_html__( 'Hide', 'event-star' ),
			'left'          => esc_html__( 'on Top Left', 'event-star' ),
			'right'         => esc_html__( 'on Top Right', 'event-star' )
		);
		return apply_filters( 'event_star_header_top_display_selection', $event_star_header_top_display_selection );
	}
endif;

/**
 * Feature slider text align
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $event_star_slider_text_align
 *
 */
if ( !function_exists('event_star_slider_text_align') ) :
	function event_star_slider_text_align() {
		$event_star_slider_text_align =  array(
			'alternate'     => esc_html__( 'Alternate', 'event-star' ),
			'text-left'     => esc_html__( 'Left', 'event-star' ),
			'text-right'    => esc_html__( 'Right', 'event-star' ),
			'text-center'   => esc_html__( 'Center', 'event-star' )
		);
		return apply_filters( 'event_star_slider_text_align', $event_star_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_fs_image_display_options
 *
 */
if ( !function_exists('event_star_fs_image_display_options') ) :
	function event_star_fs_image_display_options() {
		$event_star_fs_image_display_options =  array(
			'full-screen-bg' => esc_html__( 'Full Screen Background', 'event-star' ),
			'responsive-img' => esc_html__( 'Responsive Image', 'event-star' )
		);
		return apply_filters( 'event_star_fs_image_display_options', $event_star_fs_image_display_options );
	}
endif;

/**
 * Feature Info display Options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_feature_info_display_options
 *
 */
if ( !function_exists('event_star_feature_info_display_options') ) :
	function event_star_feature_info_display_options() {
		$event_star_feature_info_display_options =  array(
			'hide'          => esc_html__( 'Hide', 'event-star' ),
			'above'         => esc_html__( 'Above Feature Slider', 'event-star' ),
			'below'         => esc_html__( 'Below Feature Slider', 'event-star' ),
			'absolute'      => esc_html__( 'Absolute Feature Slider', 'event-star' ),
		);
		return apply_filters( 'event_star_feature_info_display_options', $event_star_feature_info_display_options );
	}
endif;

/**
 * Feature Info number
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_feature_info_number
 *
 */
if ( !function_exists('event_star_feature_info_number') ) :
	function event_star_feature_info_number() {
		$event_star_feature_info_number =  array(
			1               => esc_html__( '1', 'event-star' ),
			2               => esc_html__( '2', 'event-star' ),
			3               => esc_html__( '3', 'event-star' ),
			4               => esc_html__( '4', 'event-star' ),
		);
		return apply_filters( 'event_star_feature_info_number', $event_star_feature_info_number );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_footer_copyright_beside_option
 *
 */
if ( !function_exists('event_star_footer_copyright_beside_option') ) :
	function event_star_footer_copyright_beside_option() {
		$event_star_footer_copyright_beside_option =  array(
			'hide'          => esc_html__( 'Hide', 'event-star' ),
			'social'        => esc_html__( 'Social Links', 'event-star' ),
			'footer-menu'   => esc_html__( 'Footer Menu', 'event-star' )
		);
		return apply_filters( 'event_star_footer_copyright_beside_option', $event_star_footer_copyright_beside_option );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_sidebar_layout
 *
 */
if ( !function_exists('event_star_sidebar_layout') ) :
    function event_star_sidebar_layout() {
        $event_star_sidebar_layout =  array(
            'right-sidebar' => esc_html__( 'Right Sidebar', 'event-star' ),
            'left-sidebar'  => esc_html__( 'Left Sidebar' , 'event-star' ),
            'both-sidebar'  => esc_html__( 'Both Sidebar' , 'event-star' ),
            'middle-col'    => esc_html__( 'Middle Column' , 'event-star' ),
            'no-sidebar'    => esc_html__( 'No Sidebar', 'event-star' )
        );
        return apply_filters( 'event_star_sidebar_layout', $event_star_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_blog_archive_feature_layout
 *
 */
if ( !function_exists('event_star_blog_archive_feature_layout') ) :
    function event_star_blog_archive_feature_layout() {
        $event_star_blog_archive_feature_layout =  array(
            'left-image'    => esc_html__( 'Show Image', 'event-star' ),
            'no-image'      => esc_html__( 'No Image', 'event-star' )
        );
        return apply_filters( 'event_star_blog_archive_feature_layout', $event_star_blog_archive_feature_layout );
    }
endif;

/**
 * Blog content from
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_blog_archive_content_from
 *
 */
if ( !function_exists('event_star_blog_archive_content_from') ) :
	function event_star_blog_archive_content_from() {
		$event_star_blog_archive_content_from =  array(
			'excerpt'    => esc_html__( 'Excerpt', 'event-star' ),
			'content'    => esc_html__( 'Content', 'event-star' )
		);
		return apply_filters( 'event_star_blog_archive_content_from', $event_star_blog_archive_content_from );
	}
endif;

/**
 * Image Size
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_get_image_sizes_options
 *
 */
if ( !function_exists('event_star_get_image_sizes_options') ) :
	function event_star_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'event-star' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = esc_html__( 'full (original)', 'event-star' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'event_star_get_image_sizes_options', $choices );
	}
endif;