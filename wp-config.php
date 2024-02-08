<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'rafizone_wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'rafi_wordpress' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*:xI6)(jjTUC77Ot?hk5l}ra0k!^FpR9[F;B@!oaat7mTesTyZ9it;MhtRl]lt-#' );
define( 'SECURE_AUTH_KEY',  '~Xf;BHG>8px{CvZoyTi[0X&99qA&l%%K<wsn&66K`IfEf7y |y0?`P>quq2M_]~x' );
define( 'LOGGED_IN_KEY',    '4#hk ENO[n}XuG^fgN)qYl=0A<A?Lc|_P%2`;p*q2Cf~;yA3PfShEs,mrXb^%8ph' );
define( 'NONCE_KEY',        'R7~14T<!.Rc?0jl7ZR4C$31KJ#>_+=~b<q^6GcIf,m&- j|/]kJPN,0Ed mdtKqL' );
define( 'AUTH_SALT',        '(&Stz:UMoYg4VJN;,Eeq4P1FuM&?yH4}mq]ABB,d^BL{xk1$E[=L]Y$Os1]y!91f' );
define( 'SECURE_AUTH_SALT', 'OUuvLZyidlcrQp!dxI8kf{(<!lHN}rf3F7MMl{Cy-~Mcd@-h=ghun+uSU`fs!0@X' );
define( 'LOGGED_IN_SALT',   '2-x(/8_~-BR1;qde@uQ`YChG[a{FMlyqbxT4qQgx/.rwCn4xm1RQn,~-<`&T`ai,' );
define( 'NONCE_SALT',       '+u++^bn6Vn#l|B!vk!dD8 ePp!uJm;nhem&+mp3*/9~Q0PaQ:|D&~/n*eI:5cQDd' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
