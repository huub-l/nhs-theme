<?php
/**
 * Custom template tags for this theme.
 *
 * @package My Project
 */

/**
 * Returns true if a blog has more than 1 category.
 */
function kapow_categorized_blog() {
	$all_the_cool_cats = get_transient( 'kapow_categories' );
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,

				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'kapow_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so kapow_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so kapow_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in kapow_categorized_blog.
 */
function kapow_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'kapow_categories' );
}
add_action( 'edit_category', 'kapow_category_transient_flusher' );
add_action( 'save_post', 'kapow_category_transient_flusher' );
