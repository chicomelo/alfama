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
define( 'AUTH_KEY',         'Clu)@^xomZ`nH4?.ABa%[6C#b#,oq,:Pj5zuJ(+A1u}nB[jLRf>O*mMDE9]4j+cU' );
define( 'SECURE_AUTH_KEY',  '90_.h2nrhc)iZW:FfOjwv`=-lw};(XLN|!K3Hv@KHFFH}J-Q}?cW}C(mmG-7zpoA' );
define( 'LOGGED_IN_KEY',    '0.=j=SA44+0AzJL2qU<ibZm|<,r(Ede5)R>d{!Fl8h@}R&]3K2y=Peg*yr$zKW:0' );
define( 'NONCE_KEY',        '( +((Kw~?9o??##oz&n9G&VRYRLWHp&te5${?yG Ug;[u_BR+YfCtBzC-+v,(y&]' );
define( 'AUTH_SALT',        '`qWoI!R]Tgk7Hg}IXUaRbG{9{NF`?[yut=&7rC:u/D|lw4H@8dr8#Cp^rwqy98=R' );
define( 'SECURE_AUTH_SALT', 'x6?~6;/&;Q7yd~vgo:<+I[/^9G:RUBN64~mL,>wM7!AUgO#IF9[HB&U*0=KbpmbO' );
define( 'LOGGED_IN_SALT',   'f0R@+[X0A=(iHnoDs/y4:q6&1}.$MmFd*5<4aV7vUGg1j>2?puhl+HNbm{7oiTnF' );
define( 'NONCE_SALT',       'X#&DfMA-z[1(B_}W]:)f%~iW6XHPK}62fn}L?Z4f`R|5+olAG(/.DAFK]g_28k=?' );

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
