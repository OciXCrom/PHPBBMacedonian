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
	'ALREADY_DEFAULT_GROUP'		=> 'Избраната група е веќе Вашата стандардна група.',
	'ALREADY_IN_GROUP'			=> 'Веќе сте член на избраната група.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Веќе сте подале барање за членство во избраната група.',

	'CANNOT_JOIN_GROUP'			=> 'Не можете да се придружите во оваа група. Можете да се придружувате само во отворени и слободно отворени групи.',
	'CANNOT_RESIGN_GROUP'		=> 'Не можете да ја напуштите оваа група. Можете да напуштате само во отворени и слободно отворени групи.',
	'CHANGED_DEFAULT_GROUP'		=> 'Стандардната група е успешна променета.',

	'GROUP_AVATAR'						=> 'Аватар на групата',
	'GROUP_CHANGE_DEFAULT'				=> 'Дали сте сигурни дека сакате да ја направите групата „%s“ Ваша стандардна група?',
	'GROUP_CLOSED'						=> 'Затворена',
	'GROUP_DESC'						=> 'Опис на групата',
	'GROUP_HIDDEN'						=> 'Скриена',
	'GROUP_INFORMATION'					=> 'Информации за корисничката група',
	'GROUP_IS_CLOSED'					=> 'Оваа група е затворена. Нови членови може да се придружуваат само преку покана за членство од лидер на групата.',
	'GROUP_IS_FREE'						=> 'Оваа група е слободно отворна. Сите нови членови се добредојдени.',
	'GROUP_IS_HIDDEN'					=> 'Оваа група е скриена. Само нејзините членови можат да ја видат.',
	'GROUP_IS_OPEN'						=> 'Оваа група е отворена. Корисниците можат да испратат барање за членство.',
	'GROUP_IS_SPECIAL'					=> 'Оваа група е специјална. Специјалните групи се управуваат од администраторот на форумот.',
	'GROUP_JOIN'						=> 'Придружи се на групата',
	'GROUP_JOIN_CONFIRM'				=> 'Сигурни ли сте дека сакате да се придружите на избраната група?',
	'GROUP_JOIN_PENDING'				=> 'Барање за членство во група',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Дали сте сигурни дека сакате да испратите барање за членство во избраната група?',
	'GROUP_JOINED'						=> 'Успешно се придруживте во избраната група.',
	'GROUP_JOINED_PENDING'				=> 'Успешно испративте барање за членство во групата. Ве молиме почекајте лидер на групата да го одобри Вашето барање.',
	'GROUP_LIST'						=> 'Управувај со корисниците',
	'GROUP_MEMBERS'						=> 'Членови на групата',
	'GROUP_NAME'						=> 'Име на групата',
	'GROUP_OPEN'						=> 'Отворена',
	'GROUP_RANK'						=> 'Ранк на групата',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Напушти ја групата',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Дали сте сигурни дека сакате да ја напуштите избраната група?',
	'GROUP_RESIGN_PENDING'				=> 'Откажи го барањето за членство',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Дали сте сигурни дека сакате да го откажете барањето за членство во избраната група?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Успешно бевте отстранети од избраната група.',
	'GROUP_RESIGNED_PENDING'			=> 'Вашето барање за членство во избраната група беше успешно отстрането.',
	'GROUP_TYPE'						=> 'Тип на групата',
	'GROUP_UNDISCLOSED'					=> 'Скриена група',
	'FORUM_UNDISCLOSED'					=> 'Модерирање скриен(и) форум(и)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Треба да се најавите за да ги видите деталите на групата.',

	'NO_LEADERS'					=> 'Не сте лидер на ниту една група.',
	'NOT_LEADER_OF_GROUP'			=> 'Бараната операција не може да биде извршена, бидејќи Вие не сте лидер на избраната група.',
	'NOT_MEMBER_OF_GROUP'			=> 'Бараната операција не може да биде извршена, бидејќи Вие не сте член на избраната група или Вашето членство сè уште не е одобрено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Не можете да ја напуштите Вашата стандардна група.',

	'PRIMARY_GROUP'		=> 'Стандардна група',

	'REMOVE_SELECTED'		=> 'Отстрани ги избраните',

	'USER_GROUP_CHANGE'			=> 'Од групата „%1$s“ во „%2$s“',
	'USER_GROUP_DEMOTE'			=> 'Напушти го лидерството',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Дали сте сигурни дека сакате да се отстраните од лидерството избраната група?',
	'USER_GROUP_DEMOTED'		=> 'Успешно бевте отстранет од лидерството на групата.',
));
