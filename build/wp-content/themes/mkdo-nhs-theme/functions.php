<?php
/**
 * Functional theme includes and global constants/variables.
 *
 * @package My Project
 */

// Constants.
define( 'MKDO_NHS_THEME_THEME_ROOT', __FILE__ );
define( 'MKDO_NHS_THEME_PARTIALS_DIR', __DIR__ . '/partials/' );

// Automatically import functional includes from the inc/ folder.
foreach ( glob( get_stylesheet_directory() . '/inc/*.php' ) as $filename ) {
	require_once $filename;
}
