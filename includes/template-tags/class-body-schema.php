<?php
/**
 * Body element.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Body element.
 */
class Body_Schema {

	/**
	 * Constructor magic method.
	 */
	public function __construct() {

		add_action( 'yates_body_schema', [ $this, 'schema' ] );

	}

	/**
	 * Conditional Schema attributes.
	 */
	public function schema() {

		// Change page slugs and template names as needed
		if ( is_front_page() ) {
			$itemtype = esc_attr( 'WebPage' );
		} elseif ( is_page( 'contact' ) ) {
			$itemtype = esc_attr( 'ContactPage' );
		} elseif ( is_page() ) {
			$itemtype = esc_attr( 'WebPage' );
		} elseif ( is_search() ) {
			$itemtype = esc_attr( 'SearchResultsPage' );
		} else {
			$itemtype = esc_attr( 'Blog' );
		}

		echo $itemtype;

	}

}

new Body_Schema;