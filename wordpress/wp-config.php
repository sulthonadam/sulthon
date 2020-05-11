<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'tekwan' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TT}{{jYK`mgA/DJXK7 )ete wj,VHt}5x2IE0s9Y.2q1Fcp$`JON(+gyXjz^w~r>' );
define( 'SECURE_AUTH_KEY',  '8<!zKbrD}4Am+NdMSmuUbB B9-vxH!cJy-`0SQQUWX~*!,zFTC5N/5veFx(62624' );
define( 'LOGGED_IN_KEY',    'wzsj,acoFxr&PLZw*?g2YYtlUR#V6;:b*?~KSvy~[3wz,>E]_LK[N3!8K*~D% aA' );
define( 'NONCE_KEY',        '>v<)r7{GID4x//7Vo?L`>B:|vy_<3-ADE$h?nJP_<d.8-ciF,d=e3+`i}jT3+t9O' );
define( 'AUTH_SALT',        'NW7~s[4_hdhOMJoSuR?l~yBmu)}dnH8,s2i[66f.AH2`?O2j>@dTHpv!qyy11{B?' );
define( 'SECURE_AUTH_SALT', '|,,Fa8x5,Qgcj`?V zYbUW}8_9?.qeZ*y-3S$Vx9n^z&XjldfxAp_h2p?1UogHc@' );
define( 'LOGGED_IN_SALT',   '5^leCv`*e+imX!LfgyopBe%$R]Mi$BZ2?T4.e<Zh1ugNxKGJF8}=%LZl[+*8P7&o' );
define( 'NONCE_SALT',       'd~y8So1L$)vSVNF4r.W~]G-_0oEgG.FVz;n0QM}8}qRm}CtYP0l4{<b+9R#pHkr|' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
