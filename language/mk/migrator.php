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
	'CONFIG_NOT_EXIST'					=> 'Неочекувано, поставувањето за конфигурација „%s“ не постои.',

	'GROUP_NOT_EXIST'					=> 'Неочекувано, групата „%s“ не постои.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Примени зависности од %s.',
	'MIGRATION_DATA_DONE'				=> 'Инсталирани податои: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Инсталирање податоци: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_RUNNING'			=> 'Инсталирање податоци: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Миграцијата е веќе ефективно инсталирана (прескокната): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Нешто тргна наопаку при барањето и исклучок беше фрлен. Промените направени пред грешката се вратени колку што е можно најдобро, но сепак би требало да го проверите форумот за грешки.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Миграцијата „%1$s“ не може да биде извршена, недостасува миграцијата „%2$s“.',
	'MIGRATION_NOT_INSTALLED'			=> 'Миграцијата „%s“ не е инсталирана.',
	'MIGRATION_NOT_VALID'				=> '%s не е валидна миграција.',
	'MIGRATION_SCHEMA_DONE'				=> 'Инсталирана шема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Инсталирање шема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Инсталирање шема: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Вратени податоци: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Враќање податоци: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Враќање податоци: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Вратена шема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Враќање шема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Враќање шема: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Некоја миграција е невалидна. Недостасува кондиција во помошник на if-инструкција.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Некоја миграција е невалидна. Недостасува валиден позив за чекор во миграцијата во помошник на if-инструкција.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Некоја миграција е невалидна. Некоја прилагодена функција не може да биде повикана.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Некоја миграција е невалидна. Пронајдена е непозната миграциска алатка.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Некоја миграција е невалидна. Пронајдена е недефинирана миграциска алатка.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Некоја миграција е невалидна. Пронајден е недефиниран метод за миграциска алатка.',

	'MODULE_ERROR'						=> 'Се појави грешка при создавањето на модул: %s',
	'MODULE_EXISTS'						=> 'Модулот веќе постои: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Неколку модули со даденото родителско име за јазик веќе постојатt: %s. Обидете се да користите before/after клучеви за да го разјасните поставувањето на модулот.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Недостасува потребна датотека со информација за модул: %2$s',
	'MODULE_NOT_EXIST'					=> 'Потребен модул не постои: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Не може да се утврди идентификаторот на родителскиот модул: %s',
	'PERMISSION_NOT_EXIST'				=> 'Неочекувано, прилагодувањето за овластување „%s“ не постои.',

	'ROLE_NOT_EXIST'					=> 'Неочекувано, улогата за овластување „%s“ не постои.',
));
