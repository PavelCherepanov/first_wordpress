<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'estore' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ckr]6QmS5vDgDu-tR.(k{24/w(_Pm=/t})iV$kMidv_CVpA(_W:%pnv?.).`6q{/' );
define( 'SECURE_AUTH_KEY',  '7GVscFp3$JJ0)V^>yu/B(==]M!aPz7pHq/k5ul]>%_hD4*62QO{XnpNLRmopL/ft' );
define( 'LOGGED_IN_KEY',    'BeVK*zaY[}n8,G+8Sv_3WMuKvFb|lSP+`E//`lyHYo e-7v^bi@]u6fPR7@NxlgE' );
define( 'NONCE_KEY',        'aQ>bhfd.*.r,]aBfeQ[r|5Lm~#>*!N3P,.J>wo1@)Uq5*(/XA:$.uzlIWzb|a7^j' );
define( 'AUTH_SALT',        '+l?{5@2<29/q;f,G-,tZS`d~3j2M3y$I H}SE4<UL@LcGZ;|p^ek!#Gm3)fN#,1 ' );
define( 'SECURE_AUTH_SALT', 'e7QuJK6f5FwgUU6F>f%>%}wr}?WdT.H!j/]Vb@Blz6De~8m,Z;T #`?{Vls;Os2Q' );
define( 'LOGGED_IN_SALT',   'ExyJ-DA6JW.W$z!VdY![52iaitVWj;Mki*#.hrSGw$ak&yys4_zH )`NA,Rsq{g@' );
define( 'NONCE_SALT',       'sC#*xc|Vh4Hn,A~V q2rWNx#oU?Y,tuyZ3L.%jU?ET9l~yoSTXsI Im x=L7x{+-' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
