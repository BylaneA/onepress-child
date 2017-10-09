<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( array('list-article',' col-lg-4', 'col-md-4', 'col-sm-4','col-xs-12') ); ?>>

		<div class="img-responsive">

			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php
				if ( has_post_thumbnail( ) ) {
					the_post_thumbnail( 'onepress-blog-small' );
				} else {
					echo '<img alt="" src="'. get_template_directory_uri() . '/assets/images/placholder2.png' .'">';
				}
				?>
			</a>
		</div>
	</article>

<!-- #post-## -->
