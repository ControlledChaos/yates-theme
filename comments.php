<?php
/**
 * Post comments template.
 *
 * @package WordPress
 * @subpackage Yates_Theme
 * @since  1.0.0
 */

namespace Yates_Theme;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

if ( post_password_required() ) {
	return;
}

require_once get_theme_file_path( '/includes/comments/class-comments-form.php' );
require_once get_theme_file_path( '/includes/comments/class-comments-heading.php' );
require_once get_theme_file_path( '/includes/comments/class-comments-status.php' );
?>
<?php do_action( 'before_comments_section' ); ?>
<section class="comments-section">
<?php comment_form( Yates_Theme_Comments_Form::args() );

if ( have_comments() ) :

	echo '<h3 class="comments-title">' . Yates_Theme_Comments_Heading::heading() . '</h3>';

	if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) {
		echo Yates_Theme_Comments_Status::closed();
	} ?>
	<?php do_action( 'before_comments' ); ?>
	<div id="comments" class="comments">
		<?php do_action( 'before_comments_list' ); ?>
		<ol class="comment-list">
			<?php wp_list_comments(); ?>
		</ol>
		<?php do_action( 'after_comments_list' ); ?>
	</div><!-- comments -->
	<?php do_action( 'after_comments' ); ?>
<?php else :

	if ( comments_open() && post_type_supports( get_post_type(), 'comments' ) ) {
		echo Yates_Theme_Comments_Status::none();
	} elseif ( post_type_supports( get_post_type(), 'comments' ) ) {
		echo Yates_Theme_Comments_Status::closed();
	}

endif; ?>
</section><!-- comments-section -->
<?php do_action( 'after_comments_section' ); ?>