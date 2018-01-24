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
	'CONFIG_NOT_EXIST'					=> 'إعدادات "%s" غير موجودة بشكل غير متوقع.',

	'GROUP_NOT_EXIST'					=> 'المجموعة "%s" غير موجودة بشكل غير متوقع.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'تطبيق الاعتمادات الخاصة بـ %s.',
	'MIGRATION_DATA_DONE'				=> 'تم تثبيت البيانات: %1$s; الوقت: %2$.2f ثوان',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'يتم تثبيت البيانات: %1$s; الوقت: %2$.2f ثوان',
	'MIGRATION_DATA_RUNNING'			=> 'يتم تثبيت البيانات: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'الترحيلة مثبتة مسبقًا (تم تخطيها): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'حدث  خطأ أثناء العمل وتم عمل استثناء. التغييرات التي حدثت قبل وقوع الخطأ تم عكسها على قدر المستطاع، ولكن يجب عليك فحص المنتدى بحثًا عن أخطاء.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'الترحيلة "%1$s" لا يمكن إتمامها، الترحيلة "%2$s" مفقودة.',
	'MIGRATION_NOT_INSTALLED'			=> 'لم تُثبت الترحيلة "%s".',
	'MIGRATION_NOT_VALID'				=> '%s ليست ترحيلة صالحة.',
	'MIGRATION_SCHEMA_DONE'				=> 'تم تثبيت المخطط: %1$s; الوقت: %2$.2f ثوان',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'تثبيت المخطط: %1$s; الوقت: %2$.2f ثانية',
	'MIGRATION_SCHEMA_RUNNING'			=> 'يتم تثبيت المخطط: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'البيانات أُعيدت: %1$s; الوقت: %2$.2f ثانية',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'إعادة البيانات: %1$s; الوقت: %2$.2f ثانية',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'إعادة البيانات: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'المخطط أُعيد: %1$s; الوقت: %2$.2f ثانية',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'إعادة المخطط: %1$s; الوقت: %2$.2f ثانية',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'إعادة المخطط: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'الترحيلة غير صالحة. هناك شرط ناقص من مساعد جملة if الشرطية.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'الترحيلة غير صالحة. هناك استدعاء لخطوة الترحيلة ناقص من مساعد جملة if الشرطية.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'الترحيلة غير صالحة. لم نتمكن من استدعاء دالة خاصة قابلة للاستدعاء.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'الترحيلة غير صالحة. نوع أداة ترحيل غير معروف تم العثور عليه.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'الترحيلة غير صالحة. أداة ترحيل غير معرّفة تم العثور عليها.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'الترحيلة غير صالحة. طريقة أداة ترحيل غير معرّفة تم العثور عليها.',

	'MODULE_ERROR'						=> 'حدث خطًا أثناء إنشاء الموديول: %s',
	'MODULE_EXISTS'						=> 'الموديول موجودة فعلاً: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'العديد من الموديولات موجودة بنفس الاسم : %s. حاول استخدام المفاتيح السابق/التالي لمعرفة موضع الموديول بوضوح.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'هناك ملف بيانات موديول ضروري مفقود: %2$s',
	'MODULE_NOT_EXIST'					=> 'هناك موديول ضروري مفقود: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'غير قادر على التعرف على معرف الموديول الأصل: %s',
	'PERMISSION_NOT_EXIST'				=> 'إعدادات التصريح "%s" غير موجودة بشكل غير متوقع.',

	'ROLE_NOT_EXIST'					=> 'دور التصريح "%s" غير موجود بشكل غير متوقع.',
));
