<?php
/**
 * Template filters.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Template filters.
 */
class Template_Filters {

	/**
	 * Constructor magic method.
	 */
	public function __construct() {

        // Image names in the media picker.
        add_filter( 'image_size_names_choose', [ $this, 'image_size_choose' ] );

        // Dark mode body class.
        add_filter( 'body_class', [ $this, 'dark_mode' ] );
        add_filter( 'admin_body_class', [ $this, 'dark_mode' ] );

    }

    /**
     * Image sizes to insert into posts.
     */
    public function image_size_choose( $size_names ) {

        global $_wp_additional_image_sizes;

		$sizes = [
            'thumbnail'     => esc_html__( 'Thumbnail', 'yates' ),
            'thumb-large'   => esc_html__( 'Large Thumb', 'yates' ),
            'thumb-x-large' => esc_html__( 'XL Thumb', 'yates' ),
			'medium'        => esc_html__( 'Medium', 'yates' ),
            'large'         => esc_html__( 'Large', 'yates' ),
            'video-small'   => esc_html__( 'Video Small', 'yates' ),
            'video-medium'  => esc_html__( 'Video Medium', 'yates' ),
            'video-large'   => esc_html__( 'Video Large', 'yates' ),
            'intro-small'   => esc_html__( 'Intro Small', 'yates' ),
            'intro-medium'  => esc_html__( 'Intro Medium', 'yates' ),
            'intro-large'   => esc_html__( 'Intro Large', 'yates' ),
            'slide-small'   => esc_html__( 'Slide Small', 'yates' ),
            'slide-medium'  => esc_html__( 'Slide Medium', 'yates' ),
            'slide-large'   => esc_html__( 'Slide Large', 'yates' )
		];

		$insert_sizes = apply_filters( 'yates_insert_image_sizes', $sizes );
		return $insert_sizes;

    }

    /**
     * Add a body class if in dark mode.
     *
     * @param  array $classes
     * @return array
     */
    public function dark_mode( $classes ) {

        if ( class_exists( 'acf_pro' ) && is_plugin_active( 'yates-plugin/yates-plugin.php' ) ) {

            $dark_mode = get_field( 'yates_dark_mode', 'option' );

            if ( ! is_admin() && $dark_mode ) {

                $classes[] = 'dark-mode';
                return $classes;

            } elseif ( is_admin() && $dark_mode ) {
                // $classes = 'dark-mode';
                return $classes;
            }

            return $classes;

        } else {
            return $classes;
        }

    }

}

new Template_Filters;