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
	'ACP_STYLES_EXPLAIN'	=> 'هنا تستطيع إدارة جميع الاستايلات المتاحة في منتداك. تستطيع تعديل الاستايلات الموجودة، حذفها، تعطيلها، إعادة تفعيلها، أو تثبيت استايلات جديدة. تستطيع أيضا مشاهدة كيف سيظهر الاستايل باستعمال خاصية المشاهدة. أيضا كُتِب عدد الأعضاء الذين يستعملون كل استايل، يرجى ملاحظة أن تجاهل استايلات العضو لن يحسبوا.',

	'CANNOT_BE_INSTALLED'			=> 'لا يمكن التثبيت',
	'CONFIRM_UNINSTALL_STYLES'		=> 'هل أنت متأكد أنك تريد إلغاء تثبيت الاستايلات المحددة؟',
	'COPYRIGHT'						=> 'الحقوق',

	'DEACTIVATE_DEFAULT'		=> 'لا يمكنك تعطيل الاستايل الافتراضي',
	'DELETE_FROM_FS'			=> 'حذف من ملف النظام',
	'DELETE_STYLE_FILES_FAILED'	=> 'خطأ في حذف الملفات لاستايل "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'تم حذف ملفات استايل "%s".',
	'DETAILS'					=> 'تفاصيـل',

	'INHERITING_FROM'			=> 'مصمم على',
	'INSTALL_STYLE'				=> 'تتبيت الاستايل',
	'INSTALL_STYLES'			=> 'تثبيت الاستايلات',
	'INSTALL_STYLES_EXPLAIN'	=> 'من هنا يمكنك تثبيت استايلات جديدة.<br />إذا لم تستطع إيجاد استايل معين في القائة بأسفل، يرجى التأكد من أن الاستايل غير مثبت بالفعل. إذا لم يكن مثبتًا، يرجى التأكد من أنه تم رفعه بصورة سليمة.',
	'INVALID_STYLE_ID'			=> 'معرف استايل خاطئ.',

	'NO_MATCHING_STYLES_FOUND'	=> 'لا توجد استايلات تماثل بحثك.',
	'NO_UNINSTALLED_STYLE'		=> 'لم يوجد أي استايل غير مركب',

	'PURGED_CACHE'				=> 'تم حذف الكاش.',

	'REQUIRES_STYLE'			=> 'هذا الاستايل يتطلب أن يكون استايل "%s" مثبتًا.',

	'STYLE_ACTIVATE'			=> 'تفعيل',
	'STYLE_ACTIVE'				=> 'فعال',
	'STYLE_DEACTIVATE'			=> 'تعطيل',
	'STYLE_DEFAULT'				=> 'جعله الاستايل الافتراضي',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'يجب أن تقوم بتفعيل الاستايل قبل جعله الاستايل الافتراضي.',
	'STYLE_ERR_INVALID_PARENT'	=> 'استايل رئيسي خاطئ.',
	'STYLE_ERR_NAME_EXIST'		=> 'هناك استايل موجود بهذا الاسم',
	'STYLE_ERR_STYLE_NAME'		=> 'ينبغي عليك عرض اسم هذا الاستايل',
	'STYLE_INSTALLED'			=> 'تم تثبيت استايل "%s".',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'العودة إلى قائمة الاستايلات المثبتة',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'تثبيت المزيد من الاستايلات',
	'STYLE_NAME'				=> 'اسم الاستايل',
	'STYLE_NAME_RESERVED'		=> 'الاستايل "%s" لا يمكن تثبيته، لأن الاسم محجوز.',
	'STYLE_NOT_INSTALLED'		=> 'لم يتم تثبيت استايل "%s".',
	'STYLE_PATH'				=> 'مسار الاستايل',
	'STYLE_UNINSTALL'			=> 'إلغاء التثبيت',
	'STYLE_PHPBB_VERSION'		=> 'إصدار phpBB',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'ستايل "%s" لا يمكن إلغاء تثبيته لأنه يحتوي على استايل فرعي أو أكثر.',
	'STYLE_UNINSTALLED'			=> 'تم إلغاء تثبيت استايل "%s" بنجاح.',
	'STYLE_USED_BY'				=> 'مستعمل من طرف ( بمن فيهم محركات البحث )',
	'STYLE_VERSION'				=> 'إصدار الاستايل',

	'UNINSTALL_DEFAULT'		=> 'لا يمكنك إلغاء تثبيت الاستايل الافتراضي.',

	'BROWSE_STYLES_DATABASE'	=> 'تصفح مكتبة الاستايلات',
));
