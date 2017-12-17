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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Најактивен во форум',
	'ACTIVE_IN_TOPIC'		=> 'Најактивен во тема',
	'ADD_FOE'				=> 'Додади непријател',
	'ADD_FRIEND'			=> 'Додади пријател',
	'AFTER'					=> 'По',

	'ALL'					=> 'Сите',

	'BEFORE'				=> 'Пред',

	'CC_SENDER'				=> 'Испратете копија од овој имејл до себе.',
	'CONTACT_ADMIN'			=> 'Контактирај со администратор на форумот',

	'DEST_LANG'				=> 'Јазик',
	'DEST_LANG_EXPLAIN'		=> 'Изберете соодветен јазик (ако е достапен) за примачот на оваа порака.',

	'EDIT_PROFILE'			=> 'Промени профил',

	'EMAIL_BODY_EXPLAIN'	=> 'Оваа порака ќе биде испратена како обичен текст. Не вклучувајте HTML или BBCode. Повратната адреса на пораката ќе биде Вашата имејл адреса.',
	'EMAIL_DISABLED'		=> 'Жалиме, но сите фунцкии поврзани со имејл се поврзани.',
	'EMAIL_SENT'			=> 'Имејлот е испратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Оваа порака ќе биде испратена како обичен текст. Не вклучувајте HTML или BBCode. Имајте во предвид дека информацијата за темата веќе е вклучена во ппораката. Повратната адреса на пораката ќе биде Вашата имејл адреса.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Треба да наведете валидна имејл адреса за примачот.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Треба да внесете порака за имејлот.',
	'EMPTY_MESSAGE_IM'		=> 'Треба да внесете порака за испраќање.',
	'EMPTY_NAME_EMAIL'		=> 'Треба да го внесете вистинското име на примачот.',
	'EMPTY_SENDER_EMAIL'	=> 'Треба да наведете валидна имејл адреса.',
	'EMPTY_SENDER_NAME'		=> 'Треба да наведете име.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Треба да внесете наслов за имејлот.',
	'EQUAL_TO'				=> 'Еднакво на',

	'FIND_USERNAME_EXPLAIN'	=> 'Користете го овој формулар за да пребарате конкретни членови. Не мора да ги пополните сите полиња. За да пребарувате за делумни податоци, користете го знакот * како џокер. При внесување дати, користете го форматот <kbd>ГГГГ-ММ-ДД</kbd>, на пример <samp>2004-02-29</samp>. Користете ги полињата за обележување за да изберете едно или повеќе имиња (повеќе кориснички имиња може да бидат прифатени во зависност од самата форма) и кликнете на „Избери ги обележаните“ за да се вратите на претходниот формулар.',
	'FLOOD_EMAIL_LIMIT'		=> 'Не можете да испратите уште еден имејл во моментов. Ве молиме обидете се повторно подоцна.',

	'GROUP_LEADER'			=> 'Лидер на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Скриј го пребарувањето за корисници',

	'IM_ADD_CONTACT'		=> 'Додади контакт',
	'IM_DOWNLOAD_APP'		=> 'Преземи ја апликацијата',
	'IM_JABBER'				=> 'Имајте во предвид дека некои корисници можеби избрале да не добиваат пораки од непознати луѓе.',
	'IM_JABBER_SUBJECT'		=> 'Ова е автоматска порака, Ве молиме не одговарајте на неа! Порака од корисникот %1$s на %2$s.',
	'IM_MESSAGE'			=> 'Вашата порака',
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'			=> 'Нема соодветни информации за контакт за овој корисник.',
	'IM_NO_JABBER'			=> 'Се извинуваме, но директни пораки кон Jabber корисници не се поддржуваат на овој форум. Потребно е да имате Jabber клиент инсталиран на Вашиот систем за да контактирате со примачот погоре.',
	'IM_RECIPIENT'			=> 'Примач',
	'IM_SEND'				=> 'Испрати порака',
	'IM_SEND_MESSAGE'		=> 'Испрати порака',
	'IM_SENT_JABBER'		=> 'Вашата порака до %1$s беше успешно испратена.',
	'IM_USER'				=> 'Испрати инстант порака',

	'LAST_ACTIVE'				=> 'Последна активност',
	'LESS_THAN'					=> 'Помалку од',
	'LIST_USERS'				=> array(
		1	=> '%d корисник',
		2	=> '%d корисника',
		3	=> '%d корисници',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Форумот бара да бидете регистриран и најавен за да ги видите членовите на тимот.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Форумот бара да бидете регистриран и најавен за да имате достап до листата на членови.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Форумот бара да бидете регистриран и најавен за да пребарувате корисници.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Форумот бара да бидете регистриран и најавен за да прегледувате профили.',

	'MANAGE_GROUP'			=> 'Управувај со групата',
	'MORE_THAN'				=> 'Повеќе од',

	'NO_CONTACT_FORM'		=> 'Формуларот за контакт со администраторот е исклучен.',
	'NO_CONTACT_PAGE'		=> 'Страницата за контакт со администраторот е исклучен.',
	'NO_EMAIL'				=> 'Не сте овластени да испратите имејл до овој корисник.',
	'NO_VIEW_USERS'			=> 'Не сте овластени да ја прегледате листата со членови или профили.',

	'ORDER'					=> 'Подредување',
	'OTHER'					=> 'Друго',

	'POST_IP'				=> 'Објавено од IP/домен',

	'REAL_NAME'				=> 'Име на примачот',
	'RECIPIENT'				=> 'Примач',
	'REMOVE_FOE'			=> 'Отстрани непријател',
	'REMOVE_FRIEND'			=> 'Отстрани пријател',

	'SELECT_MARKED'			=> 'Избери ги обележаните',
	'SELECT_SORT_METHOD'	=> 'Избери метод за обележување',
	'SENDER_EMAIL_ADDRESS'	=> 'Вашата имејл адреса',
	'SENDER_NAME'			=> 'Вашето име',
	'SEND_ICQ_MESSAGE'		=> 'Испрати ICQ порака',
	'SEND_IM'				=> 'Инстант пораки',
	'SEND_JABBER_MESSAGE'	=> 'Испрати Jabber порака',
	'SEND_MESSAGE'			=> 'Порака',
	'SEND_YIM_MESSAGE'		=> 'Испрати YIM порака',
	'SORT_EMAIL'			=> 'Имејл',
	'SORT_LAST_ACTIVE'		=> 'Последна активност',
	'SORT_POST_COUNT'		=> 'Број на мислења',

	'USERNAME_BEGINS_WITH'	=> 'Корисничкото име започнува со',
	'USER_ADMIN'			=> 'Администрирај го корисникот',
	'USER_BAN'				=> 'Банирање',
	'USER_FORUM'			=> 'Статистика на корисникот',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Нема испратени потсетници во моментов',
		1		=> '%1$d испратен потсетник<br />» %2$s',
		2		=> '%1$d испратени потсетника<br />» %2$s',
		3		=> '%1$d испратени потсетници<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Онлајн',
	'USER_PRESENCE'			=> 'Присуство на форумот',
	'USERS_PER_PAGE'		=> 'Корисници на страница',

	'VIEWING_PROFILE'		=> 'Преглед на профил - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Погледни го Facebook профилот',
	'VIEW_SKYPE_PROFILE'	=> 'Погледни го Skype профилот',
	'VIEW_TWITTER_PROFILE'	=> 'Погледни го Twitter профилот',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Погледни го YouTube каналот',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Погледни го Google+ профилот',
));
