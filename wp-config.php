<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'majab' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LXa`[#^P/2/t;_#LO4eXW,|iovaLvSDj.$mG@.U:|+#qVnj<Y1ZKWb;@V23g/L-Q' );
define( 'SECURE_AUTH_KEY',  'a~[FjY|oiV_,~ 24MZ4Wt}.xQRROtw.r{]3ve}tL$:zzl;(~;ppd4!6VdgpOH0~F' );
define( 'LOGGED_IN_KEY',    'b,EN=2Trb>9zR`rEZ~,GRvdf6AQ2^Y-cKbug*`G};nJZHY.AUrgy`]j~pg8F=K,q' );
define( 'NONCE_KEY',        ';tZ2[Rogfz<99>sM]h(!o=<m.!]pZ=tr:p{=lGB]HshEs9YVCd>5rP/%uTLzV$*l' );
define( 'AUTH_SALT',        '1n`,k1_UQ;V0JnTNugkeh`Zqz3=-]sz#U$t=tI}s fGo71x7i`:(&yTE:2A+stfm' );
define( 'SECURE_AUTH_SALT', 'vDSOgX,QbhWItS.;g/L9]=J&=}5rF)[dk-|wy8%kYL]GTJQlD,xm6gYz=S1D(Xgs' );
define( 'LOGGED_IN_SALT',   'P&$5bt>}Va6 J.<Wy*a/83yb2C&w r> !]F{A<<oV2?)X6Dt-IeAuF=r_GCfM42Q' );
define( 'NONCE_SALT',       'Qv$cy(bN&#S1eIiW)p&H~&#S_*i(s$j4g*Sl!ol1R^h9M_tfl3uI@mCL@R.X>K}-' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');