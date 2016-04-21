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
define('WP_HOME','http://wordpress-1940433797.eu-west-1.elb.amazonaws.com');
define('WP_HOME','http://wordpress-1940433797.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-1940433797.eu-west-1.elb.amazonaws.com');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress2.ctkwpvfgogqv.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         ':^OQ:()+y2=EKA4Q_);4:hWF-:CURJOwr%+aGgDR~xCf$oC_81c0|r*t--O$wzym');
define('SECURE_AUTH_KEY',  '73HKC[M_Mb|2!Yr6Kbt^0ND($>s0[E/eSq[)(|9E9xOU|n%+*fOH(.E)tC!B?QDZ');
define('LOGGED_IN_KEY',    'E3O[i/U5aWSB5KKxLZ1SQ5?9AR[VS+PQ|d{{O|Xah?]~+5s-+|rs<{-A5?}OwL.-');
define('NONCE_KEY',        '+Nlg81 V.&B%sQs5e}m+(D#Ps3AF?U>Y5}C]-z*h@E-$ !%=G#5qtNd=)}2;=jC~');
define('AUTH_SALT',        'm*$ytgs2RcK_c][N5>0A@5gJq}+uWi*u0hiEe:vbD{,q&<v3$;CuPTX$%glJlts6');
define('SECURE_AUTH_SALT', 'e0)R5_fPBt#ep|+`ru4YD_Qk[AC|{fO:dw&$v`Fpfr+6ro}|>QsG<^(!ls1I/jBo');
define('LOGGED_IN_SALT',   'ag&L2]`J %&5/KfB{PLO2 D!+*nw@RJ=P[&Zwp^0d1}Gl?JT]v%tQ>ul!#|2.^H/');
define('NONCE_SALT',       '@o?`4:0<~WqQr^1DkWTfK&S^=[B6q5H8,Z>-u1I`4CCS^i<.b}yp 8&hI|LA}+eG');

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
