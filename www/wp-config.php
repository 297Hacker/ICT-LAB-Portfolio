<?php

/**
 * This file enables moving the config out of the webroot
 */

define( 'WP_CACHE', true );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp' );
}

/** Location of your WordPress configuration. */
require_once( realpath( ABSPATH . '../../wp-config.php' ) );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
