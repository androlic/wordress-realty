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
define('DB_NAME', 'word');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'HNG^~17[#+}UoB$0O&:(2nS(Y?54A9aUNin{zjCqBM^zKJ0P6U[Mghc%gF,0_b}A');
define('SECURE_AUTH_KEY',  '8AgfZCG%6%,qkpmsU}=54#3lD~1C=TfN&W%>L1$wp92}H{cV@qvrv{_IeL&c{`|:');
define('LOGGED_IN_KEY',    'Ftj0@[-vR.F8eNktdi0gYWfWt,=lpVaU-Poondu1v+`iFG:hj9* OTuWvrJQa>E ');
define('NONCE_KEY',        '>Guq.-q82cXyfDSu5>V)g=dK9C;Kdpv?IS-]0`P65#PhFBA)`>Q|D|`#6~z>ka*l');
define('AUTH_SALT',        'n,:4GiN?mt@;@G T0grKsx2&4iiGrQ-OlW`w@WjyH0T*;;)bj|`((&>Pn;I%}FYu');
define('SECURE_AUTH_SALT', '-TG!v{;:a~4%)k.&gm*uJksFrn7nTh>&)?)2Txj}t Q!#G*<T_hs]?>S~[b:{q|;');
define('LOGGED_IN_SALT',   '?}r-V*!65#$>jD.Q>rz{pr;n/vK$|;F[Wag;!hKtTd}7+1Q$C)?p(KF`7q57,cVg');
define('NONCE_SALT',       '*(KP*>_+|muz`b>.3RhSX_ApIwPOkd*q{>83>:IUqE^|~)aCm:w9G^lD5~[tlyI4');

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
