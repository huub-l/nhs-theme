<?php
/**
* The Footer.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package My Project
*/

class Footer_Walker_Nav_Menu extends Walker {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= sprintf( "\n<li class='nhsuk-footer__list-item'><a class='nhsuk-footer__list-item-link' href='%s'%s>%s</a></li>\n",
		$item->url,
		( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
		$item->title );
	}
}
?>

<footer role="contentinfo">
	<div class="nhsuk-footer" id="nhsuk-footer">
		<div class="nhsuk-width-container">

			<?php do_action( 'kapow_before_footer_content' ); ?>

			<h2 class="nhsuk-u-visually-hidden">Support links</h2>

			<?php if ( has_nav_menu( 'footer' ) ) {

				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'  => false,
						'menu_class' => 'nhsuk-footer__list',
						'depth'      => 1,
						'walker'     => new Footer_Walker_Nav_Menu()
					)
				);

			} ?>

			<div class="nhsuk-footer__copyright">
				<p>&copy; My Project</p>
			</div>

			<?php do_action( 'kapow_after_footer_content' ); ?>
		</div>
	</div>
</footer>

<?php
do_action( 'kapow_before_wp_footer' );
wp_footer();
?>
</body>
</html>
