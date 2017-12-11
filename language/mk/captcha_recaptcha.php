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
	'RECAPTCHA_LANG'				=> 'mk',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'За да можете да користите reCaptcha, морате да создадете сметка на <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Даденото решение е погрешно',
	'RECAPTCHA_NOSCRIPT'			=> 'Ве молиме активирајте JavaScript во вашиот прелистувач за да го активирате предизвикот.',

	'RECAPTCHA_PUBLIC'				=> 'Јавен reCaptcha клуч',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Вашиот јавен reCaptcha клуч. Клучеви може да се добијат на <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Приватен reCaptcha клуч',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Вашиот приватен reCaptcha клуч. Клучеви може да се добијат на <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Со цел да спречиме автоматски регистрации од ботови, од Вас бараме да го завршите следниов предизвик.',
));
