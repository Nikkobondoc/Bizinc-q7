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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'T(]6B*+i Fw3l]@D[&8ZKN*((~9GM#<jVhUC=P+tv+ro<ujRmv$CEK&PCLYwaqq-');
define('SECURE_AUTH_KEY',  'K(+U+Jsrd>?!/?<oSyc9vc}JlmLl]P!3-_2W:-I@t-b=!n2|8[II[2u+*-45EzRb');
define('LOGGED_IN_KEY',    'K[.|bszMG-YFDTcz1Vu%9khuJ=J>+{.>nqF~!F;n#}EpjejyHx& /Ye%d<&/f0#P');
define('NONCE_KEY',        'w^!v0?JIHYv3qOr50fR5uu-kfmEY+SRp{{+iHQ8O_hV}Ofq?IItDUfJ*^:7GCHg?');
define('AUTH_SALT',        '9y(|(YHq<UvAW=vp72+}q ogQlQM?O,4wF5Ne,_9;EG/E$][JAypPx-me-P<d#`:');
define('SECURE_AUTH_SALT', 'AJPVlp,FZ7X>cEuuB*-q@+!NGU_ppf(Fw3LfVo 8h C@]_,4M3S6 -,8zy)&~/4 ');
define('LOGGED_IN_SALT',   '+do!E,B37^B8Dc;<f#lGi|]GO7&o+PE9hLee_1^*#wVt7>gJ&1OU+x$k|9UeL/5{');
define('NONCE_SALT',       '9ooh[0ycUU4K#*a4t X5kBNokc4>in-!Wlo41lEBaDtn4w`Woy^eDleY4g|0[36u');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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