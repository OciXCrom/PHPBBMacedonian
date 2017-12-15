<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Додади датотеки',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Додадете датотеки кон прикачувањето и кликнете на копчето за започнување.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s веќе се наоѓа во процесот на прикачување.',
	'PLUPLOAD_CLOSE'			=> 'Затвори',
	'PLUPLOAD_DRAG'				=> 'Повлечете датотеки овде.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Грешка: дупликат датотека.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можете да прикачите датотеки и со нивно влечење и спуштане во полето за текст.',
	'PLUPLOAD_ERR_INPUT'		=> 'Неуспешно отварање на влезниот проток.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Неуспешно преместување на прикачената датотека.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Неуспешно отварање на излезниот проток.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Преголема датотека:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Грешка во бројот на датотеки.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Невалидна наставка:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Нема доволно меморија.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Внесената URL адреса е погрешна или не постои.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Грешка во наставката на датотеката.',
	'PLUPLOAD_FILE'				=> 'Датотека: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Датотека: %s, големина: %d, максимална големина: %d',
	'PLUPLOAD_FILENAME'			=> 'Име на датотеката',
	'PLUPLOAD_FILES_QUEUED'		=> '%d дадотеки во процесот',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Генерична грешка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP грешка.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Форматот на сликата е неправилен или не се поддржува.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init грешка.',
	'PLUPLOAD_IO_ERROR'			=> 'IO грешка.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Н/П',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Сигурносна грешка.',
	'PLUPLOAD_SELECT_FILES'		=> 'Избери датотеки',
	'PLUPLOAD_SIZE'				=> 'Големина',
	'PLUPLOAD_SIZE_ERROR'		=> 'Грешка во големината на датотеката.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Започни го прикачувањето',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Започни го процесот на прикачување',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Сопри го прикачувањето',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Сопри го тековното прикачување',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Прикачени се %d/%d датотеки',
));
