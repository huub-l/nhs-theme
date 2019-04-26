<?php
/**
 * Custom entry content for this theme.
 *
 * @package My Project
 */

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function kapow_entry_info() {
	$time_kapow_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

	$time_kapow_string = sprintf(
		$time_kapow_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( 'l F j Y' ) )
	);

	$posted_on = sprintf(
		/* translators:  1: date the post was published. */
		esc_html_x( '%s', 'post date', 'mkdo-nhs-theme' ),
		$time_kapow_string
	);

	$byline = sprintf(
		/* translators:  1: author of the post. */
		esc_html_x( 'by %s', 'post author', 'mkdo-nhs-theme' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<p><span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span></p>'; // WPCS: XSS OK.
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function kapow_entry_meta() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		$categories_list = get_the_category_list( esc_html__( ', ', 'mkdo-nhs-theme' ) );
		$tags_list       = get_the_tag_list( '', esc_html__( ', ', 'mkdo-nhs-theme' ) );

		if ( $categories_list && kapow_categorized_blog() || $tags_list ) {
			echo '<p>';
		}

		if ( $categories_list && kapow_categorized_blog() ) {
			printf( /* Translators: used between list items, there is a space after the comma. */
			'<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'mkdo-nhs-theme' ) . '</span>', wp_kses_post( $categories_list ) ); // WPCS: XSS OK.
		}

		if ( $tags_list ) {
			printf( /* Translators: used between list items, there is a space after the comma. */
			'<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'mkdo-nhs-theme' ) . '</span>', wp_kses_post( $tags_list ) ); // WPCS: XSS OK.
		}

		if ( $categories_list && kapow_categorized_blog() || $tags_list ) {
			echo '</p>';
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<p><span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'mkdo-nhs-theme' ), esc_html__( '1 Comment', 'mkdo-nhs-theme' ), esc_html__( '% Comments', 'mkdo-nhs-theme' ) );
		echo '</span></p>';
	}

	if ( get_edit_post_link() ) {
		edit_post_link( esc_html__( 'Edit', 'mkdo-nhs-theme' ), '<span class="edit-link">', '</span>' );
	}
}
