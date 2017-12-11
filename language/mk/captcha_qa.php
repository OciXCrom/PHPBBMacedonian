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
	'CAPTCHA_QA'				=> 'П&amp;О',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ова прашање е средство за спречување на автоматски регистрации од страна на ботови.',
	'CONFIRM_QUESTION_WRONG'	=> 'Дадовте неправилен одговор на прашањето.',
	'CONFIRM_QUESTION_MISSING'	=> 'Преземањето на прашањата беше неуспешно. Ве молиме контактирајте со администратор на сајтот.',

	'QUESTION_ANSWERS'			=> 'Одговори',
	'ANSWERS_EXPLAIN'			=> 'Внесете валидни одговори за прашањето, по еден на секој ред.',
	'CONFIRM_QUESTION'			=> 'Прашање',

	'ANSWER'					=> 'Одговор',
	'EDIT_QUESTION'				=> 'Промени прашање',
	'QUESTIONS'					=> 'Прашања',
	'QUESTIONS_EXPLAIN'			=> 'За секој поднесок во формуларот каде што сте го активирале П&amp;О прилучокот, на корисниците ќе им биде поставено едно од прашањата наведени тука. За да можете да го користите овој приклучок, најмалку едно прашање мора да биде наведено на стандардниот јазик. Овие прашања би требало да бидат лесни за Вашата таргетирана публика да може да даде точен одговор, но надвор од способноста на бот способен да изврши Google™ пребарување. Користењето на голем и редовно променуван сет на прашања ќе даде најдобри резултати. Активирајте го строгиот режим доколку Вашето прашање содржи мешана големина на букви, интерпункција или празен простор.',
	'QUESTION_DELETED'			=> 'Прашањето е избришано',
	'QUESTION_LANG'				=> 'Јазик',
	'QUESTION_LANG_EXPLAIN'		=> 'Јазикот на кој прашањата и одговорите се напишани.',
	'QUESTION_STRICT'			=> 'Строг режим',
	'QUESTION_STRICT_EXPLAIN'	=> 'Активирајте го за да дозволите проверка на мали и големи букви, интерпункција и празен простор.',

	'QUESTION_TEXT'				=> 'Прашање',
	'QUESTION_TEXT_EXPLAIN'		=> 'Прашањето поставено на корисникот.',

	'QA_ERROR_MSG'				=> 'Ве молиме пополнете ги сите полиња и внесете најмалку еден одговор.',
	'QA_LAST_QUESTION'			=> 'Не можете да ги избришете сите прашања додека приклучокот е активен.',
));
