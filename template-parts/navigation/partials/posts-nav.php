<?php
/**
 * Blog pages standard navigation.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

if ( is_search() ) {
    $prev = __( 'Previous Results', 'yates' );
    $next = __( 'More Results', 'yates' );
} else {
    $prev = __( 'Previous Page', 'yates' );
    $next = __( 'Next Page', 'yates' );
}

$prev_posts = apply_filters( 'yates_prev_posts_label', sprintf( '<span>%1s</span>', $prev ) );
$next_posts = apply_filters( 'yates_next_posts_label', sprintf( '<span>%1s</span>', $next ) );
?>
<nav class="posts-nav global-wrapper">
	<span class="prev-page" rel="prev"><?php previous_posts_link( $prev_posts ); ?></span>
	<span class="next-page" rel="next"><?php next_posts_link( $next_posts ); ?></span>
</nav>