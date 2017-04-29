<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sx~]C[uWovCSe<CZ}=8iLBl> %Z3L:tsv|%e%[m[~v[).KE:6HS.ta5LB-IcGD-k');
define('SECURE_AUTH_KEY',  'S:UFjH~Bv%yK2=A gilWl5w~B)<c@6y*U>UG4#^(*{W0a`>]EwIxL>n^P`_jzKX?');
define('LOGGED_IN_KEY',    '}|O5mSh1GP;.4,$>B0T]1pW|bPfE$aqH@xYxu/e<.7xs)PWSi+[D1QE_=&`uA0MY');
define('NONCE_KEY',        '><kqL5r-EHP1A,SntkJm|cXxaixmg3p5U:NV00Ig4.?/;G P$&w-8uo-?QFL{TS.');
define('AUTH_SALT',        ';8S)s7,moxGN),9dy~Soq7-K2D3j{2}1VhMgXFKB2|jQq6O_;+Re6lK+UO~~.AQq');
define('SECURE_AUTH_SALT', '=8MDCkIvl(x& NXj[}VRPK|2HO5>$22Q2v;kN >M@S?&nlr,F3@&%YLCP%n<Q]{p');
define('LOGGED_IN_SALT',   'kXzGH7}0><Wi1-G5.&=1~&gLzy`?_t<ww9py#.i}=Aq,o(4ve=9~Am,:DCVwb0`B');
define('NONCE_SALT',       'W-el$O.<`4[lk@$:lgg=ni]6VBCP0y,P3><`&It{(9,=poB#F]Z+->[4R#/GxAdN');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
