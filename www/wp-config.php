<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'veriler' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', '' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZL:%>=[D]acQ`ic$8.y[Y,v`SMLX`wv^UxG?1tGsS*#{HmQjFx(HX5c]M:EbsWgH' );
define( 'SECURE_AUTH_KEY',  'f+@N!ap>X2,N-r`?y)0kMYf|vb|e*cN64?~O1*(/;m(;F4W=^=8w~NG%+V:A_ ?;' );
define( 'LOGGED_IN_KEY',    'i>heMI/pMuSL+hN1JT$_2T@<ehZBtjD<:[1pzjLho<lhrhy}uHWJqGo_!||d[P9O' );
define( 'NONCE_KEY',        'TO6)t]E@uWc*6[@`j(!x]`w;YDnf=Eiq!wS%!?Co_t]?=K(]dc]w<r&AW7b6&.4$' );
define( 'AUTH_SALT',        '4zLXj?6E/@pXz$7FDt=}r*o|yeP_$ ~JWFW9Hs?jiCG%TyPSjy#]O?J/l=>LvZ#9' );
define( 'SECURE_AUTH_SALT', '7t%>Vxpg[bPm.g@]tWu&Wsa3~+2PIM@#[z1)5=x)>FyIw_?6/&Uy,_[9(TiQ)>6-' );
define( 'LOGGED_IN_SALT',   'Ie+`bf$+c/x)ZPg/BYYPI.Y&tTEG8H;U]Zd_ v#T2?/2tqWwDx>kS+c/H>Sh@zv3' );
define( 'NONCE_SALT',       'y n[;= cRrglz(*ZMjyvuxX78{y:d:>ad@<GC1o=A=Am~quXaDV,bTOR287A<?-m' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
