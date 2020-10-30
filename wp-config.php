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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'AyOiZm.w1Ndi1I8xOX_=W^N3)2QO&b>mO-Cz[1bk(&TEpKxKxZwrHON-<>EPqUxT' );
define( 'SECURE_AUTH_KEY',  '.^0_7cQzh9^LM[4@4G!!.NtP=~F*Apv@d~v}N ?p`$h+&n1cm>zceoi5O5]Edf?G' );
define( 'LOGGED_IN_KEY',    '1:]y*0gOiaMM>0d`bua)yN1@*9:3lNe6Q@`%s6[}._%RxX|` ]U&<Y3;l&L$=B5!' );
define( 'NONCE_KEY',        'Gn6hbRy1K-Y6nK,:nIBQ-DRG>gMr}DK`JNdAo;k5ZNHgs[7z&KJBr[E$6_q?8h!a' );
define( 'AUTH_SALT',        '0hV>,s!v<dq^?Rm5s9R/~|]dkNEb;D:a^4u&(>q?3L:$8njHXr Iw=}z;}a d$&P' );
define( 'SECURE_AUTH_SALT', 'FrB.E}>XIn-W,Lya4VS(}7%vs(D/@W.-_v+$4287)%k()JN{5`H;e.rq ~0+Ch8}' );
define( 'LOGGED_IN_SALT',   '{(Ibpl~FjKWF/y6*<bEee;C:h(z,dB`~I;Qba,;5Nb`hL ,]`7uKbs{Ep}5)94cA' );
define( 'NONCE_SALT',       ';=fx2u/T=*sD]s1&]p0wQy4~{*yCV<}Q1T]yUQLA/9stqbJw`=R)CPQ?`-ThtYxu' );

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

set_time_limit (300);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
