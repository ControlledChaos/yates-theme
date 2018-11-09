<?php
/**
 * Footer opening tags and before footer actions.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

if ( is_front_page() && ! is_page_template( 'page-templates/page-showcase.php' ) ) {
	$class = 'site-footer screen-reader-text';
} else {
	$class = 'site-footer';
}

echo '<footer class="' . $class . '">';