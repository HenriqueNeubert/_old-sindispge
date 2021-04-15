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
define( 'DB_NAME', 'sindis00_2020' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'sindis00_2020' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'sind1q2w19' );

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
define( 'AUTH_KEY',         'G1:f0,cpL.S}@juwTml[h?&x#qxE<zl.gB~Av]7XVrKM |fenTULU5{m.~&6leeu' );
define( 'SECURE_AUTH_KEY',  '|!(qAjZOiM9`4V:x`PN4kcA.V%*Ad*Cskqf%;Z*w,z]Y^G}R!UWuEVfJ2>WF-(83' );
define( 'LOGGED_IN_KEY',    'Rb$Y!5=2W&8D`3m(I@a8s`^n]*Ijp7%K2sX#q_|w.uW;B]_S)_f1JA<Vxd*UfcM|' );
define( 'NONCE_KEY',        'kjjN/`K]Vqe*!Xgu#PH0rsBDVq9FOok$8hrt2!6lO^R6!!|xa9>V6RPa}IQ8VI:)' );
define( 'AUTH_SALT',        '}?qpw^E}MY7KD g0*(YtzFJh2P4;0nVs>f`yV2GnKt;t|`:$9k/MBr/a6pf+Gv@y' );
define( 'SECURE_AUTH_SALT', 'f}N&*{Wg}hYdtCe:=0sl3d~.[)j,1:;aUpSX3Kx~xA.f#1v:?2M,P|&1#8^{A5>0' );
define( 'LOGGED_IN_SALT',   'n%%wwM~ oeK >C.hU0!d|)HXka,esEq.pWh=-TK7P$.:REW]+2B6TP7w{{pYsmUO' );
define( 'NONCE_SALT',       'tu{Sa_VYW,il=U&v ,x]4^X6%.jS0kY:>hUSHn$4^Oy[YI&==tUFf=z-Ux!T?1y+' );

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

define('FS_METHOD','direct');
