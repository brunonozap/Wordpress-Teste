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
define( 'AUTH_KEY',         '/.;SV>ZE<1D#6%9R?Y%BAf@U;,E/>WvcwzKJsP0XScE j6UWu=3=[7Wy.fxNolT;' );
define( 'SECURE_AUTH_KEY',  'WUuD};X`Z&]`;y#?+y/MGh|Py*O5U[l/=8^TERv_h;i>$~|LQwfH1:]T/j[)?/;a' );
define( 'LOGGED_IN_KEY',    'EXD8MaWPI+W@@XggWtU l/2H[hgb_Ysf0Ezzi~fIx!Bt27I1:y)N^E-E-6;tW=0C' );
define( 'NONCE_KEY',        '+Ml2zcX7aiH[FVQ.8xYu~O*.M0*7uPir|QAQ](G/c|RoTnzglTlRR4VB@E?L[+T,' );
define( 'AUTH_SALT',        '%u~@Vp^9th*}91H`7@ae[O[!1HXpE~|WQb5kFc&G7wdkWJ._R!w2_kVKz3llgSge' );
define( 'SECURE_AUTH_SALT', '17Od-1yOciaAEgHs+.8>Ss4L?S4q$wApb?75v;5LF6gPpthvs<G{ fx$Q4br@L,J' );
define( 'LOGGED_IN_SALT',   '1]VoH<hp&7-03;5+Z:C68:`JR`G[|fyU#}eSeF/C:Q.V..-kt/]S#Fyscf^z>MIH' );
define( 'NONCE_SALT',       'd8^G(@i-&EaoLZawXJHXUY0aeN?sx+[nc.UGq%;J,:~Y/~*efmb(.{03{e1LU>dv' );

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
