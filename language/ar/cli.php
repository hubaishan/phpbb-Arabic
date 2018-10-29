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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'قم يضبط هذا الخيار إن كانت خيارات الإعدادات تتغير بصورة مستمرة فلا يمكن تخزينها بكفاءة.',
	'CLI_CONFIG_CURRENT'				=> 'قيمة الإعدادات الحالية، استخدم 0 و 1 لتحديد قيمة منطقية',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'تم حذف الإعداد %s بنجاح.',
	'CLI_CONFIG_NEW'					=> 'قيمة الإعدادات الجديدة، استخدم 0 و 1 لتحديد قيمة منطقية',
	'CLI_CONFIG_NOT_EXISTS'				=> 'الإعداد %s غير موجود',
	'CLI_CONFIG_OPTION_NAME'			=> 'اسم خيار الإعدادات',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'قم بضبط هذا الخيار إن كانت القيمة يجب كتابتها بدون سطر جديد في نهايتها.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'الكمية تزداد بقيمة',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'تمت زيادة الإعداد %s بنجاح',
	'CLI_CONFIG_SET_FAILURE'			=> 'لم نستطع ضبط الإعداد %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'تم ضبط الإعداد %s بنجاح',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'يقوم بتكوين قائمة بعمليات cron الجاهزة والغير جاهزة.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'يقوم بتنفيذ جميع عمليات cron الجاهزة.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'اسم العملية التي سيتم تنفيذها',
	'CLI_DESCRIPTION_DB_LIST'					=> 'عرض كافة الترحلات المثبتة والمتاحة.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'يقوم بتحديث قاعدة البيانات عن طريق تطبيق الدمج.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'إلغاء ترحيلة.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'يقوم بحذف خيار إعدادات',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'يقوم بتعطيل الإضافة المحددة.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'يقوم بتفعيل الإضافة المحددة.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'يقوم بإيجاد الدموج الغير معتمد عليها.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'صيانة شجرة المنتديات والوحدات.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'يقوم بجلب قيمة خيار إعدادات',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'يقوم بزيادة قيمة خيار إعدادات',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'يقوم بعرض قائمة بجميع الإضافات في قاعدة البيانات وملفات المنتدى.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'اسم البيئة.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'التشغيل في الوضع الآمن (بدون إضافات).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'تشغيل الشيل.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'تطهير الإضافة المحددة.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'يسرد أنواع النص التي يمكن أعاده معالجتها',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'معيدي المعالجة المتوفرين:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'يعيد معالجة النص المخزن باستخدام خدمات text_formatter الحالية.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'نوع النص لإعادة معالجته، اتركه فارغًا لإعادة معالجة كل شيء.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'لا تحفظ أي شيء فقط اطبع ما يمكن أن يحدث',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'أدنى معرف سجل للمعالجة',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'أعلى معرف سجل للمعالجة',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'العدد التقريبي للسجلات التي سيتم معالجتها في كل مرة',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'أبدأ إعادة المعالجة عند توقف التنفيذ الأخير',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'يقوم بإعادة حساب عمود user_email_hash من جدول المستخدمين.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'يقوم بضبط قيمة خيار إعدادات إذا كانت القيمة القديمة تطابق الحالية فقط',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'يقوم بضبط قيمة خيار إعدادات',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'حذف كل المُصغرات الموجودة.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'إنشاء كافة المُصغرات المفقودة.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'إعادة إنشاء جميع المصغرات.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'التحقق إذا كان المنتدى محدثًا.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'اسم الإضافة للتحقق منها (إذا أدخلت all سيتم فحص جميع الإضافات)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'تشغيل الفحص مع التخزين المؤقت (الكاش).',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'تشغيل اختيار الأمر للتحقق فقط هل الإصدرات مستقرة أم لا.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'تحديث تعمية كلمات المرور القديمة ليتم تعميتها بواسطة bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" ينبغي أن يضبط إلى "مستقر" أو "غير مستقر".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'تفعيل (إو تعطيل) حساب مستخدم.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'اسم المستخدم للحساب المرجو تفعيله.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'تعطيل حساب المستخدم',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'المستخدم مفعل مسبقًا.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'المستخدم غير مفعل مسبقًا.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'إضافة مستخدم جديد.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'اسم المستخدم للمستخدم الجديد',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'كلمة المرور للمستخدم الجديد',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'البريد الإلكتروني للمستخدم الجديد',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'إرسال بريد تفعيل إلى المستخدم الجديد(لا يرسل افتراضيًا(',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'حذف حساب مستخدم.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'اسم المستخدم المراد حذفه',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'حذف جميع مشاركات المستخدم، بدون هذا الخيار سيتم إبقاء مشاركات المستخدم.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'إعادة تنظيف أسماء المستخدمين.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'لم نستطع تعطيل الإضافة %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'تم تعطيل الإضافة %s بنجاح',
	'CLI_EXTENSION_DISABLED'			=> 'الإضافة %s غير مفعلة',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'لم نستطع تفعيل الإضافة %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'تم تفعيل الإضافة %s بنجاح',
	'CLI_EXTENSION_ENABLED'				=> 'الإضافة %s مفعلة فعلية',
	'CLI_EXTENSION_NOT_EXIST'			=> 'الإضافة %s غير موجودة',
	'CLI_EXTENSION_NAME'				=> 'اسم الإضافة',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'لم نستطع إزالة الإضافة %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'تم إزالة الإضافة %s بنجاح',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'لم نستطع تحديث الإضافة %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'تحدثت الإضافة %s بنجاح',
	'CLI_EXTENSION_NOT_FOUND'			=> 'لم يتم العثور على أي إضافات.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'الإضافة %s غير قابلة للتفعيل.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'متاح',
	'CLI_EXTENSIONS_DISABLED'			=> 'معطل',
	'CLI_EXTENSIONS_ENABLED'			=> 'مفعل',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'تم إصلاح شجرة المنتديات والموديولات بنجاح.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'تمت إعادة حساب جميع الإيميلات بنجاح.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'تم تحديث تعميات كلمات المرور القديمة بواسطة bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'اسم الترحيلة المتضمن لأسماء المصادر (استخدام الشرطة المائلة لليمين / بدلا من الشرطة المائلة لليسار  \ لتجنب المشاكل).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'الترحيلات المتاحة',
	'CLI_MIGRATIONS_INSTALLED'				=> 'الترحيلات المثبتة',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'أظهر فقط الترحيلات المتاحة',
	'CLI_MIGRATIONS_EMPTY'                  => 'لا ترحيلات.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'إعادة معالجة %1$s (النطاق %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'إعادة معالجة %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'تمت إعادة المعالجة بنجاح',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) حُذف.',
	'CLI_THUMBNAIL_DELETING'	=> 'حذف مصغرات',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) اسُتبعِد.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) أعيد إنشاؤه.',
	'CLI_THUMBNAIL_GENERATING'	=> 'إنشاء المصغرات',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'أعيد إنشاء كافة المصغرات.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'حذفت جميع المصغرات.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'لا يوجد مصغرات لإعادة الإنشاء.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'لا يوجد مصغرات للحذف.',

	'CLI_USER_ADD_SUCCESS'		=> 'أضيف العضو %s بنجاح.',
	'CLI_USER_DELETE_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'إعادة تنظيف أسماء الأعضاء',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'تم إعادة التنظيف. لا أسماء أعضاء تحتاج إلى تنظيف.',
		1	=> 'تم إعادة التنظيف. اسم عضو واحد تم تنظيفه.',
		2	=> 'تم إعادة التنظيف. اسما عضوين تم تنظيفهما.',
		3	=> 'تم إعادة التنظيف. أسماء %d أعضاء تم تنظيفها.',
		4	=> 'تم إعادة التنظيف. أسماء %d عضوًا تم تنظيفها.',
		5	=> 'تم إعادة التنظيف. أسماء %d عضوٍ تم تنظيفها.',
		6	=> 'تم إعادة التنظيف. لا أسماء أعضاء تحتاج إلى تنظيف.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' بإمكانك تعيين اسم مهمة cron لتشغيلها وحدها فقط.',
	'CLI_HELP_USER_ACTIVATE'	=> 'تفعيل حساب مستخدم، أو تعطيله باستخدام خيار <info>--deactivate</info>.
لإرسال بريد تفعيل للمستخدم استعمل اختياريا الخيار <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'الأمر <info>%command.name%</info> يضيف عضوًا جديدًا:
هذا الأمر يعمل بدون خيارات، سيتم إشعارك لإدخالها.
لإرسال بريد إلى المستخدم اختياريًا استعمل خيار <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'إعادة تنظيف أسماء الأعضاء سيفحص جميع أسماء الأعضاء للتأكد بأن مخزنة بصورة نظيفة. الأسماء النظيفة لا تتأثر بحالة الحرف, مطبعة بأسلوب NFC ومحولة إلى نظام ASCII.',
));
