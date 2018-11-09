<?php
/**
 * Begin the <head> section.
 *
 * Use the before_html hook for things such as
 * acf_form_head for Advanced Custom Fields
 * conditional frontend forms.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( is_front_page() && is_page_template( 'page-templates/page-showcase.php' ) ) {
	$class = 'no-js front-page-html front-page-showcase';
} elseif ( is_front_page() ) {
	$class = 'no-js front-page-html front-page-default';
} else {
    $class = 'no-js';
}

// Get the site languge.
$language = get_language_attributes();

// Apply filter for adding classes or more attributes.
$tag      = '<html ' . $language . ' class="' . $class . '">';
$html_tag = apply_filters( 'yates_html_tag', $tag );

?>
<!DOCTYPE html>
<?php do_action( 'before_html' ); ?>
<?php echo $html_tag; ?>