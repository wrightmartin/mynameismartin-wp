<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	add_filter('next_posts_link_attributes', 'next_posts_link_attributes');

	add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

	/* ========================================================================================================================

	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

	======================================================================================================================== */



	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {

		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif; ?>
		</li>
		<?php
	}



	/* ========================================================================================================================

	mynameismartin.com functions

	======================================================================================================================== */

	/**
	 * List all categories of post, seperated by a comma
	 *
	 * @return void
	 * @author Martin Wright
	 */


	if ( ! function_exists( 'mynameismartin_posted_in' ) ) :
function mynameismartin_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	if ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( '%1$s', 'twentyten' );
	} else {
		$posted_in = __( '');
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' )
	);
}
endif;

/**
 * Pagination
 */

 function mynameismartin_content_nav(  ) {
  global $wp_query;
  if ( $wp_query->max_num_pages > 1 ) : ?>

  	<?php previous_posts_link( __( 'Newer posts', 'twentyeleven' ) ); ?>
	 <?php next_posts_link( __( 'Older posts', 'twentyeleven' ) ); ?>

  <?php endif;
}



/*
 * Fix for no rel="" on navigation links
 */

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    $attr = 'rel="next" class="arrow right-arrow"';
    return $attr;
}
function posts_link_attributes_2() {
    $attr = 'rel="prev" class="arrow left-arrow"';
    return $attr;
}



/*
 * Fix for no rel="" on navigation links
 */

add_filter('next_post_link_attributes', 'post_link_attributes_1');
add_filter('previous_post_link_attributes', 'post_link_attributes_2');

function post_link_attributes_1() {
    $attr = 'rel="next" class="arrow right-arrow"';
    return $attr;
}
function post_link_attributes_2() {
    $attr = 'rel="prev" class="arrow left-arrow"';
    return $attr;
}


/*
 * Attachments plugin
 */



function my_attachments( $attachments )
{
  $args = array(


    // all post types to utilize (string|array)
    'post_type'     => array( 'project' ),


  );

  $attachments->register( 'my_attachments', $args ); // unique instance name
}

add_action( 'attachments_register', 'my_attachments' );

