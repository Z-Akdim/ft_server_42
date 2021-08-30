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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

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
define( 'AUTH_KEY',         'FhEGh9X`rtOf{(u|h#d[WW`FwO5(gVg{)vn1`!!8&YYg&cF69+{GV}>e]R,>IKT<' );
define( 'SECURE_AUTH_KEY',  'N =QM}?^XU$M|x1:ODPcmTmInU Onj7DxhnsKRw&AF)|ICPogs0ViLb%vs(.b:DG' );
define( 'LOGGED_IN_KEY',    'pRo(KU`]}5IX@SWGnm<{XJA7W4l !Bg=26uvD)m_18AF0l!$R,G|<7-:Q=.kGdp{' );
define( 'NONCE_KEY',        'P,QKz1lXD{R@2Kgm4&30~qqN^sSM^ZP4zW2c8-vPh0dB@>0B9BtJ)O@.&zKr)qJW' );
define( 'AUTH_SALT',        'd)n:fj]A4kva&hhqrL8qAdYDd-A>?5}kuj {0+q`~aX,`TV:cqYHF{uJXTD7-SLt' );
define( 'SECURE_AUTH_SALT', '>z7!AQ]nDxSDY]$Vu cdrMHi1]%yJ>8ieSfL74z!-l{(^@IGesaU3!FU8;qqBqD1' );
define( 'LOGGED_IN_SALT',   'ML86uO<E:NAtb%2)(H[[)J]q4?FF@P_cfp1AZJXI)WW8ZaU]$$*/7)h&I[kbg?Tg' );
define( 'NONCE_SALT',       'dLSF +T.77Inu+(O~JC 564`q#zJ9j+}-%MWWu0 u8,&:SNw)h8H!f<&Bx7`nJjf' );

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
