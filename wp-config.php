<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bsdv_site');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'bsdv_site');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'bsdv_site');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'lJW.e.a6r#?Ar,#=B0JfU0j[|AXV></a=.Y!>?x7,,>^L2qAD U&}a[wu,$>)`YW');
define('SECURE_AUTH_KEY', 'y:8cv7g}RB;>z[Y0Gqc{t.O,D3rv&ys3aG.6u/ WMF!e =Zu)MvKK`>.fnkdpQ;b');
define('LOGGED_IN_KEY', 'OR1n0SSgdRDt4/^EAjNV)r,@?d&o_m$ABn/WQA.=GR[;kd}o$:EK:vvM+JTyl?# ');
define('NONCE_KEY', 'Ge||0Ujs--VG4oa]W&a2dz{OS[bY$<6Dd$4`K=Shw;7{/uYab<xHrwk9j#Vcg=pf');
define('AUTH_SALT', 'G*>u|P%bu)4[k{&6b}q&@FO3I;LJuP;V?WeDOzPTFE)-0AeBwyB}+*XdkNG&.%==');
define('SECURE_AUTH_SALT', '{02j1*UAV9|iosq@@yww?7c!-pmzZ_Xf27#n9RqU[,:8XVICBBC/TscyMy~._ ns');
define('LOGGED_IN_SALT', ' ;Bd(/+K zvSM_XQC@KG|52{dIh9=EII,;!_0YFh|F`P8NREb9qIVMj9Hs)vX+6~');
define('NONCE_SALT', '<~ILvc%`&stV0;OO{AUYY;{U R2bekgW!1v@%U*CI`v9iL*S5|NP)J(8Nxi<Z[Z}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

