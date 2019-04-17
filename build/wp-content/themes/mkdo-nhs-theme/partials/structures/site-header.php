<?php
/**
 * Styleguide partial for my-partial-name
 *
 * @package My Project
 *
 * @flags offwhite allowoverflow relativechild dynamic
 */

if ( ! function_exists( 'kapow_partial_site_header' ) ) {
	/**
	 * Declare the renderer function, if it hasn't already been declared.
	 */
	function kapow_partial_site_header() {

		do_action( 'kapow_before_header' );

		class Primary_Walker_Nav_Menu extends Walker {
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				$output .= sprintf( "\n<li class='nhsuk-header__navigation-item'><a class='nhsuk-header__navigation-link' href='%s'%s>%s</a></li>\n",
					$item->url,
					( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
					$item->title
				);
			}
		}

		// TODO: kapow_return_svg('nhsuk-icon__chevron-right') inside the li after the a.
?>

<header class="nhsuk-header" role="banner">
  <div class="nhsuk-width-container nhsuk-header__container">
	  <?php do_action( 'kapow_before_header_content' ); ?>

	<div class="nhsuk-header__logo">
	  <a class="nhsuk-header__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="NHS homepage">
		<?php kapow_get_svg('nhsuk-logo--white'); ?>
	  </a>
	</div>

	<div class="nhsuk-header__content" id="content-header">
	  <div class="nhsuk-header__menu">
		<button class="nhsuk-header__menu-toggle" id="toggle-menu" aria-controls="header-navigation" aria-label="Open menu">Menu</button>
	  </div>
	  <div class="nhsuk-header__search">
		<button class="nhsuk-header__search-toggle" id="toggle-search" aria-controls="search" aria-label="Open search">
		  <svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
			<path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
		  </svg>
		  <span class="nhsuk-u-visually-hidden">Search</span>
		</button>
		<div class="nhsuk-header__search-wrap" id="wrap-search">
		  <form class="nhsuk-header__search-form" id="search"  action="/search/" method="get" role="search">
			<label class="nhsuk-u-visually-hidden" for="search-field">Search the NHS website</label>
			<div class="autocomplete-container" id="autocomplete-container"></div>
			<input class="nhsuk-search__input" id="search-field" name="search-field" type="search" placeholder="Search" autocomplete="off">
			<button class="nhsuk-search__submit" type="submit">
			  <svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
			  </svg>
			  <span class="nhsuk-u-visually-hidden">Search</span>
			</button>
			<button class="nhsuk-search__close" id="close-search">
			  <svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path>
			  </svg>
			  <span class="nhsuk-u-visually-hidden">Close search</span>
			</button>
		  </form>
		</div>
	  </div>
	</div>

	<?php do_action( 'kapow_after_header_content' ); ?>

  </div>
  <nav class="nhsuk-header__navigation" id="header-navigation" role="navigation" aria-label="Primary navigation" aria-labelledby="label-navigation">
	<p class="nhsuk-header__navigation-title">
	  <span id="label-navigation">Menu</span>
	  <button class="nhsuk-header__navigation-close" id="close-menu">
		<svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
		  <path d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path>
		</svg>
		<span class="nhsuk-u-visually-hidden">Close menu</span>
	  </button>
	</p>

	<?php do_action( 'kapow_before_primary_nav' );

	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'  => false,
				'menu_class' => 'nhsuk-header__navigation-list',
				'depth'      => 1,
				'walker'     => new Primary_Walker_Nav_Menu()
			)
		);
	}

	do_action( 'kapow_after_primary_nav' ); ?>
  </nav>
</header>

<?php
		do_action( 'kapow_after_header' );
	}
}

if ( is_styleguide() ) {
	/**
	 * If we're in the styleguide, output our examples.
	 */

	get_partial( 'site-header' );

}

?>
