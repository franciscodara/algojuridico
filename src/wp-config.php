<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'database' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';T:uXuX1Tgo?OkqH&+EE99#dVbG@UZP0-,t3lL,6C)GO(P&/}U2Q}6g{>9eW(ofN' );
define( 'SECURE_AUTH_KEY',  'b/MsX$jPfUVjRW<$!LUtYks<57;$Md`-XX>tAXyfexPyf)F_LftWnyddkC$K*#fM' );
define( 'LOGGED_IN_KEY',    'x,t0/uEwZ6R:L$Lv7`7x5()&T4B1AU4/B#2J^u5ND3$_fttLDPo,t~&5T&fZCA+s' );
define( 'NONCE_KEY',        'qhV~c4FJm5%s?aP/}FUal{HMH!{TPD-3T<P4P)(WemdI7&w8Wds37<;Bsf*AI)a#' );
define( 'AUTH_SALT',        '?^l}qrp,L4?}}o)RNMwub3a^%f;x%~J(1)S4x2MUkJQJr&pGSV?Q0R*h%*7CCpI<' );
define( 'SECURE_AUTH_SALT', 'G7oP9g0gy`ei|Og!t:uENOVrFKa9DRj,o-!7Z]-)_4)fyW2Hhrd)~!M,&kELv+t6' );
define( 'LOGGED_IN_SALT',   '|/>^Dx)^Na0IFDFN_</JbZ>.)-V+%,pZ^BqL_B?  dIZQONW.4TO?B}=Xv7pa)w|' );
define( 'NONCE_SALT',       'WNM{::+sl=.zF_fQ$+`m7p3S3L+%kV@(n(i%uAHYa7us,XT)=:_w0}]-Pnkgk;Bg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpalgo_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
