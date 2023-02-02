<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cozway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h1@{jO!fG#WHVR  |19;#Vf9p9cJkT,D/=m1i[Fd0/o%1##Hdh m>69&qSgrI}[=' );
define( 'SECURE_AUTH_KEY',  '>uyE#0!nuMUjbh#}[H!X]ML>QIlEtUMlpH|NR5s/|?#E?15~40;po>G3kPp*Cg8|' );
define( 'LOGGED_IN_KEY',    '3x4(xZ^?M<u_x75<7u!vOaYdszu+2+0aTBI+<f:@U/JyS-)~Xcx*,ta&mnjbP06D' );
define( 'NONCE_KEY',        't^ijrh_>7f9RAVnhw:t7Z0!wxT[6v@lOJPt[8~*5K=uEIKuZdi@d5f;QZ;}]l3}T' );
define( 'AUTH_SALT',        'A6ZCI+#Q%8t!<5{Su!T#&LI65uFZ#mxAGt/P={l(+#R-=H7Hn^Jskw3/l:+(bH1}' );
define( 'SECURE_AUTH_SALT', 'RJm$69~U,Mn#,X%y38Q=b&Kemtoi)U?nG((U9cVp/w_;AYdQl]n=6;!?YFH5-^s;' );
define( 'LOGGED_IN_SALT',   '.D OQy%27E&c$[n58$s.-#Y?8up:iYsKg+Ut0u14y7m#vB-CE2$n7b]cGcURP`&>' );
define( 'NONCE_SALT',       'C0aqaRG#ci1Q+^gdm!GW7h1bX8QuA-HZow[`[-+(lu_,f!#2@b0[chj)oYV*J)6A' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
