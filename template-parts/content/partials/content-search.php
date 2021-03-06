<?php
/**
 * Search HTML output.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

    do_action( 'yates_before_main' ); ?>

	<main class="main" role="main" itemscope itemprop="mainContentOfPage">
		<?php do_action( 'yates_before_article' ); ?>
        <article class="global-wrapper hentry" id="post-<?php the_ID(); ?>" role="article">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </header>
            <div class="entry-content" itemprop="articleBody">
            <?php
            if ( '' !== get_the_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php
                    $size = apply_filters( 'yates_search_thumbnail_size', 'thumbnail' );
                    $args = apply_filters( 'yates_search_thumbnail_args', [
                        'class' => 'alignnone'
                    ] );
                    echo get_the_post_thumbnail( $post->ID, $size, $args ); ?></a>
                </div><!-- post-thumbnail -->
            <?php endif;
                the_excerpt(); ?>
            </div><!-- entry-content -->
        </article>
		<?php do_action( 'yates_after_article' ); ?>
	</main>
	<?php do_action( 'yates_after_main' ); ?>