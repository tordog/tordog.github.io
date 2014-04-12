<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'torie_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',8AJW$z&P:g/ABi e!s4YKnz1H&)g)ZRfno-TmL6%@4DuQem)X+.!o/>%#.h$QAt');
define('SECURE_AUTH_KEY',  'vcmh9a7=5Y%l>wS@nw;-mWk<B:_=-HN_Ka!r2SJqE XfPlQ%*-Tg-N6t4NuJJeZ|');
define('LOGGED_IN_KEY',    'Dn2h^GIEC,?/}(r_|%`;S`:-@=m%+]hw]!0K1jP**.[b!tddKqWI+-[&u3S@>sBd');
define('NONCE_KEY',        'U5CoUb8cI7hcGB4uDsx].!~g~(Ozw?N7vwi=?*cL</664(wZ>[bF^%,0G?b|ul%@');
define('AUTH_SALT',        '0<%|,4zr,EoIQj+,gI?EpsDz)W3NA@e4MVmi[{2=~r-+AS>lA2]^2s{e?zBp;(Tp');
define('SECURE_AUTH_SALT', ':7~Av.?Ir5gE+XSuW8i~@~^`aVsb88ni1ZLl7do:`<7_i*}U7Rjy_$+*Yk-[m%#P');
define('LOGGED_IN_SALT',   'Mj!V_Vmw6b3uX0<b+{<TQyqj2:zyp+p[~$kLyDz^uduy!g:SS[!D<a3eC+t4Ws- ');
define('NONCE_SALT',       'T$7<(XuN/g]Rp`|*<a||%aq4lM(j6Kn-at++75~-|btvA=</w-]MFHC~(79|q1]t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
