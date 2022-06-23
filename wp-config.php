<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'playwav' );

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
define( 'AUTH_KEY',         ']a;]g~XrQu#:*)/symx0M?Vw&6hQXZt!)t5XA@<<*Z6+hi{DIH>edtC3E-{Sr<{P' );
define( 'SECURE_AUTH_KEY',  '^/6PS#8Q5bVX#Ft!sg5~o4mM%AamVzEQk5x4K]B$>2BX=I;(@gya~WJhvfOzD:Kk' );
define( 'LOGGED_IN_KEY',    '*~=Gp24qr ZPt$BZmqKG|2Cf5skU..Zlg&KO#p1rlW+asQbP`:SAtV`JyrTzlaV4' );
define( 'NONCE_KEY',        'iDj[SCgD;/vS;]C=I!VMpkca0J*jTI*4*[=z[$J(F$bq5[i]O4NyHBwy06@5z)Hy' );
define( 'AUTH_SALT',        '.#UM`zi,{+Y84/!xtc)Pbx83_>2dR>oN}x%8dG$/W#x6m=x^vCMr7zud7m9zMoGL' );
define( 'SECURE_AUTH_SALT', 'Abw,x.u@QrA|)~kQuY#}GPSULnLCC4gqwgFR6 p$8ZBN$0L>S28nd^?)9[f `$oe' );
define( 'LOGGED_IN_SALT',   'jU@2{x!C72YA;(tI~abosv/xb?Zq}=dlh;e5^g,(#0?PjKDO-H}&AGA@?a@YjV^^' );
define( 'NONCE_SALT',       '[xFSs<K+f,Q@Y517~j(FR%uTybs(D>2E4s`!BknK9!^U_e1fO};wA,|ptNb?&*|{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pw_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
