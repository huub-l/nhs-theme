<?php
/**
 * The Footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My Project
 */

	get_partial(
		'site-footer',
		array(
			'legal' => '<p>&copy; My Project</p>',
		)
	);

	do_action( 'kapow_before_wp_footer' );
	wp_footer();
	?>
</body>
</html>
