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
define( 'DB_NAME', 'webloso3_thenccusa' );

/** MySQL database username */
define( 'DB_USER', 'webloso3_thenccu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b5ZZ%qvnQ0' );

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
define( 'AUTH_KEY',         '3}a(KVV{vOQmly(~t}gNDY$~q=>kkdahrN@yX:MJli?N|i3LV<q=#<FNr*{:Ru@D' );
define( 'SECURE_AUTH_KEY',  'm>c@;4D*)r;P#XiK@?>+i<LZg+e5?liyS@L`,?(Cm9h%?.}UN9HwJu2_^/0=Q1b8' );
define( 'LOGGED_IN_KEY',    'QfS[TZAkQCDo2:j~cou J]K=NhawxUu8L3b0Wxaogqa~(dBct&J0D]vOyoB-Fi*8' );
define( 'NONCE_KEY',        'Y$c^{oNZtrIqGfyBt)]l/b?wefDpu|$*Omo>h-~K3#;+waS%x%c$UwugFIOZ;#bx' );
define( 'AUTH_SALT',        'f6lf^S5^2d?kJh*9cH7` +NRD~gph+MaK-ir$_1IXi9Vu0m;W$0@yii}F>W`>2l0' );
define( 'SECURE_AUTH_SALT', 'HsD(jR?y/a{2S4T/o4RsQX_,k4^/KbNzikUKIUp TTI Ty,W/ETXh|d43zTGB=?t' );
define( 'LOGGED_IN_SALT',   'Koo8Is!%C4WzQ8`@[`86c)FBx4KZ1i!=?P]QTanOcXOs@8(68V{?_Xh[x^kDtN+X' );
define( 'NONCE_SALT',       'fp[ZE-:eMEF>1y>U{4p=4+a8rbl<512lnP<dXL$gDK<,79wNf84kdI{[#%f:.jfb' );

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
