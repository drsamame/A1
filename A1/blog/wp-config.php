<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'wp_galego');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z-gtbw4/,t)r>u+{aUh0i{EubVI[qNL}iXs-d4}!uzt=B2dm%5hC5);Pj!Zx_|VD');
define('SECURE_AUTH_KEY',  '~3BQboa %[YK&?8k3xIc.CuIZr>oDiu|)a+e0GwdDQ.$@A|!48erHS3M|E2]C&U1');
define('LOGGED_IN_KEY',    ':cj;cH%wTW|.3*4P@Oj*OjBvlDpvrTQw*d8a%>.d<~x:8J<Yh]*X}|G^38AX^ps;');
define('NONCE_KEY',        '_+Sfn@T*1m:YpVXJ>$i5.|7*9BtwT`8=<8]*#+{@%|- 3sVvmrqyRN~nKl;_.:$W');
define('AUTH_SALT',        'W&rB0]#`/XJH-:DjsG7GwE[DG_eOj7,p?rUQ;Y-5T9 oi%bqH ^xSI:LT%=WP=9X');
define('SECURE_AUTH_SALT', '}rSKLb%mC<d7B[tpKH:dmb*u,-.|v,Lpos3FMA/kCOI_45h~q|TihWSI<[GIda-7');
define('LOGGED_IN_SALT',   'L8@O9Sy/TT9UnAwtxC?M:c2?p@T#?VnvaniQOl:5ny?j<7y6|u#|c~s(o:+bwvo}');
define('NONCE_SALT',       'Firk`f_i6v|DdMI;0XI:rXnXiHn58d*Y;n)GC@qt#gi~>{w)ArN5FlRFR)a^r-Rj');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_galego';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
