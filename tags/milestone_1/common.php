<?php
/** 
*
* common [Russian]
*
* @package language
* @version $Id: common.php,v 1.129 2006/11/24 14:59:13 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> '<a href=\'http://www.phpbbguru.net/\'>Русская поддержка phpBB</a>',
	'DIRECTION'			=> 'ltr',
	'LEFT'				=> 'left',
	'RIGHT'				=> 'right',
	'DATE_FORMAT'		=> '|d.m.Y|',
	'USER_LANG'			=> 'ru-ru',

	'1_DAY'			=> '1 день',
	'1_MONTH'		=> '1 месяц',
	'1_YEAR'		=> '1 год',
	'2_WEEKS'		=> '2 недели',
	'3_MONTHS'		=> '3 месяца',
	'6_MONTHS'		=> '6 месяцев',
	'7_DAYS'		=> '7 дней',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Ваша учётная запись уже была активирована',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Ваша учётная запись ещё не активирована',
	'ACP'							=> 'Администраторский раздел',
	'ACTIVE'						=> 'активен',
	'ACTIVE_ERROR'					=> 'Вы ввели неактивное имя пользователя. Пожалуйста, активируйте свою учётную запись и попробуйте снова. В случае неудачи свяжитесь с администратором конференции.',
	'ADMINISTRATOR'					=> 'Администратор',
	'ADMINISTRATORS'				=> 'Администраторы',
	'AGE'							=> 'Возраст',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Разрешено',
	'ALL_FILES'						=> 'Все файлы',
	'ALL_FORUMS'					=> 'Все форумы',
	'ALL_MESSAGES'					=> 'Все сообщения',
	'ALL_POSTS'						=> 'Все сообщения',
	'ALL_TIMES'						=> 'Часовой пояс: %1$s %2$s',
	'ALL_TOPICS'					=> 'Все темы',
	'AND'							=> 'и',
	'ARE_WATCHING_FORUM'			=> 'Вы следите за ответами в этом форуме.',
	'ARE_WATCHING_TOPIC'			=> 'Вы следите за ответами в этой теме.',
	'ASCENDING'						=> 'по возрастанию',
	'ATTACHMENTS'					=> 'Вложения',
	'AUTHOR'						=> 'Автор',
	'AUTH_NO_PROFILE_CREATED'		=> 'Не удалось создать профиль пользователя',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Расширение %s не разрешено',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'Не удалось загрузить аватару. Возможно, данные повреждены или недопустимы.',
	'AVATAR_INVALID_FILENAME'		=> '%s является недопустимым именем файла',
	'AVATAR_NOT_UPLOADED'			=> 'Загрузка аватары не удалась.',
	'AVATAR_NO_SIZE'				=> 'Не удалось получить размеры указанной аватары. Пожалуйста, введите их вручную.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Файл загружен только частично',
	'AVATAR_PHP_SIZE_NA'			=> 'Слишком большой размер файла аватары.<br />Не удалось определить максимальный размер, установленный в php.ini.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Слишком большой размер файла аватары. Максимально допустимый размер - %d Мб.<br>Примечание: это ограничение установлено в файле php.ini и не может быть превышено.',
	'AVATAR_URL_INVALID'			=> 'Указанный вами адрес аватары недопустим.',
	'AVATAR_URL_NOT_FOUND'			=> 'Указанный вами файл аватары не найден.',
	'AVATAR_WRONG_FILESIZE'			=> 'Размер файла аватары должен находиться в диапазоне от 0 до %1d %2s.',
	'AVATAR_WRONG_SIZE'				=> 'Размеры аватары должны быть не менее %1$d×%2$d и не более %3$d×%4$d. Размер отправленной аватары - %5$d×%6$d. Все размеры указаны в пикселах.',

	'BACK_TO_TOP'			=> 'Вернуться к началу',
	'BACK_TO_PREV'			=> 'Вернуться на предыдущую страницу',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Доступ к конференции закрыт для вашего адреса email.',
	'BAN_TRIGGERED_BY_IP'	=> 'Доступ к конференции закрыт для вашего IP-адреса.',
	'BAN_TRIGGERED_BY_USER'	=> 'Доступ к конференции закрыт для вашей учётной записи.',
	'BBCODE_GUIDE'			=> 'Руководство по BBCode',
	'BCC'					=> 'Скрытая копия',
	'BIRTHDAYS'				=> 'Дни рождения',
	'BOARD_BAN_PERM'		=> 'Вам закрыт доступ к конференции.<br /><br />Для получения дополнительной информации %2$sсвяжитесь с администратором конференции%3$s.',
	'BOARD_BAN_REASON'		=> 'Причина: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Вам закрыт доступ к конференции до <strong>%1$s</strong>.<br /><br />Для получения дополнительной информации %2$sсвяжитесь с администратором конференции%3$s.',
	'BOARD_DISABLE'			=> 'Извините, но конференция в настоящий момент недоступна',
	'BOARD_DISABLED'		=> 'Конференция в настоящий момент отключена',
	'BOARD_UNAVAILABLE'		=> 'Извините, конференция временно недоступна. Пожалуйста, попробуйте зайти через несколько минут',
	'BROWSING_FORUM_GUEST'	=> 'Сейчас этот форум просматривают: %1$s и гости: %2$d',
	'BROWSING_FORUM_GUESTS'	=> 'Сейчас этот форум просматривают: %1$s и гости: %2$d',
	'BYTES'					=> 'байт',

	'CANCEL'				=> 'Отмена',
	'CHANGE'				=> 'Изменить',
	'CHANGE_FONT_SIZE'		=> 'Изменить размер шрифта',
	'CLICK_VIEW_PRIVMSG'	=> '%sПерейти в папку «Входящие»%s',
	'CLOSE_WINDOW'			=> 'Закрыть окно',
	'COLOUR_SWATCH'			=> 'Палитра',
	'CONFIRM'				=> 'Подтвердить',
	'CONFIRM_CODE'			=> 'Код подтверждения',
	'CONFIRM_CODE_EXPLAIN'	=> 'Введите код в точности так, как вы его видите на экране. Код является регистрозависимым и символа нуля в нём нет.',
	'CONFIRM_CODE_WRONG'	=> 'Вы ввели неверный код подтверждения.',
	'CONGRATULATIONS'		=> 'Поздравляем',
	'CONNECTION_FAILED'		=> 'Ошибка соединения',
	'CONNECTION_SUCCESS'	=> 'Соединение успешно установлено',
	'COOKIES_DELETED'		=> 'Все cookies, установленные форумами, успешно удалены.',
	'CURRENT_TIME'			=> 'Текущее время: %s',

	'DAY'					=> 'день',
	'DAYS'					=> 'дней', 
	'DELETE'				=> 'Удалить',
	'DELETE_ALL'			=> 'Удалить все',
	'DELETE_COOKIES'		=> 'Удалить cookies форумов',
	'DELETE_MARKED'			=> 'Удалить отмеченные',
	'DELETE_POST'			=> 'Удалить сообщение',
	'DELIMITER'				=> 'Разделитель',
	'DESCENDING'			=> 'по убыванию',
	'DISABLED'				=> 'Отключено',
	'DISPLAY'				=> 'Показать',
	'DISPLAY_GUESTS'		=> 'Показать гостей',
	'DISPLAY_MESSAGES'		=> 'Показать сообщения за',
	'DISPLAY_POSTS'			=> 'Показать сообщения за',
	'DISPLAY_TOPICS'		=> 'Показать темы за',
	'DOWNLOADED'			=> 'Количество скачиваний:',
	'DOWNLOADING_FILE'		=> 'Скачивание файла',
	'DOWNLOAD_COUNT'		=> '%d',
	'DOWNLOAD_COUNTS'		=> '%d',
	'DOWNLOAD_NONE'			=> '0',

	'EDIT_POST'							=> 'Редактировать сообщение',
	'EMAIL'								=> 'Email',
	'EMAIL_ADDRESS'						=> 'Адрес email',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Ошибка при отправке email в <strong>строке %1$s</strong>. Ответ сервера: %2$s',
	'EMPTY_SUBJECT'						=> 'При создании новой темы необходимо указать заголовок.',
	'ENABLED'							=> 'Включено',
	'ENCLOSURE'							=> 'Ограничитель',
	'ERR_CHANGING_DIRECTORY'			=> 'Не удалось сменить папку',
	'ERR_CONNECTING_SERVER'				=> 'Ошибка подключения к серверу',
	'ERR_UNABLE_TO_LOGIN'				=> 'Ошибка авторизации. Неверное имя пользователя или пароль.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'Указанный путь к конференции неверен.',
	'EXPAND_VIEW'						=> 'Развернуть',
	'EXTENSION'							=> 'Расширение',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'Расширение <strong>%s</strong> было запрещено, вложение больше недоступно.',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'Часто задаваемые вопросы',
	'FILENAME'				=> 'Имя файла',
	'FILESIZE'				=> 'Размер файла',
	'FILEDATE'				=> 'Дата создания файла',
	'FILE_COMMENT'			=> 'Комментарий к файлу',
	'FILE_NOT_FOUND'		=> 'Запрашиваемый файл не найден',
	'FIND_USERNAME'			=> 'Найти пользователя',
	'FOLDER'				=> 'Папка',
	'FORGOT_PASS'			=> 'Забыли пароль?',
	'FORUM'					=> 'Форум',
	'FORUMS'				=> 'Форумы',
	'FORUMS_MARKED'			=> 'Все форумы отмечены как прочтённые',
	'FORUM_CAT'				=> 'Категория',
	'FORUM_INDEX'			=> 'Список форумов',
	'FORUM_LINK'			=> 'Ссылка на форум',
	'FORUM_LOCATION'		=> 'Место в конференции',
	'FORUM_LOCKED'			=> 'Форум закрыт',
	'FORUM_RULES'			=> 'Правила форума',
	'FORUM_RULES_LINK'		=> 'Посмотреть правила форума',
	'FROM'					=> 'из',

	'FTP_FSOCK_HOST'				=> 'FTP-сервер',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'FTP-сервер для соединения с вашим сайтом',
	'FTP_FSOCK_PASSWORD'			=> 'Пароль FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Пароль для входа на FTP-сервер',
	'FTP_FSOCK_PORT'				=> 'Порт FTP',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'Порт для соединения с вашим FTP-сервером',
	'FTP_FSOCK_ROOT_PATH'			=> 'Путь к phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Путь к каталогу, содержащему phpBB, относительно корня сайта',
	'FTP_FSOCK_TIMEOUT'				=> 'Тайм-аут FTP',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Время в секундах, в течение которого система будет ожидать ответа от вашего FTP-сервера',
	'FTP_FSOCK_USERNAME'			=> 'Имя пользователя FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Имя пользователя для соединения с вашим FTP-сервером',

	'FTP_HOST'					=> 'FTP-сервер',
	'FTP_HOST_EXPLAIN'			=> 'FTP-сервер для соединения с вашим сайтом',
	'FTP_PASSWORD'				=> 'Пароль FTP',
	'FTP_PASSWORD_EXPLAIN'		=> 'Пароль для входа на FTP-сервер',
	'FTP_PORT'					=> 'Порт FTP',
	'FTP_PORT_EXPLAIN'			=> 'Порт для соединения с вашим FTP-сервером',
	'FTP_ROOT_PATH'				=> 'Путь к phpBB',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'Путь к каталогу, содержащему phpBB, относительно корня сайта',
	'FTP_TIMEOUT'				=> 'Тайм-аут FTP',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Время в секундах, в течение которого система будет ожидать ответа от вашего FTP-сервера',
	'FTP_USERNAME'				=> 'Имя пользователя FTP',
	'FTP_USERNAME_EXPLAIN'		=> 'Имя пользователя для соединения с вашим FTP-сервером',

	'GO'						=> 'Перейти',
	'GOTO_PAGE'					=> 'На страницу',
	'GROUP'						=> 'Группа',
	'GROUPS'					=> 'Группы',
	'GROUP_ERR_DESC_LONG'		=> 'Описание группы слишком длинное.',
	'GROUP_ERR_TYPE'			=> 'Выбран несоответствующий тип группы.',
	'GROUP_ERR_USERNAME'		=> 'Не указано имя группы.',
	'GROUP_ERR_USER_LONG'		=> 'Имя группы слишком длинное.',
	'GUEST'						=> 'Гость',
	'GUEST_USERS_ONLINE'		=> 'Сейчас на конференции гостей: %d',
	'GUEST_USERS_TOTAL'			=> 'гостей: %d',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Сейчас на конференции гостей: 0',
	'GUEST_USERS_ZERO_TOTAL'	=> 'гостей: 0',
	'GUEST_USER_ONLINE'			=> 'Сейчас на конференции гостей: %d',
	'GUEST_USER_TOTAL'			=> 'гостей: %d',
	'G_ADMINISTRATORS'			=> 'Администраторы',
	'G_BOTS'					=> 'Поисковые боты',
	'G_GUESTS'					=> 'Гости',
	'G_REGISTERED'				=> 'Зарегистрированные пользователи',
	'G_REGISTERED_COPPA'		=> 'Зарегистрированные пользователи (COPPA)',
	'G_GLOBAL_MODERATORS'		=> 'Супермодераторы',

	'HIDDEN_USERS_ONLINE'		=> 'скрытых пользователей: %d',
	'HIDDEN_USERS_TOTAL'		=> 'скрытых: %d и ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> 'скрытых пользователей: 0',
	'HIDDEN_USERS_ZERO_TOTAL'	=> 'скрытых: 0 и ',
	'HIDDEN_USER_ONLINE'		=> 'скрытых пользователей: %d',
	'HIDDEN_USER_TOTAL'			=> 'скрытых: %d и ',
	'HIDE_GUESTS'				=> 'Не показывать гостей',
	'HIDE_ME'					=> 'Скрыть моё пребывание на конференции в этот раз',
	'HOURS'						=> 'Часы',
	'HOME'						=> 'На главную',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'Статус ICQ',
	'IF'						=> 'Если',
	'IMAGE'						=> 'Изображение',
	'IMAGE_FILETYPE_INVALID'	=> 'Тип файла изображения %d не поддерживается для MIME-типа %s',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Несовпадение типа изображения: ожидаемое расширение %1$s вместо полученного %2$s.',
	'IN'						=> 'в форуме',
	'INDEX'						=> 'Главная страница',
	'INFORMATION'				=> 'Информация',
	'INTERESTS'					=> 'Интересы',
	'INVALID_DIGEST_CHALLENGE'	=> 'Неверный запрос аутентификации',
	'INVALID_EMAIL_LOG'			=> 'Возможно, введён неверный адрес email: <strong>%s</strong>',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'Ваш IP-адрес %1$s был заблокирован, так как он внесен в черный список. Для дополнительной информации смотрите <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Зарегистрирован',
	'JUMP_PAGE'				=> 'Введите номер страницы, на которую желаете перейти',
	'JUMP_TO'				=> 'Перейти',
	'JUMP_TO_PAGE'			=> 'Перейти на страницу…',

	'KB'					=> 'Кб',

	'LAST_POST'							=> 'Последнее сообщение',
	'LAST_UPDATED'						=> 'Последнее изменение',
	'LAST_VISIT'						=> 'Последнее посещение',
	'LDAP_NO_LDAP_EXTENSION'			=> 'Расширение LDAP недоступно.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Не удалось соединиться с сервером LDAP',
	'LEGEND'							=> 'Легенда',
	'LOCATION'							=> 'Откуда',
	'LOCK_POST'							=> 'Заблокировать сообщение',
	'LOCK_POST_EXPLAIN'					=> 'Запретить редактирование',
	'LOCK_TOPIC'						=> 'Закрыть тему',
	'LOGIN'								=> 'Вход',
	'LOGIN_CHECK_PM'					=> 'Войти и проверить личные сообщения',
	'LOGIN_CONFIRMATION'				=> 'Подтверждение входа',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Для предотвращения подбора паролей к вашей учётной записи необходимо ввести код подтверждения после максимального количества неудачных входов в систему. Код показан на картинке ниже. Введите код в точности так, как вы его видите. Если вы не видите код на картинке, то обратитесь к %sадминистратору%s',
	'LOGIN_ERROR_ATTEMPTS'				=> 'Вы превысили максимально допустимое количество попыток входа на конференцию. Теперь, кроме имени пользователя и пароля, вы должны ввести код подтверждения, показанный на картинке ниже.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Apache не смог вас аутентифицировать.',
	'LOGIN_ERROR_PASSWORD'				=> 'Вы ввели неверный пароль. Пожалуйста, проверьте его и попробуйте ввести ещё раз. Если у вас продолжаются проблемы со входом, сообщите %sадминистратору%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Вы ввели неверное имя пользователя. Пожалуйста, проверьте его и попробуйте ввести ещё раз. Если у вас продолжаются проблемы со входом, сообщите %sадминистратору%s.',
	'LOGIN_FORUM'						=> 'Для просмотра или размещения сообщений в этом форуме вы должны ввести пароль.',
	'LOGIN_INFO'						=> 'Для входа на конференцию вы должны быть зарегистрированы. Регистрация занимает всего несколько секунд, но предоставляет вам более широкие возможности. Администратором конференции могут быть установлены также дополнительные привилегии для зарегистрированных пользователей. Прежде чем совершить вход, вам следует ознакомиться с правилами и политикой, принятыми на конференции. Помните, что ваше присутствие на форумах означает согласие со <strong>всеми</strong> правилами.',
	'LOGIN_VIEWFORUM'					=> 'Для просмотра этого форума вы должны быть авторизованы.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Для редактирования сообщений в этом форуме вы должны быть авторизованы.',
	'LOGOUT'							=> 'Выход',
	'LOGOUT_USER'						=> 'Выход [ %s ]',
	'LOG_ME_IN'							=> 'Автоматически входить при каждом посещении',

	'MARK'					=> 'Отметить',
	'MARK_ALL'				=> 'Отметить все',
	'MARK_FORUMS_READ'		=> 'Отметить все форумы как прочтённые',
	'MB'					=> 'Mб',
	'MCP'					=> 'Модераторский раздел',
	'MEMBERLIST'			=> 'Пользователи',
	'MEMBERLIST_EXPLAIN'	=> 'Просмотр всего списка пользователей',
	'MERGE_TOPIC'			=> 'Объединить тему',
	'MESSAGE'				=> 'Сообщение',
	'MESSAGES'				=> 'сообщений',
	'MESSAGE_BODY'			=> 'Текст сообщения',
	'MINUTES'				=> 'Минут',
	'MODERATE'				=> 'Модерировать',
	'MODERATOR'				=> 'Модератор',
	'MODERATORS'			=> 'Модераторы',
	'MONTH'					=> 'Месяц',
	'MOVE'					=> 'Переместить',

	'NA'						=> 'Нет',
	'NEWEST_USER'				=> 'Последний зарегистрированный пользователь: <strong>%s%s%s</strong>',
	'NEW_MESSAGE'				=> 'Новое сообщение',
	'NEW_MESSAGES'				=> 'Новые сообщения',
	'NEW_PM'					=> 'Новых сообщений: <strong>%d</strong>',
	'NEW_PMS'					=> 'Новых сообщений: <strong>%d</strong>',
	'NEW_POST'					=> 'Новое сообщение',
	'NEW_POSTS'					=> 'Новые сообщения',
	'NEXT'						=> 'След.',
	'NEVER'						=> 'Никогда',
	'NO'						=> 'Нет',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Вы не можете управлять этой группой из администраторского раздела',
	'NOT_AUTHORIZED'			=> 'У вас нет доступа в эту часть форума.',
	'NOT_WATCHING_FORUM'		=> 'Вы больше не следите за сообщениями в этом форуме.',
	'NOT_WATCHING_TOPIC'		=> 'Вы больше не следите за ответами в этой теме.',
	'NO_ACCESS_ATTACHMENT'		=> 'Вам запрещён доступ к этому файлу.',
	'NO_ACTION'					=> 'Действие не определено.',
	'NO_ADMINISTRATORS'			=> 'Администраторы на этом форуме не назначены.',
	'NO_AUTH_ADMIN'				=> 'Вы не имеете прав доступа к администраторскому разделу.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Вы не можете повторно авторизоваться, как другой пользователь',
	'NO_AUTH_OPERATION'			=> 'Вы не имеете необходимых прав доступа для завершения этой операции.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Невозможно соединиться с SMTP-сервером: %s : %s',
	'NO_BIRTHDAYS'				=> 'Сегодня нет дней рождения.',
	'NO_EMAIL_MESSAGE'			=> 'Текст сообщения отсутствует.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Не удалось получить ответ от почтового сервера',
	'NO_EMAIL_SUBJECT'			=> 'Не задана тема сообщения',
	'NO_FORUM'					=> 'Форум, который вы выбрали, не существует.',
	'NO_FORUMS'					=> 'На этом сайте нет форумов',
	'NO_GROUP'					=> 'Такой группы не существует',
	'NO_GROUP_MEMBERS'			=> 'В этой группе в настоящее время нет ни одного пользователя',
	'NO_IPS_DEFINED'			=> 'Не определен IP или имя хоста',
	'NO_MEMBERS'				=> 'Не найдено ни одного пользователя согласно заданным критериям',
	'NO_MESSAGES'				=> 'Нет сообщений',
	'NO_MODE'					=> 'Не определен режим.',
	'NO_MODERATORS'				=> 'Модераторы на этом форуме не назначены.',
	'NO_NEW_MESSAGES'			=> 'Нет новых сообщений',
	'NO_NEW_PM'					=> 'Новых сообщений: <strong>0</strong>',
	'NO_NEW_POSTS'			  	=> 'Нет новых сообщений',
	'NO_ONLINE_USERS'			=> 'нет зарегистрированных пользователей',
	'NO_POSTS'					=> 'Нет сообщений',
	'NO_POSTS_TIME_FRAME'		=> 'В теме нет сообщений за выбранный период времени.',
	'NO_SUCH_SEARCH_MODULE'		=> 'По заданному критерию результатов не найдено',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Метод аутентификации не поддерживается.',
	'NO_TOPIC'					=> 'Темы, которую вы запросили, не существует.',
	'NO_TOPICS'					=> 'В этом форуме нет сообщений.',
	'NO_TOPICS_TIME_FRAME'		=> 'В форуме нет тем за выбранный период времени.',
	'NO_UNREAD_PM'				=> 'Нет непрочитанных сообщений',
	'NO_UPLOAD_FORM_FOUND'		=> 'Закачивание файла инициировано, но доступный для закачки файл не найден.',
	'NO_USER'					=> 'Запрашиваемого пользователя не существует.',
	'NO_USERS'					=> 'Запрашиваемых пользователей не существует.',
	'NO_USER_SPECIFIED'			=> 'Имя пользователя не определено.',

	'OCCUPATION'				=> 'Род занятий',
	'OFFLINE'					=> 'Не в сети',
	'ONLINE'					=> 'В сети',
	'ONLINE_BUDDIES'			=> 'Друзья',
	'ONLINE_USERS_TOTAL'		=> 'Сейчас посетителей на конференции: <strong>%d</strong>, из них ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Сейчас посетителей на конференции: <strong>0</strong>, из них ',
	'ONLINE_USER_TOTAL'			=> 'Сейчас посетителей на конференции: <strong>%d</strong>, из них ',
	'OPTIONS'					=> 'Настройки',

	'PAGE_OF'				=> 'Страница <strong>%1$d</strong> из <strong>%2$d</strong>',
	'PASSWORD'				=> 'Пароль',
	'PLAY_QUICKTIME_FILE'	=> 'Воспроизвести файл QuickTime',
	'PM'					=> 'Личное сообщение',
	'POSTING_MESSAGE'		=> 'Размещение сообщения в форуме %s',
	'POST'					=> 'Сообщение',
	'POST_ANNOUNCEMENT'		=> 'Объявление',
	'POST_STICKY'			=> 'Прикрепленная',
	'POSTED'				=> 'Добавлено',
	'POSTED_IN_FORUM'		=> 'в',
	'POSTED_ON_DATE'		=> 'от',
	'POSTS'					=> 'Сообщения',
	'POSTS_UNAPPROVED'		=> 'По крайней мере одно сообщение в этой теме не было проверено',
	'POST_BY_AUTHOR'		=> '',
	'POST_BY_FOE'			=> 'Автором этого сообщения является <strong>%1$s</strong>, находящийся в вашем чёрном списке. %2$sПоказать это сообщение%3$s.',
	'POST_DAY'				=> '%.2f сообщений в день',
	'POST_DETAILS'			=> 'Информация о сообщении',
	'POST_NEW_TOPIC'		=> 'Начать новую тему',
	'POST_PCT'				=> '%.2f%% от общего числа',
	'POST_PCT_ACTIVE'		=> '%.2f%% от числа ваших сообщений',
	'POST_REPORTED'			=> 'Просмотреть информацию о жалобе',
	'POST_SUBJECT'			=> 'Заголовок сообщения',
	'POST_TIME'				=> 'Время размещения',
	'POST_UNAPPROVED'		=> 'Это сообщение ожидает проверки',
	'PREVIEW'				=> 'Предпросмотр',
	'PREVIOUS'				=> 'Пред.',
	'PRIVACY'				=> 'Соглашение о конфиденциальности',
	'PRIVATE_MESSAGE'		=> 'Личное сообщение',
	'PRIVATE_MESSAGES'		=> 'Личные сообщения',
	'PRIVATE_MESSAGING'		=> 'Личные сообщения',
	'PROFILE'				=> 'Личный раздел',

	'READING_FORUM'				=> 'Просмотр форума «%s»',
	'READING_GLOBAL_ANNOUNCE'	=> 'Чтение общего объявления',
	'READING_TOPIC'				=> 'Просмотр темы в форуме «%s»',
	'READ_PROFILE'				=> 'Профиль',
	'REASON'					=> 'Причина',
	'RECORD_ONLINE_USERS'		=> 'Больше всего посетителей (<strong>%1$s</strong>) здесь было %2$s',
	'REDIRECTS'					=> 'Переходов по ссылке',
	'REGISTER'					=> 'Регистрация',
	'REGISTERED_USERS'			=> 'Зарегистрированные пользователи:',
	'REG_USERS_ONLINE'			=> 'Зарегистрированных пользователей: %d и ',
	'REG_USERS_TOTAL'			=> 'зарегистрированных: %d, ',
	'REG_USERS_ZERO_ONLINE'		=> 'Зарегистрированных пользователей: 0 и ',
	'REG_USERS_ZERO_TOTAL'		=> 'зарегистрированных: 0, ',
	'REG_USER_ONLINE'			=> 'Зарегистрированных пользователей: %d и ',
	'REG_USER_TOTAL'			=> 'зарегистрированных: %d, ',
	'REMOVE'					=> 'Удалить',
	'REMOVE_INSTALL'			=> 'Пожалуйста, удалите, переместите или переименуйте каталог install прежде чем начнёте пользоваться конференцией. В противном случае будет доступен только администраторский раздел.',
	'REPLIES'					=> 'Ответы',
	'REPLY_WITH_QUOTE'			=> 'Ответить с цитатой',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Размещение ответа на общее объявление',
	'REPLYING_MESSAGE'			=> 'Размещение ответа в форуме «%s»',
	'REPORT_BY'					=> 'Источник',
	'REPORT_POST'				=> 'Пожаловаться на это сообщение',
	'REPORTING_POST'			=> 'Размещение жалобы на сообщение',
	'RESEND_ACTIVATION'			=> 'Повторно выслать письмо для активации учётной записи',
	'RESET'						=> 'Вернуть',
	'RESTORE_PERMISSIONS'		=> 'Восстановить права доступа',
	'RETURN_INDEX'				=> '%sВернуться на главную%s',
	'RETURN_FORUM'				=> '%sВернуться в форум%s',
	'RETURN_PAGE'				=> '%sВернуться на предыдущую страницу%s',
	'RETURN_TOPIC'				=> '%sВернуться в тему%s',
	'RETURN_TO'					=> 'Вернуться в',
	'RULES_ATTACH_CAN'			=> 'Вы <strong>можете</strong> добавлять вложения',
	'RULES_ATTACH_CANNOT'		=> 'Вы <strong>не можете</strong> добавлять вложения',
	'RULES_DELETE_CAN'			=> 'Вы <strong>можете</strong> удалять свои сообщения',
	'RULES_DELETE_CANNOT'		=> 'Вы <strong>не можете</strong> удалять свои сообщения',
	'RULES_DOWNLOAD_CAN'		=> 'Вы <strong>можете</strong> скачивать вложения',
	'RULES_DOWNLOAD_CANNOT'		=> 'Вы <strong>не можете</strong> скачивать вложения',
	'RULES_EDIT_CAN'			=> 'Вы <strong>можете</strong> редактировать свои сообщения',
	'RULES_EDIT_CANNOT'			=> 'Вы <strong>не можете</strong> редактировать свои сообщения',
	'RULES_LOCK_CAN'			=> 'Вы <strong>можете</strong> закрывать свои темы',
	'RULES_LOCK_CANNOT'			=> 'Вы <strong>не можете</strong> закрывать свои темы',
	'RULES_POST_CAN'			=> 'Вы <strong>можете</strong> начинать темы',
	'RULES_POST_CANNOT'			=> 'Вы <strong>не можете</strong> начинать темы',
	'RULES_REPLY_CAN'			=> 'Вы <strong>можете</strong> отвечать на сообщения',
	'RULES_REPLY_CANNOT'		=> 'Вы <strong>не можете</strong> отвечать на сообщения',
	'RULES_VOTE_CAN'			=> 'Вы <strong>можете</strong> голосовать в опросах',
	'RULES_VOTE_CANNOT'			=> 'Вы <strong>не можете</strong> голосовать в опросах',

	'SEARCH'					=> 'Поиск',
	'SEARCH_ADV'				=> 'Расширенный поиск',
	'SEARCH_ADV_EXPLAIN'		=> 'Параметры расширенного поиска',
	'SEARCH_KEYWORDS'			=> 'Ключевые слова',
	'SEARCHING_FORUMS'			=> 'Поиск в форумах',
	'SEARCH_ACTIVE_TOPICS'		=> 'Активные темы',
	'SEARCH_FOR'				=> 'Найти',
	'SEARCH_FORUM'				=> 'Поиск в форуме',
	'SEARCH_NEW'				=> 'Новые сообщения',
	'SEARCH_POSTS_BY'			=> 'Искать сообщения',
	'SEARCH_SELF'				=> 'Ваши сообщения',
	'SEARCH_TOPIC'				=> 'Поиск в теме',
	'SEARCH_UNANSWERED'			=> 'Сообщения без ответов',
	'SECONDS'					=> 'Секунд',
	'SELECT'					=> 'Выбор',
	'SELECT_DESTINATION_FORUM'	=> 'Выберите форум назначения',
	'SELECT_FORUM'				=> 'Выберите форум',
	'SEND_EMAIL'				=> 'Email',
	'SEND_PRIVATE_MESSAGE'		=> 'Отправить личное сообщение',
	'SETTINGS'					=> 'Установки',
	'SIGNATURE'					=> 'Подпись',
	'SKIP'						=> 'Пропустить',
	'SMTP_NO_AUTH_SUPPORT'		=> 'SMTP-сервер не поддерживает аутентификацию',
	'SORRY_AUTH_READ'			=> 'Вы не авторизованы для чтения этого форума',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Вы не авторизованы для скачивания этого вложения',
	'SORT_BY'					=> 'Поле сортировки',
	'SORT_JOINED'				=> 'Дата регистрации',
	'SORT_LOCATION'				=> 'Откуда',
	'SORT_RANK'					=> 'Звание',
	'SORT_TOPIC_TITLE'			=> 'Название темы',
	'SORT_USERNAME'				=> 'Имя пользователя',
	'SPLIT_TOPIC'				=> 'Разделить тему',
	'SQL_ERROR_OCCURRED'		=> 'Произошла ошибка SQL при выборе этой страницы. Пожалуйста, сообщите %sадминистратору%s, если ошибка будет повторяться.',
	'STATISTICS'				=> 'Статистика',
	'START_WATCHING_FORUM'		=> 'Подписаться на форум',
	'START_WATCHING_TOPIC'		=> 'Подписаться на тему',
	'STOP_WATCHING_FORUM'		=> 'Отписаться от форума',
	'STOP_WATCHING_TOPIC'		=> 'Отписаться от темы',
	'SUBFORUM'					=> 'Подфорум',
	'SUBFORUMS'					=> 'Подфорумы',
	'SUBJECT'					=> 'Заголовок',
	'SUBMIT'					=> 'Отправить',

	'TERMS_USE'			=> 'Общие правила',
	'TEST_CONNECTION'	=> 'Проверить подключение',
	'THE_TEAM'			=> 'Наша команда',
	'TIME'				=> 'Время',

	'TOO_LONG_AIM'					=> 'Имя в AIM слишком длинное.',
	'TOO_LONG_CONFIRM_CODE'			=> 'Введенный код подтверждения слишком длинный.',
	'TOO_LONG_ICQ'					=> 'Номер ICQ слишком длинный.',
	'TOO_LONG_INTERESTS'			=> 'Слишком длинная строка интересов.',
	'TOO_LONG_JABBER'				=> 'Имя учётной записи Jabber слишком длинное.',
	'TOO_LONG_LOCATION'				=> 'Строка «Откуда» слишком длинная.',
	'TOO_LONG_MSN'					=> 'Имя в MSN слишком длинное.',
	'TOO_LONG_NEW_PASSWORD'			=> 'Введенный пароль слишком длинный.',
	'TOO_LONG_OCCUPATION'			=> 'Строка «Род занятий» слишком длинная.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'Подтверждение пароля слишком длинное.',
	'TOO_LONG_USER_PASSWORD'		=> 'Пароль слишком длинный.',
	'TOO_LONG_USERNAME'				=> 'Имя пользователя слишком длинное.',
	'TOO_LONG_EMAIL'				=> 'Адрес email слишком длинный.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'Подтверждение адреса email слишком длинное.',
	'TOO_LONG_WEBSITE'				=> 'Адрес сайта слишком длинный.',
	'TOO_LONG_YIM'					=> 'Имя в YIM слишком длинное.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Вы выбрали слишком много вариантов ответа при голосовании',

	'TOO_SHORT_AIM'					=> 'Имя в AIM слишком короткое.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'Введенный код подтверждения слишком короткий.',
	'TOO_SHORT_ICQ'					=> 'Номер ICQ слишком короткий.',
	'TOO_SHORT_INTERESTS'			=> 'Слишком короткая строка интересов.',
	'TOO_SHORT_JABBER'				=> 'Имя учётной записи Jabber слишком короткое.',
	'TOO_SHORT_LOCATION'			=> 'Строка «Откуда» слишком короткая.',
	'TOO_SHORT_MSN'					=> 'Имя в MSN слишком короткое.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'Введенный пароль слишком короткий.',
	'TOO_SHORT_OCCUPATION'			=> 'Строка «Род занятий» слишком короткая.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'Подтверждение пароля слишком короткое.',
	'TOO_SHORT_USER_PASSWORD'		=> 'Пароль слишком короткий.',
	'TOO_SHORT_USERNAME'			=> 'Имя пользователя слишком короткое.',
	'TOO_SHORT_EMAIL'				=> 'Адрес email слишком короткий.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'Подтверждение адреса email слишком короткое.',
	'TOO_SHORT_WEBSITE'				=> 'Адрес сайта слишком короткий.',
	'TOO_SHORT_YIM'					=> 'Имя в YIM слишком короткое.',

	'TOPIC'				=> 'Тема',
	'TOPICS'			=> 'Темы',
	'TOPIC_ICON'		=> 'Значок темы',
	'TOPIC_LOCKED'		=> 'Эта тема закрыта, вы не можете писать ответы и редактировать сообщения',
	'TOPIC_MOVED'		=> 'Перемещенная',
	'TOPIC_REVIEW'		=> 'Обзор темы',
	'TOPIC_TITLE'		=> 'Название темы',
	'TOPIC_UNAPPROVED'	=> 'Данная тема не была одобрена',
	'TOTAL_ATTACHMENTS'	=> 'Вложений',
	'TOTAL_LOG'			=> '1 лог',
	'TOTAL_LOGS'		=> 'логов: %d',
	'TOTAL_NO_PM'		=> 'Всего 0 личных сообщений',
	'TOTAL_PM'			=> 'Всего 1 личное сообщение',
	'TOTAL_PMS'			=> 'Всего $d личных сообщений',
	'TOTAL_POSTS'		=> 'Всего сообщений',
	'TOTAL_POSTS_OTHER'	=> 'Всего сообщений: <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'Всего сообщений: <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'На данную тему поступили жалобы',
	'TOTAL_TOPICS_OTHER'=> 'Всего тем: <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Всего тем: <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Всего пользователей: <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Всего пользователей: <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Отслеженные ошибки PHP: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'Доступ к изображению невозможен, либо файл не является изображением.',
	'UNABLE_TO_DELIVER_FILE'=> 'Невозможно доставить файл.',
	'UNKNOWN_BROWSER'		=> 'Неизвестный браузер',
	'UNMARK_ALL'			=> 'Снять выделение',
	'UNREAD_MESSAGES'		=> 'Непрочитанные сообщения',
	'UNREAD_PM'				=> 'непрочитанных сообщений: <strong>%d</strong>',
	'UNREAD_PMS'			=> 'непрочитанных сообщений: <strong>%d</strong>',
	'UNWATCHED_FORUMS'		=> 'Теперь вы не следите за выбранными форумами.',
	'UNWATCHED_TOPICS'		=> 'Теперь вы не следите за выбранными темами.',
	'UPDATE'				=> 'Обновить',
	'UPLOAD_IN_PROGRESS'	=> 'Производится закачка',
	'URL_REDIRECT'			=> 'Если ваш браузер не поддерживает автоматическое перенаправление, %sнажмите эту ссылку%s для перехода.',
	'USERGROUPS'			=> 'Группы',
	'USERNAME'				=> 'Имя пользователя',
	'USERNAMES'				=> 'Имена пользователей',
	'USER_AVATAR'			=> 'Аватара пользователя',
	'USER_CANNOT_READ'		=> 'Вы не можете читать сообщения в данном форуме',
	'USER_POST'				=> '%d сообщение',
	'USER_POSTS'			=> '%d сообщений',
	'USERS'					=> 'Пользователи',
	'USE_PERMISSIONS'		=> 'Проверить права пользователя',

	'VIEWED'					=> 'Просмотров:',
	'VIEWING_FAQ'				=> 'Просмотр FAQ',
	'VIEWING_MEMBERS'			=> 'Просмотр списка пользователей',
	'VIEWING_ONLINE'			=> 'Просмотр «Кто сейчас на конференции»',
	'VIEWING_MEMBER_PROFILE'	=> 'Просмотр профиля пользователя',
	'VIEWING_UCP'				=> 'Просмотр личного раздела',
	'VIEWS'						=> 'Просмотры',
	'VIEW_BOOKMARKS'			=> 'Просмотреть закладки',
	'VIEW_FORUM_LOGS'			=> 'Просмотреть логи',
	'VIEW_LATEST_POST'			=> 'Просмотреть последнее сообщение',
	'VIEW_NEWEST_POST'			=> 'Просмотреть последнее непрочитанное сообщение',
	'VIEW_NOTES'				=> 'Заметки о пользователе',
	'VIEW_ONLINE_TIME'			=> 'Эти данные основаны на активности пользователей за последнюю минуту',
	'VIEW_ONLINE_TIMES'			=> 'Эти данные основаны на активности пользователей за последние %d минут',
	'VIEW_TOPIC'				=> 'Просмотр темы',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Объявление: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Общее объявление: ',
	'VIEW_TOPIC_LOCKED'			=> 'Закрыто: ',
	'VIEW_TOPIC_LOGS'			=> 'Просмотр логов',
	'VIEW_TOPIC_MOVED'			=> 'Перемещена: ',
	'VIEW_TOPIC_POLL'			=> 'Опрос: ',
	'VIEW_TOPIC_STICKY'			=> 'Прикрепленная: ',
	'VISIT_WEBSITE'				=> 'Перейти на сайт',

	'WARNINGS'			=> 'Предупреждения',
	'WARN_USER'			=> 'Вынести предупреждение',
	'WELCOME_SUBJECT'	=> 'Добро пожаловать на конференцию «%s»',
	'WEBSITE'			=> 'Сайт',
	'WHOIS'				=> 'Whois (информация об IP)',
	'WHO_IS_ONLINE'		=> 'Кто сейчас на конференции',
	'WRONG_PASSWORD'	=> 'Вы ввели неверный пароль.',

	'WRONG_DATA_ICQ'			=> 'Введенный номер не являются правильным номером ICQ.',
	'WRONG_DATA_JABBER'			=> 'Введенное имя не является правильным именем Jabber.',
	'WRONG_DATA_LANG'			=> 'Указан неправильный язык.',
	'WRONG_DATA_WEBSITE'		=> 'Адрес сайта должен быть правильной ссылкой, включающей наименование протокола. Например, http://www.example.com/.',

	'YEAR'				=> 'Год',
	'YES'				=> 'Да',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Предыдущее посещение: %s',
	'YOU_NEW_PM'		=> 'Вам пришло новое личное сообщение',
	'YOU_NEW_PMS'		=> 'Вам пришли новые личные сообщения',
	'YOU_NO_NEW_PM'		=> 'У вас нет новых личных сообщений',

	'datetime'			=> array(
		'TODAY'		=> 'Сегодня, ',
		'TOMORROW'	=> 'Завтра, ',
		'YESTERDAY'	=> 'Вчера, ',

		'Sunday'	=> 'Воскресенье',
		'Monday'	=> 'Понедельник',
		'Tuesday'	=> 'Вторник',
		'Wednesday'	=> 'Среда',
		'Thursday'	=> 'Четверг',
		'Friday'	=> 'Пятница',
		'Saturday'	=> 'Суббота',

		'Sun'		=> 'Вс',
		'Mon'		=> 'Пн',
		'Tue'		=> 'Вт',
		'Wed'		=> 'Ср',
		'Thu'		=> 'Чт',
		'Fri'		=> 'Пт',
		'Sat'		=> 'Сб',

		'January'	=> 'Январь',
		'February'	=> 'Февраль',
		'March'		=> 'Март',
		'April'		=> 'Апрель',
		'May'		=> 'Май',
		'June'		=> 'Июнь',
		'July'		=> 'Июль',
		'August'	=> 'Август',
		'September'	=> 'Сентябрь',
		'October'	=> 'Октябрь',
		'November'	=> 'Ноябрь',
		'December'	=> 'Декабрь',

		'Jan'		=> 'янв',
		'Feb'		=> 'фев',
		'Mar'		=> 'мар',
		'Apr'		=> 'апр',
		'May_short'	=> 'май', 
		'Jun'		=> 'июн',
		'Jul'		=> 'июл',
		'Aug'		=> 'авг',
		'Sep'		=> 'сен',
		'Oct'		=> 'окт',
		'Nov'		=> 'ноя',
		'Dec'		=> 'дек',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 часов',
		'-11'	=> 'UTC - 11 часов',
		'-10'	=> 'UTC - 10 часов',
		'-9.5'	=> 'UTC - 9:30 часов',
		'-9'	=> 'UTC - 9 часов',
		'-8'	=> 'UTC - 8 часов',
		'-7'	=> 'UTC - 7 часов',
		'-6'	=> 'UTC - 6 часов',
		'-5'	=> 'UTC - 5 часов',
		'-4'	=> 'UTC - 4 часа',
		'-3.5'	=> 'UTC - 3:30 часа',
		'-3'	=> 'UTC - 3 часа',
		'-2'	=> 'UTC - 2 часа',
		'-1'	=> 'UTC - 1 час',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 час',
		'2'		=> 'UTC + 2 часа',
		'3'		=> 'UTC + 3 часа',
		'3.5'	=> 'UTC + 3:30 часа',
		'4'		=> 'UTC + 4 часа',
		'4.5'	=> 'UTC + 4:30 часа',
		'5'		=> 'UTC + 5 часов',
		'5.5'	=> 'UTC + 5:30 часов',
		'5.75'	=> 'UTC + 5:45 часов',
		'6'		=> 'UTC + 6 часов',
		'6.5'	=> 'UTC + 6:30 часов',
		'7'		=> 'UTC + 7 часов',
		'8'		=> 'UTC + 8 часов',
		'8.75'	=> 'UTC + 8:45 часов',
		'9'		=> 'UTC + 9 часов',
		'9.5'	=> 'UTC + 9:30 часов',
		'10'	=> 'UTC + 10 часов',
		'10.5'	=> 'UTC + 10:30 часов',
		'11'	=> 'UTC + 11 часов',
		'11.5'	=> 'UTC + 11:30 часов',
		'12'	=> 'UTC + 12 часов',
		'12.75'	=> 'UTC + 12:45 часов',
		'13'	=> 'UTC + 13 часов',
		'14'	=> 'UTC + 14 часов',
		'dst'	=> '[ Летнее время ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] Меридиан смены дат (запад)',
		'-11'	=> '[UTC - 11] о. Мидуэй, Самоа',
		'-10'	=> '[UTC - 10] Гавайи',
		'-9.5'	=> '[UTC - 9:30] Маркизские острова',
		'-9'	=> '[UTC - 9] Аляска',
		'-8'	=> '[UTC - 8] Тихоокеанское время (США и Канада) и Тихуана',
		'-7'	=> '[UTC - 7] Аризона',
		'-6'	=> '[UTC - 6] Мехико, Центральная Америка, Центральное время (США и Канада)',
		'-5'	=> '[UTC - 5] Индиана (восток), Восточное время (США и Канада)',
		'-4'	=> '[UTC - 4] Каракас, Сантьяго, Атлантическое время (Канада)',
		'-3.5'	=> '[UTC - 3:30] Ньюфаундленд',
		'-3'	=> '[UTC - 3] Бразилия, Гренландия',
		'-2'	=> '[UTC - 2] Среднеатлантическое время',
		'-1'	=> '[UTC - 1] Азорские острова, острова Зеленого мыса',
		'0'		=> '[UTC] Время по Гринвичу: Дублин, Лондон, Лиссабон, Эдинбург',
		'1'		=> '[UTC + 1] Берлин, Мадрид, Париж, Рим, Западная Центральная Африка',
		'2'		=> '[UTC + 2] Афины, Вильнюс, Киев, Минск, Рига, Таллинн, Центральная Африка',
		'3'		=> '[UTC + 3] Волгоград, Москва, Санкт-Петербург',
		'3.5'	=> '[UTC + 3:30] Тегеран',
		'4'		=> '[UTC + 4] Баку, Ереван, Самара, Тбилиси',
		'4.5'	=> '[UTC + 4:30] Кабул',
		'5'		=> '[UTC + 5] Екатеринбург, Исламабад, Карачи, Оренбург, Ташкент',
		'5.5'	=> '[UTC + 5:30] Бомбей, Калькутта, Мадрас, Нью-Дели',
		'5.75'	=> '[UTC + 5:45] Катманду',
		'6'		=> '[UTC + 6] Алматы, Астана, Новосибирск, Омск',
		'6.5'	=> '[UTC + 6:30] Рангун',
		'7'		=> '[UTC + 7] Бангкок, Красноярск',
		'8'		=> '[UTC + 8] Гонконг, Иркутск, Пекин, Сингапур',
		'8.75'	=> '[UTC + 8:45] Юго-восточная Западная Австралия',
		'9'		=> '[UTC + 9] Токио, Сеул, Чита, Якутск',
		'9.5'	=> '[UTC + 9:30] Дарвин',
		'10'	=> '[UTC + 10] Владивосток, Канберра, Мельбурн, Сидней',
		'10.5'	=> '[UTC + 10:30] Лорд-Хау',
		'11'	=> '[UTC + 11] Магадан, Сахалин, Соломоновы о-ва',
		'11.5'	=> '[UTC + 11:30] Остров Норфолк',
		'12'	=> '[UTC + 12] Камчатка, Новая Зеландия, Фиджи',
		'12.75'	=> '[UTC + 12:45] Острова Чатем',
		'13'	=> '[UTC + 13] Острова Феникс, Тонга',
		'14'	=> '[UTC + 14] Остров Лайн',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'|d M Y| H:i'			=> '10 янв 2005 17:57 [вчера/сегодня/завтра]',
		'd M Y, H:i'			=> '10 янв 2005, 17:57',
		'd M Y H:i'				=> '10 янв 2005 17:57',
		'D M d, Y g:i a'		=> 'Пн янв 10, 2005 5:57 pm',
		'M j, y, H:i'			=> 'янв 10, 05, 5:57 pm',
		'F j, Y, g:i a'			=> 'Январь 10, 2005, 5:57 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=>'|d M Y| H:i'// 10 янв 2005 17:54 [вчера/сегодня/завтра]

));

?>