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
	'ALL_AVAILABLE'			=> 'Сите достапни',
	'ALL_RESULTS'			=> 'Сите резултати',

	'DISPLAY_RESULTS'		=> 'Прикажи ги резултатите како',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Пребарувањето најде %d резултат',
		2	=> 'Пребарувањето најде %d резултата',
		3	=> 'Пребарувањето најде %d резултати',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Пребарувањето најде повеќе од %d резултат',
		2	=> 'Пребарувањето најде повеќе од %d резултата',
		3	=> 'Пребарувањето најде повеќе од %d резултати',
	),

	'GLOBAL'				=> 'Глобално соопштение',

	'IGNORED_TERMS'			=> 'игнорирани',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следните зборови во Вашето пребарување беа игнорирани, бидејќи се премногу вообичаени зборови: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Видете го мислењето',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Форумот бара да бидете регистриран и најавен за да ги видите сопствените мислења.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Форумот бара да бидете регистриран и најавен за да ги видите непрочитаните мислења.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Форумот бара да бидете регистриран и најавен за да ги видите новите мислења од Вашата последна посета.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Наведовте премногу зборови за пребарување. Ве молиме не внесувајте повеќе од %1$d збор.',
		2	=> 'Наведовте премногу зборови за пребарување. Ве молиме не внесувајте повеќе од %1$d збора.',
		3	=> 'Наведовте премногу зборови за пребарување. Ве молиме не внесувајте повеќе од %1$d збора.',
	),

	'NO_KEYWORDS'			=> 'Мора да наведете барем еден збор за пребарување. Секој збор мора да се состои од најмалку %s и не смее да содржи повеќе од %s со исклучок на џокерите.',
	'NO_RECENT_SEARCHES'	=> 'Нема неодамнешни побарувања.',
	'NO_SEARCH'				=> 'Не сте овластени да го користите системот за пребарување.',
	'NO_SEARCH_RESULTS'		=> 'Не се пронајдени соодветни резултати.',
	'NO_SEARCH_LOAD'		=> 'Се извинуваме, но не можете да пребарувате во моментов. Серверот има големо оптоварување. Ве молиме обидете се повторно подоцна.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Се извинуваме, но не можете да пребарувате во моментов. Ве молиме обидете се повторно по %d секунда.',
		2	=> 'Се извинуваме, но не можете да пребарувате во моментов. Ве молиме обидете се повторно по %d секунди.',
		3	=> 'Се извинуваме, но не можете да пребарувате во моментов. Ве молиме обидете се повторно по %d секунди.',
	),
	'NO_SEARCH_UNREADS'		=> 'Се извинуваме, но пребарувањето за непрочитани мислења е исклучено на овој форум.',
	'WORD_IN_NO_POST'		=> 'Нема пронајдени мислења, бидејќи зборот <strong>%s</strong> не се содржи никаде.',
	'WORDS_IN_NO_POST'		=> 'Нема пронајдени мислења, бидејќи зборовите <strong>%s</strong> не се содржат никаде.',

	'POST_CHARACTERS'		=> 'знаци во мислења',
	'PHRASE_SEARCH_DISABLED'	=> 'Пребарувањето според точна фраза не се поддржува на овој форум.',

	'RECENT_SEARCHES'		=> 'Неодамнешни пребарувања',
	'RESULT_DAYS'			=> 'Ограничи ги резултатите на претходните',
	'RESULT_SORT'			=> 'Сортирај ги резултатите според',
	'RETURN_FIRST'			=> 'Најди го првото',
	'GO_TO_SEARCH_ADV'	=> 'Напреднато пребарување',

	'SEARCHED_FOR'				=> 'Користен термин за пребарување',
	'SEARCHED_TOPIC'			=> 'Пребарувана тема',
	'SEARCHED_QUERY'			=> 'Пребарување',
	'SEARCH_ALL_TERMS'			=> 'Пребарувај за сите термини или користи го барањето како што е внесено',
	'SEARCH_ANY_TERMS'			=> 'Пребарување за сите термини',
	'SEARCH_AUTHOR'				=> 'Пребарување на автор',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Користете го знакот * како џокер за делумни совпаѓања.',
	'SEARCH_FIRST_POST'			=> 'Само првото мислење во темите',
	'SEARCH_FORUMS'				=> 'Пребарувај во форуми',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Изберете ги форумот или форумите во кои сакате да извршите пребарување. Подфорумите автоматски влегуваат во пребарувањето доколку не ја исклучите опцијата „Пребарувај подформи“ подолу.',
	'SEARCH_IN_RESULTS'			=> 'Пребарувај во резултатите',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Ставете <strong>+</strong> пред зборот кој треба да биде пронајден и <strong>-</strong>пред зборот кој не треба да биде пронајден. Внесете листа од зборови разделени со <strong>|</strong> во загради ако само еден од зборовите треба да биде пронајден. Користете го знакот * како џокер за делумни совпаѓања.',
	'SEARCH_MSG_ONLY'			=> 'Само текстот на пораката',
	'SEARCH_OPTIONS'			=> 'Опции за пребарување',
	'SEARCH_QUERY'				=> 'Пребарување',
	'SEARCH_SUBFORUMS'			=> 'Пребарувај подфоруми',
	'SEARCH_TITLE_MSG'			=> 'Наслови на мислења и текст на пораки',
	'SEARCH_TITLE_ONLY'			=> 'Само наслови на теми',
	'SEARCH_WITHIN'				=> 'Барај во',
	'SORT_ASCENDING'			=> 'Растечки',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'Опаѓачки',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Наслов на мислењето',
	'SORT_TIME'					=> 'Дата/Час',
	'SPHINX_SEARCH_FAILED'		=> 'Пребарувањето е неуспешно: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Се извинуваме, но пребарувањето не можеше да биде извршено. Повеќе информација е запишана во дневникот за грешки.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Мора да внесете најмалку %d знак од името на авторот.',
		2	=> 'Мора да внесете најмалку %d знака од името на авторот.',
		3	=> 'Мора да внесете најмалку %d знаци од името на авторот.',
	),
));
