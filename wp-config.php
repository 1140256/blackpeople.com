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
define('DB_NAME', 'Bp_base');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'RdLR%`6iyF<gV*Z#3@/yje^7Xvv/un=n)ExsEj[ ;R?l7lyjz i|FlJ6Gw./@[8I');
define('SECURE_AUTH_KEY',  '<.auf~z!_j ObvSFm<|6Q@MW}s]>T?%htR)[K<1*^sKOB$g]EPE1|j8q}r?5=k1k');
define('LOGGED_IN_KEY',    'D!>x,f?PV1TVLKs2}~YM*q(2GI@3)_}+a/Ci>Hz01&fLg>oHC>>4~J=L72Zpu5b%');
define('NONCE_KEY',        '{z02st2zj2y[UTcMS1$ec87}Gx}en0Kp98]vHT8mW~^fXE8[J)weVFAPWtCfPw|a');
define('AUTH_SALT',        '0U=1I0f`utDm(}^J*jRa~!E=BiQp8(s#~R_}?0Kf7I4_:_EwXBiyV&Hp(.XC$[h(');
define('SECURE_AUTH_SALT', '<~^(*yWv#=R,1,Q|n@O(C$vxSgL@/<2b!]f<9sac%U*y$d2FS${&xHb:Yn[c~0Vk');
define('LOGGED_IN_SALT',   'x]duf;Lugph1AvV>H-*>a+S4koszY#U)/7,!tU]+~Ju:w@#hRM<8`*G2{]hzQXs)');
define('NONCE_SALT',       'p,0;b@u~d3Z{X$=$ %2Qu4eEuTT78a!8QWKA~ H}M8e&Jmn@1&Ri^B/z@}Grhmg7');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');