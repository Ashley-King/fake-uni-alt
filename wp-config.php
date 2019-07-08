<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fake-uni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`MzN*.8`}8ejhI2w2oa7vWpq}I5e#W>%KA47J^-Y)h~z~Is51rT9|$;C6rl(g +q' );
define( 'SECURE_AUTH_KEY',  '9wwO`2qi!DzbH~9YOpp#PS}:b&G=st/#ecg$mC&<[=wF_]V&M0QuQ=2`(D7c|I@$' );
define( 'LOGGED_IN_KEY',    'ri88T7qgaSr84rb@/?3j_w<gsbVrQiaR*fj7NyH@GM`yF?=d@z2t^,Y#jYUfs/e{' );
define( 'NONCE_KEY',        'b)v2c.qbSx4ax9,*0^%t5lx6NY5piMbuRM.fhS!K!bIRVmRisW&|6c**3(w]dB2`' );
define( 'AUTH_SALT',        'j<Vw<h5-_Kp^:CCQ^%sneZdX]$}i2l?L%(JE]W0Qf;6gv9W>eToiK9_+N^Mu(6&k' );
define( 'SECURE_AUTH_SALT', 'Av~*QsF95%:eB~9k[>n!3uC3:Jn@k7_HPi<$xBs|C<ii01x@f8<H$6v$<PBOm8Dy' );
define( 'LOGGED_IN_SALT',   'H>2*+ej#StWiv#Lnwl[8}<hQ2|;yT];p9]b95Tw:+JpRB^rsHtTMe}cvyi(%M~$=' );
define( 'NONCE_SALT',       '.78YHJdjY~?)Z:J&rj,PAt>I!V?<9P,`=(Ht>F!(OlG?Q6_h]&=0/?7:GKJyNEwn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
