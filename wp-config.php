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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2laUyp7Zbj}v_amkF5L(!`eAQuj$u:%[?A`0S*jdsH-X:L@Fy4Z-r[YqDlU8^.~c' );
define( 'SECURE_AUTH_KEY',  'B`TNf8fE~8<1^W{@y]a,4zoPHm*RKb]@2p!mw{KFg7xF m$^LBWEDGkEbz3`3{U4' );
define( 'LOGGED_IN_KEY',    'pGk-8T{[}kD&,YR!/L%*1yArF`=@}2S}}f`d`k-P!Dl2`m{]ke^V`V`kxD:W*=D2' );
define( 'NONCE_KEY',        'To@76OCiC=2OHli4~lUe?fAyvutg|@&$lO=O()^j#/LDU-eF<KcJOGZ[Kbhektm]' );
define( 'AUTH_SALT',        'f4b1CV=82jJ_Y/~- 58*~Y0 :X9 rUO_GUSb*y|.</udJD7qoc{{vK=U:gat0[.#' );
define( 'SECURE_AUTH_SALT', '7?XMw%b}N1c&3@0lU1![.[0dY)#P=@=[/[LpPD;J~z?WXCuI:B.D0j)c_N;-7f)[' );
define( 'LOGGED_IN_SALT',   ',<hW]X.i[/0@9@N,I,fTo.y4CsbH-?IU~B4t]nh3AIc/4G!f,_Vqytj}RqHkR8M*' );
define( 'NONCE_SALT',       '-68wwE]zQU99h}(DvXRXNMrf9^mtVQ}6dq9{]d,rX48u@97Ovs)U^RLW7MoC-./y' );

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
