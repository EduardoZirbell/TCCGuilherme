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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'farmacia' );

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
define( 'AUTH_KEY',         'waW0W<fNho/I~LW PY~PFhYSZ^Komf,F75^vw&<[kOb0x-^r$x?z}% `!ur,5U$D' );
define( 'SECURE_AUTH_KEY',  'F`ooAxhqdp4UG)w~T:3~&!JPO=35$?3/#yzYKS/_ygTt)quEVf@eA-D$RCf*V4j!' );
define( 'LOGGED_IN_KEY',    'Z|rv7Vl_+2f-cym {%=E<(O`e>4CPw$/9rMYsnQ}H,qm@;D&=dD?e``F%<yzp&!)' );
define( 'NONCE_KEY',        '}%@qwgc{AA?8d>wd`-:+CKnaAIPw>&%pAG`{2D(SwE#ecUzk)+lTy1AMU*EL/%{4' );
define( 'AUTH_SALT',        '2/X!{1bf]`[UzJa{xeHEQv3y4n3;-Lq+fLh;}uOSE=Ou:O.Tu>hAT<+&~2ikz7Pa' );
define( 'SECURE_AUTH_SALT', '7SPlqFb[vsQwRVL5sChIzCnXOd/16S30p;dAfB9IvPlL4}BuDCaVb*W)`xIx;c q' );
define( 'LOGGED_IN_SALT',   'GG=YOF%s1YW*|} #SB6{2q5im-I..6iq+;iH-^vsG<-fj5hXmE(ZSOr|n%JuN9!5' );
define( 'NONCE_SALT',       'zm__^nwCk1i!P_#3Dey%G1yI?RErCHMN]9m+_dpMkWJ,A-I(~|iFpcrta:afKF)R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tb_';

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
