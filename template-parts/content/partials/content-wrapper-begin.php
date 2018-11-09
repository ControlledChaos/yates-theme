<?php
/**
 * Begin content wrapper.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since 1.0.0
 */
namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$content_wrapper_class = apply_filters( 'yates_content_wrapper_class', '' );

?>
<div id="content" class="site-content global-wrapper page-wrapper <?php echo $content_wrapper_class; ?>">