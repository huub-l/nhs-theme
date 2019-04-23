<?php
/**
 * Styleguide partial for site-footer
 *
 * @package My Project
 *
 * @flags offwhite allowoverflow dynamic
 */

if ( ! function_exists( 'kapow_partial_site_footer' ) ) {
	/**
	 * Declare the renderer function, if it hasn't already been declared.
	 *
	 * @param array $data Data to be displayed within the renderer.
	 */
	function kapow_partial_site_footer(
		$data = array(
			'legal' => '<p>&copy; My Project</p>', // Required.
		)
	) {


	class Footer_Walker_Nav_Menu extends Walker {
	    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	        $output .= sprintf( "\n<li class='nhsuk-footer__list-item'><a class='nhsuk-footer__list-item-link' href='%s'%s>%s</a></li>\n",
	            $item->url,
	            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
	            $item->title
	        );
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

	  <?php if ( ! empty( $data ) && isset( $data['legal'] ) ) { ?>
		  <p class="nhsuk-footer__copyright"><?php echo wp_kses_post( $data['legal'] ); ?></p>
	  <?php } ?>

	<?php do_action( 'kapow_after_footer_content' ); ?>
    </div>
  </div>
</footer>
<?php
	}
}

if ( is_styleguide() ) {
	/**
	 * If we're in the styleguide, output our examples.
	 */

	get_partial(
		'site-footer',
		array(
			'legal' => '<p>&copy; My Project</p>',
		)
	);

}
?>
