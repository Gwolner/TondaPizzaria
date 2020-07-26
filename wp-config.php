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
define( 'DB_NAME', 'bd_cursowp' );

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
define( 'AUTH_KEY',         ':;63e5.g6A|j-H$1dABjoINm[4=8P6i>fHW5A;uW^9n?YJJy`1sx(Y.XaQY}i^,$' );
define( 'SECURE_AUTH_KEY',  'R{p^r,?Ck5}]& 5|z}x+}kmiF9jM.>]n?RSd1br+NQqZ#+zU|kW62cg(@UG)qbVv' );
define( 'LOGGED_IN_KEY',    'y!H[]ai6j>!P3cLU %.T%C>P9rW5IQ7Gv-DFPIo$94i/8{XY8B*/?M:0;3K+=}B&' );
define( 'NONCE_KEY',        'K8X(r&yjCw~c5P+g~)Rd)~16%])<HtlCIN<%Jk&%wCEQp!t7wlT!S W;V`j?*Ezb' );
define( 'AUTH_SALT',        '-9vjJyz#l>+@&n:W[X:+*IS~LZV/.c/LMi,jK7X=~JQ)u68xS<%xr-_RnyP{=,_=' );
define( 'SECURE_AUTH_SALT', 'g_z{}B=#o|W-Wmj<`m1G2r$a @HdniEV Q6?-gl3!EE#:D0wBHr1td4D TD&)y`Z' );
define( 'LOGGED_IN_SALT',   '_W> ^Nzep7;eN99cFL?:j}n-@r`Z^QyR|XQ$12B5A3G`oOGGZ@CQRH}IYlC6fni]' );
define( 'NONCE_SALT',       '>!OxF7G{t(bGFsqES<vOA}wMhnABt#nh~@H6>66</jy |zt>K2sVr~nlL U;iU2&' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
