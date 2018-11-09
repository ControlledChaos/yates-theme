<?php
/**
 * Template tag functions
 * 
 * Convert static class methods to more traditional tags.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since 1.0.0
 */
namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Page template function
 * 
 * This is used to conditionally get ass standard templates.
 * 
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'yates_template' ) ) :

	function yates_template() {

		$yates_template = require get_theme_file_path( '/template-parts/content/content.php' );

		return $yates_template;

	}

endif;