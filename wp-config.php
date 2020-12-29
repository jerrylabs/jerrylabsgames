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

define( 'DB_NAME', 'fotolide_jerryla' );



/** MySQL database username */

define( 'DB_USER', 'fotolide_jerryla' );



/** MySQL database password */

define( 'DB_PASSWORD', 'jerrylabs@20202' );



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

define( 'AUTH_KEY',         'B[p=VZ?RVx<CdlEj+IkODzB]G+e$9dO2^F0?ds^mWru87V* %N-jntyj5w2$JLgv' );

define( 'SECURE_AUTH_KEY',  '0G&9&3-fptycI.fzh/A!A|g*Lh2sveULLP.k*!gBnV|9Jq$f6Qhq8UR>`$DR?P4Y' );

define( 'LOGGED_IN_KEY',    '{O=/oa?KG][fHLimb.Fa5;v@,}A}R*6XWR.?D]cY>kP7wXUyxv_A`ELv m1f-N{f' );

define( 'NONCE_KEY',        '0;O,ZtCU1!h[}l,C}z8IUnwCaQKz5|WJ8k_/)e!?#&[z,_k:-]ty_Kniw,gT)&!C' );

define( 'AUTH_SALT',        '^Hm:{k5cfKN)<Oo@S+u#&xK%_0D(?R87OQGz07tlQ:=P* >7!~w[^;#%KD|%v/L@' );

define( 'SECURE_AUTH_SALT', 'skXnQ?c@7(fMPOj7F$p+C5+GfOo{NCK!xa4Z~FaB/=9#*.r+`(-<K@vvd/b%R[c0' );

define( 'LOGGED_IN_SALT',   'v|2ikhnEKXx3AU53rS?rhw&Qb-3gk6w6|1kQH !K|^[Z{L]yMO34z/8LuP_4%qiz' );

define( 'NONCE_SALT',       '.a?HbN}V-|cRC&srC|VGylTHClZ6zT5.Bf+pyQ1~A9]iC%-J&G6n3K XXV[NZcK[' );



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

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}



/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

