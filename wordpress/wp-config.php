<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wordpress' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!pTo;a`S^&sTE*I]r$oC?mr{Y>h~@ 0:FMb.KMTs?@&&eK#*7)Us* 3r?P{->l,E' );
define( 'SECURE_AUTH_KEY',  '?B*(InO=pS%7.uI=n}W.[`v/7|NFMx]tf]$r*P5y7YR% _v#P51]RW8CsW_u=<&!' );
define( 'LOGGED_IN_KEY',    'Pc%|Wec1WbO|]Z3EsPSU0;ZpTpq%E|oT f@05 K<uQ]0 /{ltV.g/Xz_mmQDrNK9' );
define( 'NONCE_KEY',        'mDh20)#>3>pEa5N?.jek+q* ;czypF];HJbvR98)BJFJEnY:CT+|k5>oHlMh5i4V' );
define( 'AUTH_SALT',        'H$OY]}sk@!sWtnkm-fX[&8f`,pUSaqY=Q~YZmN W%H^#i,O_H)Hh5@%fhnR20IN3' );
define( 'SECURE_AUTH_SALT', '7ytERsr[I6Bu-9*[C^eiRoDxzu#GRMiVNm AbJmg@O]n=}sN.F8Ja:t6bK>kR-b=' );
define( 'LOGGED_IN_SALT',   'kaAz?[N~F1&![cv0|M{l]sx#ys}YCh/6fCS$oID2jYw+Ucy2L_G+n#f}N6H^sD8c' );
define( 'NONCE_SALT',       '1FmH&z9k@<5(EXy,aA?g!8R8>=(I@|#9G<Jir=,I1NP87L4MB+QY}x(CkMbRWP/p' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
