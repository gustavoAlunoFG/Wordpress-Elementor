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
define( 'DB_NAME', 'wpelementor' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'o8D@lmsj`kQqWXOlg!)2L/=S]1VW_P mAv<i1_vx24=#H`tPvJ-;#r_^7Ngm#hBo' );
define( 'SECURE_AUTH_KEY',  'ZIGQFP_Xu3P&r$=fbQnmv$s*HGkPs|z%}y$d?@QtXubj@[2{tSo3fAv=-uX.bl6w' );
define( 'LOGGED_IN_KEY',    'Yd`-g>M*%@(IKN|6ZA?VAO-W*{UF9aFjYw=8?M2NpDHv@G3o<web~[4a2o}YKw@;' );
define( 'NONCE_KEY',        '>nWw](&a (|G(+4@`uX>_bJ9Z2)GLpD N.|vB6<FDip9}SA-2_6+n[8d()L,^rSS' );
define( 'AUTH_SALT',        'f$V9^fo}toNMV~/7<FmiUv^&EOk}V5Z[Lb5rr`MO(#C-(mOz.-(w|< (Itzqj+:R' );
define( 'SECURE_AUTH_SALT', 'O?ibK5kBZMkq.h.)Otbr.lwHhT&~AzzYO76qPXJ(w=K1sD+DPG?WI;n=PU)E][L(' );
define( 'LOGGED_IN_SALT',   'C5y/p`.&#uQFfrr~cVk!CKU&*GH=z_uvb;VRDIt>A_0e0CDXIOlbPiEna<7qO81s' );
define( 'NONCE_SALT',       '<QAz}T[oCVHcRF+t}0ODInTY8<E-uMjTLKbIna:O/4^BP]E+1f)!QY&Ce|P0dHig' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
