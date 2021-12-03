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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u9521263_spaceshopdb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u9521263_spaceshopdb' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'jd76HYniz' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'Tmj{1k0h4.yWsz@*A9PS$K0~3a0*R2dXaACps7O 7zV8QZQjw3;r.7SE3] ):v$n' );
define( 'SECURE_AUTH_KEY',  'VBpqEy*Nk7v5 lY2;+)Ul~gl1l#`$!CavW+i%S5qb*RZ2YRRJ>5Ir3}):m:v|T]L' );
define( 'LOGGED_IN_KEY',    '<PEU[]8n@!ES*N#?jV3$)[.u0C_^`WdaKbypl5a=igAM$zx60wNWLq%kpg6<fZO,' );
define( 'NONCE_KEY',        'XReDEn[nc2CjwaRlLtbek4O]0lpgO7pTP)@uq-mnwP(kmRZ2Fwp882=tVSRIq~6M' );
define( 'AUTH_SALT',        'Jand,|+EGuWOepNf9@HYIOcC@(x7U1n?3]Hey(Ur]R4Dz/Aeq,&qj:F*|WiVl6Y~' );
define( 'SECURE_AUTH_SALT', 'R?:DaUyXlFWqMW!2iz|7wmBJ+L;dIkvZ2moR>{*c64h-oA%KWFG^,d~TK2<{y$R1' );
define( 'LOGGED_IN_SALT',   'B3i8=Kv]=j7i6^7:A~/?e7H|~Cy-SrL[%^;EFR=>%}uWQy%^Mp~Rdfv&vv{I=Z`*' );
define( 'NONCE_SALT',       '|T<TmEQ_q,A881%YY1;4_oRss|<$p3p-gYcBwr91Yk:!MtBxTPLLAeo~jOGl*Bo^' );

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
