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
define('DB_NAME', 'soundblogChilddg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'W&^]Dq00Z-Y@^lREw:B^k!cH5I]/w;z]U-o[n<K1[^z_@2rLB4<P8`v4+/$gh1eU');
define('SECURE_AUTH_KEY',  'Mis%*0 y$m,wa%eJ%YVPjrjzw}A<o@G)K,};y~LUB^CkU##FHH+]g$4o@W1Hzxo{');
define('LOGGED_IN_KEY',    'gZ+$(/f!>G5C5V[U|0U@2R!$I&DgRUk^*Li0Q>Pzn1LMVeIB9unMrfo7~,6aw1?X');
define('NONCE_KEY',        'yj77{yww^)`XF?i8>CS84REv.1Y=al!;8`;@^+-e=RILJ3YaL}AqRR/)7g~+ly1j');
define('AUTH_SALT',        'bAaaaBvM}tvb&ao<nc_.z.;RJ*~ {X{ay53n%(y2ZSv2^xhX)Y#DXZH+q;!NOeNQ');
define('SECURE_AUTH_SALT', 'w=yzFSV8Jzq(UKc/bivoV=Vs}2Q],&6[G?,/MCfJ+C7PFIH$ucDm|A5V5MJ RW/s');
define('LOGGED_IN_SALT',   'w~$QlK/:HEZ}`eJ ?c)DMrO*r{zfBMlk*iM7E7o<@[SJ{:4Ht7^@Bab<dCG$W/DV');
define('NONCE_SALT',       'Jaq81}En[mKnFXs.[9n/g@^Ss&/@/gEG>%o$I#.:?175LQ|ZWi[aOL?Bt(3@mO%~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
