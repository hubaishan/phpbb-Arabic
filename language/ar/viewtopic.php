<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
* 2017 Updated and mainted by Saeed Hubaishan <http://salafitech.net>
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
	'APPROVE'								=> 'موافقة',
	'ATTACHMENT'						=> 'مرفق',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'خاصية المرفقات معطلة',

	'BOOKMARK_ADDED'		=> 'أُضيف الموضوع إلى المفضلة بنجاح',
	'BOOKMARK_ERR'			=> 'حدث خطأ عند إضافة الموضوع للمفضلة، رجاءً حاول مرة أخرى!',
	'BOOKMARK_REMOVED'		=> 'حُذِفَ الموضوع من المفضلة بنجاح',
	'BOOKMARK_TOPIC'		=> 'إضافة للمفضلة',
	'BOOKMARK_TOPIC_REMOVE'	=> 'حذف من المفضلة',
	'BUMPED_BY'				=> 'آخر رفع بواسطة %1$s في %2$s',
	'BUMP_TOPIC'			=> 'رفع الموضوع',

	'CODE'					=> 'كود',

	'DELETE_TOPIC'			=> 'حذف الموضوع',
	'DELETED_INFORMATION'	=> 'حذف بواسطة %1$s في %2$s',
	'DISAPPROVE'					=> 'رفض',
	'DOWNLOAD_NOTICE'		=> 'ليس لديك الصلاحية لمشاهدة المرفقات',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'آخر تعديل بواسطة %2$s في %3$s، تم التعديل مرة واحدة.',
		2	=> 'آخر تعديل بواسطة %2$s في %3$s، تم التعديل مرتين في المجمل.',
		3	=> 'آخر تعديل بواسطة %2$s في %3$s، تم التعديل %1$d مرات في المجمل.',
		4	=> 'آخر تعديل بواسطة %2$s في %3$s، تم التعديل %1$d مرة في المجمل.',
		5	=> 'آخر تعديل بواسطة %2$s في %3$s، تم التعديل %1$d مرة في المجمل.',
		),
	'EMAIL_TOPIC'			=> 'أرسِل لصديق',
	'ERROR_NO_ATTACHMENT'	=> 'المرفق المطلوب لم يعد موجود',

	'FILE_NOT_FOUND_404'	=> 'الملف <strong>%s</strong> غير موجود',
	'FORK_TOPIC'			=> 'نسخ الموضوع',
	'FULL_EDITOR'			=> 'المحرر الكامل',

	'LINKAGE_FORBIDDEN'		=> 'غير مصرح لك بمشاهدة أو تحميل أو الربط من و إلى هذا الموقع',
	'LOGIN_NOTIFY_TOPIC'	=> 'لديك تنبيه حول هذا الموضوع رجاءً سجل الدخول للاطلاع عليه',
	'LOGIN_VIEWTOPIC'		=> 'ينبغي أن تكون عضوًا مسجلًا لتتمكن من مشاهدة هذا الموضوع',

	'MAKE_ANNOUNCE'				=> 'تحويل إلى "إعلان"',
	'MAKE_GLOBAL'				=> 'تحويل إلى "إعلان عام"',
	'MAKE_NORMAL'				=> 'تحويل إلى "موضوع عادي"',
	'MAKE_STICKY'				=> 'تحويل إلى "مثبت"',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'يمكنك اختيار خيار واحد',
		2	=> 'يمكنك اختيار حتى خيارين',
		3	=> 'يمكنك اختيار حتى <strong>%d</strong> خيارات',
		4	=> 'يمكنك اختيار حتى <strong>%d</strong> خيارًا',
		5	=> 'يمكنك اختيار حتى <strong>%d</strong> خيار',
		),
	'MISSING_INLINE_ATTACHMENT'	=> 'المرفق <strong>%s</strong> لم يعد موجود',
	'MOVE_TOPIC'				=> 'نقل الموضوع',

	'NO_ATTACHMENT_SELECTED'=> 'لم تضِف مرفقا للتحميل أو التنزيل',
	'NO_NEWER_TOPICS'		=> 'ليست هناك مواضيع جديدة',
	'NO_OLDER_TOPICS'		=> 'ليست هناك مواضيع قديمة',
	'NO_UNREAD_POSTS'		=> 'ليست هناك مشاركات جديدة غير مقروءة',
	'NO_VOTE_OPTION'		=> 'عليك تحديد أحد الخيارات للمشاركة في التصويت',
	'NO_VOTES'				=> 'لا أصوات',
	'NO_AUTH_PRINT_TOPIC'	=> 'غير مصرّح لك بطباعة المواضيع',

	'POLL_ENDED_AT'			=> 'التصويت ينتهي في %s',
	'POLL_RUN_TILL'			=> 'التصويت متاح حتى %s',
	'POLL_VOTED_OPTION'		=> 'لقد صوت لهذا الخيار',
	'POST_DELETED_RESTORE'	=> 'تم حذف هذه المشاركة. من الممكن استعادتها مرة أخرى.',
	'PRINT_TOPIC'			=> 'نسخة للطباعة',

	'QUICK_MOD'				=> 'أدوات الإشراف',
	'QUICKREPLY'			=> 'رد سريع',
	'QUOTE'					=> 'اقتباس',

	'REPLY_TO_TOPIC'		=> 'الرد على الموضوع',
	'RESTORE'				=> 'استعادة',
	'RESTORE_TOPIC'			=> 'استعادة الموضوع',
	'RETURN_POST'			=> '%sعودة للمشاركة%s',

	'SUBMIT_VOTE'			=> 'أرسل التصويت',

	'TOPIC_TOOLS'			=> 'أدوات الموضوع',
	'TOTAL_VOTES'			=> 'إجمالي الأصوات',

	'UNLOCK_TOPIC'			=> 'فتح الموضوع',

	'VIEW_INFO'				=> 'تفاصيل المشاركة',
	'VIEW_NEXT_TOPIC'		=> 'الموضوع التالي',
	'VIEW_PREVIOUS_TOPIC'	=> 'الموضوع السابق',
	'VIEW_RESULTS'			=> 'مشاهدة النتائج',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> 'مشاركة واحدة',
		2	=> 'مشاركتان',
		3	=> '%d مشاركات',
		4	=> '%d مشاركةً',
		5	=> '%d مشاركة',
		),
	'VIEW_UNREAD_POST'		=> 'المشاركة الأولى غير المقروءة',
	'VOTE_SUBMITTED'		=> 'تسجّل صوتك بنجاح',
	'VOTE_CONVERTED'		=> 'لا يمكن دمج التصويت بعد عملية التحويل!',

));
