<?php
/**
 * Event Star functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Event Star
 */

/**
 * Require init.
 */
/*Getting saved values start*/


/**
 * Default Theme layout options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array $event_star_theme_layout
 *
 */
if ( !function_exists('event_star_get_default_theme_options') ) :
    function event_star_get_default_theme_options() {

        $default_theme_options = array(

            /*logo and site title*/
            'event-star-display-site-logo'      => '',
            'event-star-display-site-title'     => 1,
            'event-star-display-site-tagline'   => 1,

            /*header height*/
            'event-star-header-height'          => 300,

            /*header top*/
            'event-star-enable-header-top'       => '',
            'event-star-header-top-menu-display-selection'      => 'right',
            'event-star-header-top-news-display-selection'      => 'left',
            'event-star-header-top-social-display-selection'    => 'right',
            'event-star-newsnotice-title'       => esc_html__( 'News :', 'event-star' ),
            'event-star-newsnotice-cat'         => 0,

            /*menu options*/
            'event-star-enable-sticky'          => '',
            'event-star-menu-right-button-options'      => 'disable',
            'event-star-menu-right-button-title'        => esc_html__('Event Booking','event-star'),
            'event-star-menu-right-button-link'         => '',
            'event-star-enable-cart-icon'               => '',

            /*feature section options*/
            'event-star-enable-feature'         => '',
            'event-star-slides-data'            => '',
            'event-star-feature-slider-enable-animation'        => 1,
            'event-star-feature-slider-display-title'           => 1,
            'event-star-feature-slider-display-excerpt'         => 1,
            'event-star-fs-image-display-options'               => 'full-screen-bg',
            'event-star-feature-slider-text-align'              => 'text-center',

            /*basic info*/
            'event-star-feature-info-display-options'           => 'hide',
            'event-star-feature-info-number'    => 4,
            'event-star-first-info-icon'        => 'fa-calendar',
            'event-star-first-info-title'       => esc_html__('Event Date', 'event-star'),
            'event-star-first-info-desc'        => esc_html__('April 22, 2019', 'event-star'),
            'event-star-second-info-icon'       => 'fa-map-marker',
            'event-star-second-info-title'      => esc_html__('Event Location', 'event-star'),
            'event-star-second-info-desc'       => esc_html__('Elmonte California', 'event-star'),
            'event-star-third-info-icon'        => 'fa-phone',
            'event-star-third-info-title'       => esc_html__('Call Us', 'event-star'),
            'event-star-third-info-desc'        => esc_html__('01-23456789-10', 'event-star'),
            'event-star-forth-info-icon'        => 'fa-envelope-o',
            'event-star-forth-info-title'       => esc_html__('Send Us a Mail', 'event-star'),
            'event-star-forth-info-desc'        => esc_html__('email@mydomain.com', 'event-star'),

            /*footer options*/
            'event-star-footer-copyright'       => esc_html__( '&copy; All right reserved', 'event-star' ),
            'event-star-footer-copyright-beside-option'         => 'footer-menu',

            /*layout/design options*/
            'event-star-enable-animation'  => '',

            'event-star-single-sidebar-layout'                  => 'right-sidebar',
            'event-star-front-page-sidebar-layout'              => 'right-sidebar',
            'event-star-archive-sidebar-layout'                 => 'right-sidebar',

            'event-star-blog-archive-img-size'                  => 'full',
            'event-star-blog-archive-content-from'              => 'excerpt',
            'event-star-blog-archive-excerpt-length'            => 42,
            'event-star-blog-archive-more-text'                 => esc_html__( 'Read More', 'event-star' ),

            'event-star-primary-color'          => '#fd367e',
            'event-star-header-top-bg-color'    => '#933cdf',
            'event-star-footer-bg-color'        => '#112134',
            'event-star-footer-bottom-bg-color' => '#0D1D31',

            'event-star-hide-front-page-content' => '',
            'event-star-hide-front-page-header'  => '',

            /*single*/
            'event-star-single-header-title'    => esc_html__( 'Blog', 'event-star' ),
            'event-star-single-img-size'        => 'full',

            /*theme options*/
            'event-star-popup-widget-title'     => esc_html__( 'Event Booking', 'event-star' ),
            'event-star-show-breadcrumb'        => 1,
            'event-star-search-placeholder'     => esc_html__( 'Search', 'event-star' ),
            'event-star-social-data'            => '',

            'event-star-days-text'              => esc_html__( 'Days', 'event-star' ),
            'event-star-hours-text'             => esc_html__( 'Hours', 'event-star' ),
            'event-star-min-text'               => esc_html__( 'Mins', 'event-star' ),
            'event-star-second-text'            => esc_html__( 'Seconds', 'event-star' ),
            'event-star-event-expire-text'      => esc_html__( 'Expired', 'event-star' )
        );
        return apply_filters( 'event_star_default_theme_options', $default_theme_options );
    }
endif;
/**
 * Get theme options
 *
 * @since Event Star 1.0.0
 *
 * @param null
 * @return array event_star_theme_options
 *
 */
if ( !function_exists('event_star_get_theme_options') ) :
    function event_star_get_theme_options() {

        $event_star_default_theme_options = event_star_get_default_theme_options();
        $event_star_get_theme_options = get_theme_mod( 'event_star_theme_options');
        if( is_array( $event_star_get_theme_options )){
            return array_merge( $event_star_default_theme_options ,$event_star_get_theme_options );
        }
        else{
            return $event_star_default_theme_options;
        }
    }
endif;
$event_star_saved_theme_options = event_star_get_theme_options();
$GLOBALS['event_star_customizer_all_values'] = $event_star_saved_theme_options;
require trailingslashit( get_template_directory() ).'acmethemes/init.php';