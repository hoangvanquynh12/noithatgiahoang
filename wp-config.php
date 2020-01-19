<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'noithatgiahoang' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3T/@nP<LQ,Z7Q3_D10HM`c]q;}l2^#I.ayib@m,4gW7g^1o..+UweQ+nx)}XXM/9' );
define( 'SECURE_AUTH_KEY',  ')r>JAf*`C<W$sn( F8w55_OMj,z<zvZ+[r*w62yS/b4zj%$SX`cJ.Gl 4b7pkSvJ' );
define( 'LOGGED_IN_KEY',    'Nhtj#3<`<D9ESG*+.36Uvu@Vhz,m/0)T9ax$o7T$a16-4j$#6b^xH4:Ba7dSHX%=' );
define( 'NONCE_KEY',        'w;uFH9fr|>8:aydgtIAXA):`NwaY3bh`iB#oNu}C6Six|`0SwoE(H^I^z){%M`c^' );
define( 'AUTH_SALT',        'OJy;S)W=tQB|.hm#$w#@S-2?<K1Da-Q+,VFHNT<<vIqCxVIOPV[3n->lFo6#KN.A' );
define( 'SECURE_AUTH_SALT', 'Csdmx2W#[B+cfmhg/i6j@4T0I:^)ve(nWi^L9g( CDlFUCg+RKj1oqx&wFY$;>% ' );
define( 'LOGGED_IN_SALT',   '-.R5v+KFqR.wgQfk%=e~JI$a9hDy|F0^))vJva}G/zw)UhnLP(BI5m=EGEqp%BYx' );
define( 'NONCE_SALT',       'rQ.Q68]ca jQ@h$APQZgbPmwfTsf1QIL[.r:oSXrE&8^OJ]Pz!Q{UU6E`lT07?6/' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_MEMORY_LIMIT', '256M');
