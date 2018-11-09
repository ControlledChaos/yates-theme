<?php
/**
 * Front page HTML output.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div id="content" class="site-content global-wrapper page-wrapper">
    <?php do_action( 'yates_before_main' ); ?>
    <main class="main" role="main" itemscope itemprop="mainContentOfPage">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php do_action( 'yates_before_article' ); ?>
        <article class="global-wrapper hentry" id="post-<?php the_ID(); ?>" role="article">
            <div class="entry-content" itemprop="articleBody">
                <?php do_action( 'yates_before_content' ); ?>
                <?php the_content(); ?>
                <?php do_action( 'yates_after_content' ); ?>
            </div><!-- entry-content -->
        </article>
        <?php do_action( 'yates_after_article' ); ?>
    <?php endwhile; endif; ?>
    </main>
    <?php do_action( 'yates_after_main' ); ?>
    <?php do_action( 'yates_content_aside' ); ?>
</div><!-- site-content -->