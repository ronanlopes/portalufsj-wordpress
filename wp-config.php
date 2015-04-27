<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */


define ('WPLANG', 'pt_BR');

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XF+JNV5I2z2TWv@Apv(c;`f|h5[AI#Hr~ko*S)5&t]uHhrI`h0sbYPb`gEh/WnE)');
define('SECURE_AUTH_KEY',  '_MyO]}sXFC9>Wn4G$yq][)>JJ@PQBwpV7CV rCxWwahUiGgLeZ0[)Y?0m.qUY#<v');
define('LOGGED_IN_KEY',    'A4oYg2ct=SDUeL4+,.P@~3IEw@KV.@0Y>&dtZ[  7tCO)&))4o>|-GH5A>r0^I%j');
define('NONCE_KEY',        'XZ Q~~i~tRgLS*.t_WR%T<u}TzY*eGG^8WI@qYU=Qgf8ul$+BSH-GO5q9H@GE[{i');
define('AUTH_SALT',        'ZDrHB2MYuGwF-O+AD}@WoLfUS&]xAd|{Yhndw|]Icv8O Q70*i8w|Zi( hHLiZ73');
define('SECURE_AUTH_SALT', ',$|(;CmCsi(03kY<UzJ,5+bRVr$TR?X*>r>$UPobT#87:#cUIyZ=Ryt!|,=/tTr5');
define('LOGGED_IN_SALT',   ' [oYSFv/?Y&XY<JY;j,Z2l1[KZ@Leh~C-|X-6Ea#tmdGxK@Tr1BZ+t5>|ln[=r!G');
define('NONCE_SALT',       ';9NoVuF&|o(@{Fz2!Vqt;_/R6dT%(6t(X)zX6%Qs0us:??X1KKymZ0[.1U,&:<q ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
