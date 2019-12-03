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
define( 'DB_NAME', 'bdd_wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S1mpl0n973' );

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
define('AUTH_KEY',         '&%;oZ|BK-U~9AyOzN-HDI]zi^VTH`zX1pw#AC@}D7p^0Sd_a$Iyu:k+t|@kU-0=K');
define('SECURE_AUTH_KEY',  'tXs*iH50m74^P@KvP4)641DK`;Z-}I-Y|vt`FYCY=6soN_m1xMuiZAH.Dr%Tl<iW');
define('LOGGED_IN_KEY',    '[tM{w.}W{#p9@Q38n^N=)j]pWrX1|J/7{yM#4t:}}-_z+m||*fxTt-#wx*~jRe2L');
define('NONCE_KEY',        'b{7FA#Nt}i2KGc5tST/LqG:YL6;0E@cAC-Z:,7r}PcL8)w-?V}j`,i=U|r|6)7AE');
define('AUTH_SALT',        'X$$++3ve@p[kqrg&236%C<Gwd ,v;*~f,!jG+j|Q-&([+zSwGg-6T6E=N|pZz&k|');
define('SECURE_AUTH_SALT', ']#:JA66vavV-^|WlQp|M2-|K2+{3czG=>LBs-i@$QQgDDO2)+-8{}(VJ8Y(r[:qZ');
define('LOGGED_IN_SALT',   'EN`3`b[.~a )G-$RM.5)+S|*Fm!SFLpI]!Eq;/8|k7>D@I?m`@H*:GQ[kw)%|Q#1');
define('NONCE_SALT',       

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
