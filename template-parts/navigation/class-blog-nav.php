<?php
/**
 * Blog pages navigation.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Blog pages navigation.
 */
class Blog_Nav {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

		add_action( 'yates_before_footer', [ $this, 'nav' ], 20 );

	}

	/**
	 * Get navigation style.
	 */
	public function nav() {

		if ( ! is_front_page() ) {
			get_template_part( 'template-parts/navigation/partials/posts-nav' );
		}

	}

}

new Blog_Nav;