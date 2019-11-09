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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'i>b!aP6Z8hI( /&7+hf!og:s I2s!olZ}|+jMRDk{-Ma$5It?V,}TzR*Tu]hX];M' );
define( 'SECURE_AUTH_KEY',  'K;U=f5tDPc)NGfA.MOe??Vzco^JYyltj.9/3cAV=%  Pw&4<wdbs`~MzjrK/DU?r' );
define( 'LOGGED_IN_KEY',    'Wln9y4Cx;CWpM{`$^D: 7g7lh-KpYk[`h$HCKU7YgBmeb7DH*dw}bGa[pfO*Sx6n' );
define( 'NONCE_KEY',        '_8_$U-fLnPUOvFe}f?`<=hQ3}^Yxb;Cm;(&n0aPBlfF@R7<k_?edP[_qO%pJ;FOB' );
define( 'AUTH_SALT',        ']_Qs[_fbo.70&vO;p6)}gY2Tacf_{lyVv[5<^nuYul9(w^89`5l^+iH-@}(9b_:x' );
define( 'SECURE_AUTH_SALT', 'x5^a2zk9;@n:2WSKjNNm6^Pli4[f?Ji=y?Ik>QvB/a!gUXQsM1K9l[]}X4_[h:Nj' );
define( 'LOGGED_IN_SALT',   'eDl6|XV+1KMQKfwMJ*mJ5W`>,:-2<jS/$w,],tAt8 jmN.2l~=&?z%Nq~|UISV^B' );
define( 'NONCE_SALT',       '~tzA.r!eJmS}+|E!g5k}HmtE&e&ZcYuU6b{wM/Cpt_/J40, V3woL`$>3]k%l9E1' );

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
