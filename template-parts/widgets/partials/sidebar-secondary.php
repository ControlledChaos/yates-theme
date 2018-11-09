<?php
/**
 * Primary sidebar output.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;
do_action( 'yates_before_sidebar' ); ?>
<aside class="sidebar primary">
    <?php do_action( 'yates_before_sidebar_content' ); ?>
    <div class="sidebar-content">
        <?php do_action( 'yates_before_sidebar_widgets' ); ?>
        <div class="sidebar-widgets">
            <?php dynamic_sidebar( 'secondary-sidebar' ); ?>
        </div>
        <?php do_action( 'yates_after_sidebar_widgets' ); ?>
    </div><!-- sidebar-content -->
    <?php do_action( 'yates_after_sidebar_content' ); ?>
</aside>
<?php do_action( 'yates_after_sidebar' ); ?>