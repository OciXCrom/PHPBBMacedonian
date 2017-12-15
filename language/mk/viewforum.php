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
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Соопштенија',

	'FORUM_PERMISSIONS'		=> 'Форумни овластувања',

	'ICON_ANNOUNCEMENT'		=> 'Соопштение',
	'ICON_STICKY'			=> 'Закачена',

	'LOGIN_NOTIFY_FORUM'	=> 'Вие добивте известување за овој форум, Ве молиме да се најавите за да го прегледате.',

	'MARK_TOPICS_READ'		=> 'Маркирај ги темите како прочитани',

	'NEW_POSTS_HOT'			=> 'New posts [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'New posts [ Locked ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'No new posts [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'No new posts [ Locked ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Ги немате потребните овластувања за да читате теми во овој форум.',
	'NO_UNREAD_POSTS_HOT'		=> 'Нема непрочитани мислења [ Популарна ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Нема непрочитани мислења [ Заклучена ]',

	'POST_FORUM_LOCKED'		=> 'Форумот е заклучен',

	'TOPICS_MARKED'			=> 'The topics for this forum have now been marked read.',

	'UNREAD_POSTS_HOT'		=> 'Непрочитани мислења [ Популарна ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочитани мислења [ Заклучена ]',

	'VIEW_FORUM'			=> 'Види го форумот',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d теми',
		3	=> '%d теми',
	),
));
