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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alfama_wp' );

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

define('WPCF7_AUTOP', false );

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
define( 'AUTH_KEY',         'J,b-sd0Xyz:oLC`^lcdD=>daf:`/pc#6MGy:J!/>inM21e^{(WLM)>R;}5Qs!c%^' );
define( 'SECURE_AUTH_KEY',  'Y#-NEdP9(~]3Io3%FC,a>V>%!WfEd~m@{K5p(M`#!Mp=)9D!$iQG**^xeuO>BVyb' );
define( 'LOGGED_IN_KEY',    ' ]GS5RIm@rza-kh`]5?|#5y-Y9%<:hP)[yxS`2B]$cVl-USc@%0SlLx-<;&vUrp~' );
define( 'NONCE_KEY',        '{`jP1^5)<:Q:-)tY*Zk/wP+MX /_39hXzPI>LkSler}DKbF*gz_+r,=Pfe1/,g}d' );
define( 'AUTH_SALT',        'Koa/rdQ5N=&Cz;Pw@QC>1zxKc23NkJQ)oGDHMdd~I-C4`^)27dyo5Z(9R}|r0=h:' );
define( 'SECURE_AUTH_SALT', ']f*w)icH#=v0eKJNL|d#Mj(O1.qZW K1<(!t]CMk[#+M0KieiB<8=;!K8BcKY#n[' );
define( 'LOGGED_IN_SALT',   'P`T{(n(Oi5(rL6N*GB^ruO54/^`ElaCvz;V*;M E8@WsI1(O7XyO,||yG1b}m};v' );
define( 'NONCE_SALT',       'C<+A^P[wza|bx7E5,XtJ6,PV`Zkd|bd!vF{fcC`9MFEcDSaJ>3{v?}d56hjC}]OW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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


