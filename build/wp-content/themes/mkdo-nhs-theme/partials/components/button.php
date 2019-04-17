<?php
/**
 * Styleguide partial for button.
 *
 * @package My Project
 *
 * @flags wrap spacing dynamic
 */

if ( ! function_exists( 'kapow_partial_button' ) ) {
	/**
	 * Declare the renderer function, if it hasn't already been declared.
	 *
	 * @param array $data Data to be displayed within the renderer.
	 */
	function kapow_partial_button(
		$data = array(
			'label'     => 'Button label', // Required.
			'classes'   => 'button--primary',
			'icon-name' => 'cog',
		)
	) {
		// If our required fields aren't present, abort.
		if ( empty( array_intersect( array( 'label' ), array_keys( $data ) ) ) ) {
			return;
		}
?>
	<button class="button <?php echo esc_attr( $data['classes'] ); ?>">
		<?php
			if ( isset( $data['icon-name'] ) && ! empty( $data['icon-name'] ) ) {
				kapow_get_svg( $data['icon-name'] );
			}
		?>
		<?php echo esc_html( $data['label'] ); ?>
	</button>
<?php
	}
}

if ( is_styleguide() ) {
	/**
	 * If we're in the styleguide, output our examples.
	 */

	get_partial(
		'button',
		array(
			'label' => 'Yes',
		)
	);

	get_partial(
		'button',
		array(
			'label'   => 'Sign up',
			'classes' => 'button--primary',
		)
	);

	get_partial(
		'button',
		array(
			'label'   => 'Sign up',
			'classes' => 'button--secondary',
		)
	);

	get_partial(
		'button',
		array(
			'label'   => 'Delete', // Required.
			'classes' => 'button--grey',
		)
	);

	get_partial(
		'button',
		array(
			'label'   => 'Dismiss',
			'classes' => 'button--ghost-dark',
		)
	);

	get_partial(
		'button',
		array(
			'label'   => 'Load more',
			'classes' => 'button--ghost-dark-blue',
		)
	);

	get_partial(
		'button',
		array(
			'label'     => 'Sign up',
			'classes'   => 'button--secondary',
			'icon-name' => 'edit-pencil',
		)
	);

	get_partial(
		'button',
		array(
			'label'     => 'Delete', // Required.
			'classes'   => 'button--grey',
			'icon-name' => 'trash',
		)
	);

	get_partial(
		'button',
		array(
			'label'     => 'Dismiss',
			'classes'   => 'button--ghost-dark',
			'icon-name' => 'cog',
		)
	);

	get_partial(
		'button',
		array(
			'label'     => 'Take registration',
			'classes'   => 'button--ghost-dark button--icon-right',
			'icon-name' => 'cog',
		)
	);

	get_partial(
		'button',
		array(
			'label'     => 'Take registration',
			'classes'   => 'button--ghost-dark-blue',
			'icon-name' => 'cog',
		)
	);

	?>
		<button class="button button--ghost-dark-blue button--disabled">
			Disabled (class)
		</button>
		<button class="button button--secondary" disabled>
			<?php kapow_get_svg( 'cog' ); ?>
			<span>Disabled (attribute)</span>
		</button>

		<button class="button button--primary button--loading button--loading__active">
			Test Loading Button
		</button>
		<button class="button button--ghost-dark button--loading button--loading__active">
			<?php kapow_get_svg( 'cog' ); ?>
			<span>
				Test Loading Button
			</span>
		</button>
	<?php
}
?>
