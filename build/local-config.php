<?php
/**
 * Local Config.
 *
 * @package My Project
 */

define( 'DB_NAME', 'mkdo_nhs_theme' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

defined( 'WP_SITEURL' ) || define( 'WP_SITEURL', 'http://mkdo-nhs-theme.test/wordpress' );
defined( 'WP_HOME' ) || define( 'WP_HOME', 'http://mkdo-nhs-theme.test' );

define('FORCE_SSL_LOGIN',false);
define('FORCE_SSL_ADMIN',false);
