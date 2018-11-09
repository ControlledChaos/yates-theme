<?php
/**
 * Main site navigation.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;
$before = apply_filters( 'yates_main_nav_item_before', '<span class="main-nav-item-before"></span>' );
$after  = apply_filters( 'yates_main_nav_item_after', '<span class="main-nav-item-after"></span>' );
$args   = [
        'menu'            => 'main',
        'menu_class'      => 'main-nav-menu-list',
        'menu_id'         => 'main-nav-menu-list',
        'container'       => false,
        'before'          => $before,
        'after'           => $after,
        'echo'            => true,
        'depth'           => 0,
        'theme_location'  => 'main',
        'item_spacing'    => 'preserve' // Accepts 'preserve' or 'discard'.
];

do_action( 'yates_before_main_nav' ); ?>
<nav class="main-navigation" role="directory" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="main-navigation-wrapper">
	<?php $menu_toggle = apply_filters( 'yates_nav_toggle_text', esc_html__( 'Menu', 'yates' ) ); ?>
        <button id="menu-open" class="menu-open" aria-controls="main-nav-menu" aria-expanded="false"><?php echo $menu_toggle; ?></button>
        <div class="main-nav-menu">
            <button id="menu-close" class="menu-close"><?php echo esc_html__( 'Close', 'yates' ); ?></button>
            <?php wp_nav_menu( $args ); ?>
        </div>
	</div>
</nav>
<?php do_action( 'yates_after_main_nav' ); ?>