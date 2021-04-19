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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dogbazar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&g(rEL3)MpWxYAmswOj/r(.epNZRX7)Vp/W$@X5vjzj/rq&BE<}{J@/e({=C^]50' );
define( 'SECURE_AUTH_KEY',  'ZC&:?V@#U)&ou/Z$`uDxn9vm2{iCV[P)8Z`1)~?DvUHSc6;lDCh.xonv>&_S^`0%' );
define( 'LOGGED_IN_KEY',    'e/&p:<$zrIw.`wJ3|VTEf/{k7V*W<>(gS:<bnab.}d*-%=Qm+3>D6O6=Kad7=Es3' );
define( 'NONCE_KEY',        'suGww%:ykYo{f{V<qy#n#8I+/T0:bIji+tX_-F.:nqdUJ{0QH&/Z0PvEK&O#8O4K' );
define( 'AUTH_SALT',        '=ydzpM/Z/fZLOS2f#t^-v =(;=tUTcaxJ:sswjkQ*i}UtP./l/|Js&qXM]z]Hds]' );
define( 'SECURE_AUTH_SALT', 'YM+~X02x-9<6@w7CVBYy,/}(y: (BOO#`4KR?$8/^q{viW6VE_c5AZi*+qYeSP]N' );
define( 'LOGGED_IN_SALT',   ',yC*yrJ+E|szD@aIAI4rP9e_*h3i!V_aZ!V:WxBW/u,fBAe%8cQI7OB~#c$Im:Rf' );
define( 'NONCE_SALT',       'pD*oNW@/#3qw^09~M,?>@}~[4T2+k21vdI)[>&f8|=[Tg`[>8jublcQ]*r`+XyE7' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
