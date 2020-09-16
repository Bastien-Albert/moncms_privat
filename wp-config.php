<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mon_cms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@R*jT~VC p;Ba1>_mjj,V9=*g]#~j/!%<OxEIwH0QJXZdi.nke<`X!D:F8o=n@p_' );
define( 'SECURE_AUTH_KEY',  '*#>BIf(GH5XC)Z;{my0uH/Vk5X1mdc$+ YP)gxn2(XX`Oc#@cQ&zO=dN;gdd_{0k' );
define( 'LOGGED_IN_KEY',    '5kz<ygD.)f`z16_Q#%W,IMj2e!H)E_)hS}[`uwpJm^k@qtQ%f9,VWr@8398k7Z{k' );
define( 'NONCE_KEY',        'Kz&$kEcy?{=+EDSVVD`fQf!lsb*u;j;k72d[dWNZyMi*?|D{`=?[^Okp4=02(Txu' );
define( 'AUTH_SALT',        '18YX=1FA;=re0~aGeUptWQ3+X4D #sj>y/RfLcOxUCC:l#-L ;lTxtC/AEYc)~(R' );
define( 'SECURE_AUTH_SALT', 'Oc:JSUM?vso55XSvqaZLL#Jt`:J.o`6#d@#Ip$96A|avpx*KR-0ad~s%LVh@c:CS' );
define( 'LOGGED_IN_SALT',   'o2Y[#,-2N9/oaT]>%xHj]396&8=GS%[)^p2j57D]F|m}:.Blx3p@xOCw)5pnRKga' );
define( 'NONCE_SALT',       '/1!@Q?~!NNDv{Q#IaUH-i={Iux`a$?}6QBvkr]z&]YcgC~X]i2T$0$<Bton}~,VI' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
