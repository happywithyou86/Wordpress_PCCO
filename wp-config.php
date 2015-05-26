<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pcco_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|a[)c&7>.a#T]u* 5mtUyv*_fL&u&?9Xbf|Rg:916<AU20b+G^G(-?B:+KD[uReb');
define('SECURE_AUTH_KEY',  '!U4jIpUU:|T/Di8ki+hGv1ut>i2,kmlw+%xmqGT;|6F1H?08H!PLR+#pV<<@IB40');
define('LOGGED_IN_KEY',    'N;!%IJ~0r5&+Q_vXB1m<<y09-JG>3d7&~Gu2E2Z#|](e?r;oH^G+~Q`9B`E2Cqx7');
define('NONCE_KEY',        '/C+Oi07vme9AUD>,8>UB3o#|(1XZF1([12&c,;f1@/|jQ>6g-B#;v.Y.Y)0^]<t]');
define('AUTH_SALT',        'XN242yqnpr9[Nu%;z+HX!6@^CdrQN$s4+AC6w0[:cLm_N{%N2ZHof90gUyomi0,F');
define('SECURE_AUTH_SALT', ':*A]>8;8{-~rN,<T#G?T_Jhk6C1V+IJ)fwrgoeOxAV?$&p-dMOtdr0`o6(Hjtj&w');
define('LOGGED_IN_SALT',   'TWSuJ21kx]1-G 0q-_ot G*Yw9iB8urw}[9I+:YUAsWBYV&<||.mn9`p%Vq9[S p');
define('NONCE_SALT',       '|tG>CM]-okKc^!8SL^Y)+CfsHyrhce:Hv[$M$k!ivGexvT}^Mczut(0.h%*t#DNZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
