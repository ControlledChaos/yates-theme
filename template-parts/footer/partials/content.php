<?php
/**
 * Footer HTML and content output.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'yates_before_footer_content' );

    echo '<div class="footer-content global-wrapper footer-wrapper">', "\r";

        $copyright_text = sprintf(
            '<p class="copyright-text" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">&copy; <span class="screen-reader-text">%1s</span><span itemprop="copyrightYear">%2s</span> <span itemprop="copyrightHolder">%3s</span></p>',
            esc_html__( 'Copyright ', 'yates' ),
            get_the_time( 'Y' ),
            esc_html__( 'Toby Yates. All rights reserved.' )
        );

        $copyright = apply_filters( 'yates_copyright_text', $copyright_text );
        echo $copyright, "\r";

    echo '</div><!-- footer-content -->', "\r";

do_action( 'yates_after_footer_content' );