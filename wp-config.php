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
define( 'DB_NAME', 'blog_development' );

/** MySQL database username */
define( 'DB_USER', 'wordpressBlog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j55fonteles' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '`e.@kY9FF:pZK+~iPe0FZO?x2-611:VsF9;?E%l1Y;yfevl<~PztTHL?hw}KFXh%');
define('SECURE_AUTH_KEY',  '1rx*ER@a2]BrP/HJ680.g@IMot_nj{Cq>sD#-]|D6F*@??xuV|1l1etc^)aZ-A0]');
define('LOGGED_IN_KEY',    'L<)^V0.=]`4SD@eT`dAH)g~%1{zt4)94I3bsO:=:7?KO+W+>x7g<,Z>OWdZQ)H0U');
define('NONCE_KEY',        'w}dnMVR(8r|w3B^G>vG%k]2isZ;3YAm cf+/(^+&V>>VAWMI2(z8v!<TN<KyA#Wf');
define('AUTH_SALT',        'BHA;8q-LCU(s+/]e -cA|;P,Y@v7>gJ}~viOnP=yk}L;L{+yy5Yw6r92jfF0IO;U');
define('SECURE_AUTH_SALT', '2<~R<C<:6AAxZvI`?d*G`#/(O|q9?-+j-Id^m{eufT-omr#jbI[ikp=-c@9)<i@M');
define('LOGGED_IN_SALT',   't(/R`B|=(e]d+w4X}5X!+BVIj|n*XN+%o:DVk,_-CGSSjP!_YHLj ~;2[Jv  @B%');
define('NONCE_SALT',       'z`%G.YO*+g60r-~E@-Y~j.@1wSYs5ZS3o;_1U2^e7_0d!T;/5)$:RE8c*g*?6M~I');


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
