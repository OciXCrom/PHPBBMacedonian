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
	'ADD_ATTACHMENT'			=> 'Прикачи датотека',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Доколку сакате да прикачите една или повеќе датотеки, внесете ги деталите подолу.',
	'ADD_FILE'					=> 'Додади ја датотеката',
	'ADD_POLL'					=> 'Создавање анкета',
	'ADD_POLL_EXPLAIN'			=> 'Доколку не сакате да додадете анкета во Вашата тема, оставете ги полињата празни.',
	'ALREADY_DELETED'			=> 'Оваа порака веќе е избришана.',
	'ATTACH_DISK_FULL'			=> 'Нема доволно слободен простор на дискот за да биде прикачена датотеката.',
	'ATTACH_QUOTA_REACHED'		=> 'Се извинуване, но достигнат е максималниот број дозволени прикачени датотеки на овој форум.',
	'ATTACH_SIG'				=> 'Додади потпис (потписите може да се променат преку ККП)',

	'BBCODE_A_HELP'				=> 'Вметнување прикачена датотека во мислењето: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Задебелен текст: [b]текст[/b]',
	'BBCODE_C_HELP'				=> 'Код: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=ширина,висина]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Големина на фонтот: [size=85]мал текст[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s е <em>ИСКЛУЧЕН</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s е <em>ВКЛУЧЕН</em>',
	'BBCODE_I_HELP'				=> 'Искосен текст: [i]текст[/i]',
	'BBCODE_L_HELP'				=> 'Список: [list][*]текст[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Списочен елемент: [*]текст',
	'BBCODE_O_HELP'				=> 'Подреден список: на пример пример [list=1][*]Прв елемент[/list] or [list=a][*]Подточка а[/list]',
	'BBCODE_P_HELP'				=> 'Вметни слика: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Цитиран текст: [quote]текст[/quote]',
	'BBCODE_S_HELP'				=> 'Боја на текст: [color=red]текст[/color] или [color=#FF0000]текст[/color]',
	'BBCODE_U_HELP'				=> 'Подвлечен текст: [u]текст[/u]',
	'BBCODE_W_HELP'				=> 'Вметни линк: [url]http://url[/url] или [url=http://url]URL текст[/url]',
	'BBCODE_Y_HELP'				=> 'Список: додади елемент во списокот',
	'BUMP_ERROR'				=> 'Не можете да ја издигнете темата толку брзо по последното мислење во неа.',

	'CANNOT_DELETE_REPLIED'		=> 'Можете да бришете само мислења кои немаат добиено одговор.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ова мислење е заклучено и не можете да го промените.',
	'CANNOT_EDIT_TIME'			=> 'Повеќе не можете да го променувате или избришете мислењето.',
	'CANNOT_POST_ANNOUNCE'		=> 'Не можете да објавувате соопштенија.',
	'CANNOT_POST_STICKY'		=> 'Не можете да објавувате закачени теми.',
	'CHANGE_TOPIC_TO'			=> 'Промени го типот на темата на',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Вашата порака содржи %1$d знак.',
		2	=> 'Вашата порака содржи %1$d знака.',
		3	=> 'Вашата порака содржи %1$d знаци.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Вашиот потпис содржи %1$d знак.',
		2	=> 'Вашиот потпис содржи %1$d знака.',
		3	=> 'Вашиот потпис содржи %1$d знаци.',
	),
	'CLOSE_TAGS'				=> 'Затвори ги таговите',
	'CURRENT_TOPIC'				=> 'Тековна тема',

	'DELETE_FILE'				=> 'Избриши ја датотеката',
	'DELETE_MESSAGE'			=> 'Избриши ја пораката',
	'DELETE_MESSAGE_CONFIRM'	=> 'Сигурни ли сте дека сакате да ја избришете пораката?',
	'DELETE_OWN_POSTS'			=> 'Можете да ги бришете само сопствените мислења.',
	'DELETE_PERMANENTLY'		=> 'Избриши засекогаш',
	'DELETE_POST_CONFIRM'		=> 'Сигурни ли сте дека сакате да го избришете мислењето?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Сигурни ли сте дека сакате да го избришете мислењето <strong>засекогаш</strong>?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Избриши го мислењето засекогаш за да не може да биде повратено',
		2	=> 'Избриши ги засекогаш овие %1$d мислења за да не може да бидат повратени',
		3	=> 'Избриши фи засекогаш овие %1$d мислења за да не може да бидат повратени',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Сигурни ли сте дека сакате да ги избришете мислењата?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Сигурни ли сте дека сакате да ги избришете мислењата <strong>засекогаш</strong>?',
	'DELETE_REASON'				=> 'Причина за бришење',
	'DELETE_REASON_EXPLAIN'		=> 'Внесената причина ќе биде видливе за модераторите.',
	'DELETE_POST_WARN'			=> 'Избриши го мислењето',
	'DELETE_TOPIC_CONFIRM'		=> 'Сигурни ли сте дека сакате да ја избришете темата?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Избриши ја темата засекогаш за да не може да биде повратена',
		2	=> 'Избриши ги засекогаш овие %1$d теми за да не може да бидат повратени',
		3	=> 'Избриши ги засекогаш овие %1$d теми за да не може да бидат повратени',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Сигурни ли сте дека сакате да ја избришете темата <strong>засекогаш</strong>?',
	'DELETE_TOPICS_CONFIRM'		=> 'Сигурни ли сте дека сакате да ги избришете темите?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Сигурни ли сте дека сакате да ги избришете темите <strong>засекогаш</strong>?',
	'DISABLE_BBCODE'			=> 'Исклучи BBCode',
	'DISABLE_MAGIC_URL'			=> 'Не преобразувај URL адреси автоматски',
	'DISABLE_SMILIES'			=> 'Исклучи емотикони',
	'DISALLOWED_CONTENT'		=> 'Прикачувањето беше одбиено бидејќи прикачената датотека беше идентификувана како потенцијален вектор на напади.',
	'DISALLOWED_EXTENSION'		=> 'Наставката %s не е дозволена.',
	'DRAFT_LOADED'				=> 'Недовршеното мислење е додадено во полето за пишување и истото ќе биде избришано по објавувањето на мислењето.',
	'DRAFT_LOADED_PM'			=> 'Недовршеното мислење е додадено во полето за пишување и истото ќе биде избришано по испраќањето на пораката.',
	'DRAFT_SAVED'				=> 'Недовршеното мислење е успешно зачувано.',
	'DRAFT_TITLE'				=> 'Наслов на недовршеното мислење',

	'EDIT_REASON'				=> 'Причина за промена на мислењето',
	'EMPTY_FILEUPLOAD'			=> 'Прикачената датотека е празна.',
	'EMPTY_MESSAGE'				=> 'Мора да внесете текст во објавата.',
	'EMPTY_REMOTE_DATA'			=> 'Датотеката не можеше да биде прикачена, Ве молиме обидете се да ја прикачите рачно.',

	'FLASH_IS_OFF'				=> '[flash] е ИСКЛУЧЕН',
	'FLASH_IS_ON'				=> '[flash] е ВКЛУЧЕН',
	'FLOOD_ERROR'				=> 'Не можете да објавите ново мислење толку брзо по последното.',
	'FONT_COLOR'				=> 'Боја на текстот',
	'FONT_COLOR_HIDE'			=> 'Скриј ја бојата на текстот',
	'FONT_HUGE'					=> 'Огромен',
	'FONT_LARGE'				=> 'Голем',
	'FONT_NORMAL'				=> 'Нормален',
	'FONT_SIZE'					=> 'Големина на фонт',
	'FONT_SMALL'				=> 'Мал',
	'FONT_TINY'					=> 'Минијатурен',

	'GENERAL_UPLOAD_ERROR'		=> 'Неуспешно прикачување на датотека во %s.',

	'IMAGES_ARE_OFF'			=> '[img] е ИСКЛУЧЕН',
	'IMAGES_ARE_ON'				=> '[img] е ВКЛУЧЕН',
	'INVALID_FILENAME'			=> '%s е невалидно име на датотека.',

	'LOAD'						=> 'Вчитај',
	'LOAD_DRAFT'				=> 'Вчитај недовршено мислење',
	'LOAD_DRAFT_EXPLAIN'		=> 'Тука можете да го изберете недовршеното мислење кое сакате да продолжите да го пишувате. Вашата тековна објава ќе биде откажана и нејзината содржина ќе биде избришана. Можете да прегледувате, променувате и бришете недовршени мислења во Корисничкиот Контролен Панел.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Мора да се најавите за да можете да издигнувате теми во овој форум.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Мора да се најавите за да можете да бришете мислења во овој форум.',
	'LOGIN_EXPLAIN_POST'		=> 'Мора да се најавите за да можете да објавувате во овој форум.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Мора да се најавите за да можете да цитирате мислења во овој форум.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Мора да се најавите за да можете да одговарате на теми во овој форум.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Можете да користите фонтови со големина до %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Вашите flash датотеки не може да бидат повисоки од %d пиксел.',
		2	=> 'Вашите flash датотеки не може да бидат повисоки од %d пиксела.',
		3	=> 'Вашите flash датотеки не може да бидат повисоки од %d пиксели.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Вашите flash датотеки не може да бидат пошироки од %d пиксел.',
		2	=> 'Вашите flash датотеки не може да бидат пошироки од %d пиксела.',
		3	=> 'Вашите flash датотеки не може да бидат пошироки од %d пиксели.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Вашите слики не може да бидат повисоки од %d пиксел.',
		2	=> 'Вашите слики не може да бидат повисоки од %d пиксела.',
		3	=> 'Вашите слики не може да бидат повисоки од %d пиксели.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Вашите слики не може да бидат пошироки од %d пиксел.',
		2	=> 'Вашите слики не може да бидат пошироки од %d пиксела.',
		3	=> 'Вашите слики не може да бидат пошироки од %d пиксели.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Внесете ја Вашата порака овде. Пораката не може да содржи повеќе од <strong>%d</strong> знак.',
		2	=> 'Внесете ја Вашата порака овде. Пораката не може да содржи повеќе од <strong>%d</strong> знака.',
		3	=> 'Внесете ја Вашата порака овде. Пораката не може да содржи повеќе од <strong>%d</strong> знаци.',
	),
	'MESSAGE_DELETED'			=> 'This message has been deleted successfully.',
	'MORE_SMILIES'				=> 'View more smilies',

	'NOTIFY_REPLY'				=> 'Notify me when a reply is posted',
	'NOT_UPLOADED'				=> 'File could not be uploaded.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'				=> 'No PM icon',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title.',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified.',
	'NO_TEMP_DIR'				=> 'Temporary folder could not be found or is not writable.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_UPLOAD_STOPPED'		=> 'A PHP extension has stopped the file upload.',
	'PHP_SIZE_NA'				=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s file size is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'Delete poll',
	'POLL_FOR'					=> 'Run poll for',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 for a never ending poll.',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option. If you remove or add options all previous votes will be reset.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	),
	'POLL_QUESTION'				=> 'Poll question',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Posted attachments',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'This post has been deleted successfully.',
	'POST_EDITED'				=> 'This post has been edited successfully.',
	'POST_EDITED_MOD'			=> 'This post has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Post icon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Post review',
	'POST_REVIEW_EDIT'			=> 'Post review',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'This message has been posted successfully.',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'Post topic as',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'You may embed only %d quote within each other.',
		2	=> 'You may embed only %d quotes within each other.',
	),
	'QUOTE_NO_NESTING'			=> 'You may not embed quotes within each other.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'The specified file could not be uploaded because the request timed out.',
	'SAVE'						=> 'Save',
	'SAVE_DATE'					=> 'Saved at',
	'SAVE_DRAFT'				=> 'Save draft',
	'SAVE_DRAFT_CONFIRM'		=> 'Please note that saved drafts only include the subject and the message, any other element will be removed. Do you want to save your draft now?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies are ИСКЛУЧЕН',
	'SMILIES_ARE_ON'			=> 'Smilies are ВКЛУЧЕН',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Announcement/Global time limit',
	'STICK_TOPIC_FOR'			=> 'Stick topic for',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 for a never ending Sticky/Announcement/Global. Please note that this number is relative to the date of the post.',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'You need to enter at least %1$d character.',
		2	=> 'You need to enter at least %1$d characters.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'The maximum number of allowed characters is %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Topic has been bumped successfully.',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Your message contains the following unsupported characters:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Your subject contains the following unsupported characters:<br />%s',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] is ИСКЛУЧЕН',
	'URL_IS_ON'					=> '[url] is ВКЛУЧЕН',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'		=> 'You cannot delete posts in this forum.',
	'USER_CANNOT_EDIT'			=> 'You cannot edit posts in this forum.',
	'USER_CANNOT_REPLY'			=> 'You cannot reply in this forum.',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sView your submitted message%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sView your submitted private message%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1$d %2$s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$s wide, %2$s high and at most %3$s wide and %4$s high. The submitted image is %5$s wide and %6$s high.',
));
