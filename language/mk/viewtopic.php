<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
	'APPROVE'								=> 'Одобри',
	'ATTACHMENT'						=> 'Прикачена датотека',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Функцијата за прикачувања е исклучена.',

	'BOOKMARK_ADDED'		=> 'Темата е успешно обележана.',
	'BOOKMARK_ERR'			=> 'Неуспешно обележување на темата. Ве молиме обидете се повторно.',
	'BOOKMARK_REMOVED'		=> 'Обележаната тема е успешно отстранета.',
	'BOOKMARK_TOPIC'		=> 'Обележи ја темата',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Отстрани од обележани теми',
	'BUMPED_BY'				=> 'Последно издигнување од %1$s на %2$s.',
	'BUMP_TOPIC'			=> 'Издигни ја темата',

	'CODE'					=> 'Код',

	'DELETE_TOPIC'			=> 'Избриши ја темата',
	'DELETED_INFORMATION'	=> 'Избришано од %1$s на %2$s',
	'DISAPPROVE'					=> 'Неодобри',
	'DOWNLOAD_NOTICE'		=> 'Ги немате потребните овластувања за да ги видите датотеките прикачени во ова мислење.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Последна промена од %2$s на %3$s, променено вкупно %1$d пат.',
		2	=> 'Последна промена од %2$s на %3$s, променено вкупно %1$d пати.',
		3	=> 'Последна промена од %2$s на %3$s, променено вкупно %1$d пати.',
	),
	'EMAIL_TOPIC'			=> 'Испрати ја темата по имејл',
	'ERROR_NO_ATTACHMENT'	=> 'Избраната прикачена дадотека веќе не постои.',

	'FILE_NOT_FOUND_404'	=> 'Датотеката <strong>%s</strong> не постои.',
	'FORK_TOPIC'			=> 'Копирај ја темата',
	'FULL_EDITOR'			=> 'Целосен уредувач &amp; Преглед',

	'LINKAGE_FORBIDDEN'		=> 'Не сте овластени да гледате, преземате и поставувате линкови кон/од овој сајт.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Вие добивте известување за оваа тема, Ве молиме да се најавите за да ја прегледате.',
	'LOGIN_VIEWTOPIC'		=> 'Форумот бара да бидете регистриран и најавен за да ја прегледате оваа тема.',

	'MAKE_ANNOUNCE'				=> 'Промени на „Соопштение“',
	'MAKE_GLOBAL'				=> 'Промени на „Глобално соопштение“',
	'MAKE_NORMAL'				=> 'Промени на „Стандардна тема“',
	'MAKE_STICKY'				=> 'Промени на „Закачена тема“',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Можете да изберете само <strong>%d</strong> опција',
		2	=> 'Можете да изберете до <strong>%d</strong> опции',
		3	=> 'Можете да изберете до <strong>%d</strong> опции',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Прикачената датотека <strong>%s</strong> веќе не е достапна.',
	'MOVE_TOPIC'				=> 'Премести ја темата',

	'NO_ATTACHMENT_SELECTED'=> 'Не сте избрале прикачена датотека за преземање или преглед.',
	'NO_NEWER_TOPICS'		=> 'Нема понови теми во овој форум.',
	'NO_OLDER_TOPICS'		=> 'Нема постари теми во овој форум.',
	'NO_UNREAD_POSTS'		=> 'Нема нови непрочитани мислења во оваа тема.',
	'NO_VOTE_OPTION'		=> 'Мора да изберете опција при гласањето.',
	'NO_VOTES'				=> 'Нема гласови',

	'POLL_ENDED_AT'			=> 'Анкетата заврши на %s',
	'POLL_RUN_TILL'			=> 'Анкетата е активна до %s',
	'POLL_VOTED_OPTION'		=> 'Гласавте за оваа опција',
	'POST_DELETED_RESTORE'	=> 'Мислењето е избришано и не може да биде вратено назад.',
	'PRINT_TOPIC'			=> 'Преглед на пречатење',

	'QUICK_MOD'				=> 'Брзи модераторски опции',
	'QUICKREPLY'			=> 'Брз одговор',
	'QUOTE'					=> 'Цитат',

	'REPLY_TO_TOPIC'		=> 'Одговори на темата',
	'RESTORE'				=> 'Врати назад',
	'RESTORE_TOPIC'			=> 'Врати ја назад темата',
	'RETURN_POST'			=> '%sВрати се на мислењето%s',

	'SUBMIT_VOTE'			=> 'Поднеси го гласањето',

	'TOPIC_TOOLS'			=> 'Алатки за темата',
	'TOTAL_VOTES'			=> 'Вкупно гласови',

	'UNLOCK_TOPIC'			=> 'Отклучи ја темата',

	'VIEW_INFO'				=> 'Детали за мислењето',
	'VIEW_NEXT_TOPIC'		=> 'Следна тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Претходна тема',
	'VIEW_RESULTS'			=> 'Прикажи резултати',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d мислење',
		2	=> '%d мислења',
		3	=> '%d мислења',
	),
	'VIEW_UNREAD_POST'		=> 'Прво непрочитано мислење',
	'VOTE_SUBMITTED'		=> 'Вашиот глас е запишан.',
	'VOTE_CONVERTED'		=> 'Промената на гласовите не е дозволена за конвертирани анкети.',

));
