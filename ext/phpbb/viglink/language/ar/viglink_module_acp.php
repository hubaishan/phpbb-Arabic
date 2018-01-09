<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'إعدادات فيغلينك',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'فيغلنك هي خدمة من طرف ثالث تقوم بدقة بتحليل روابط نشرت من قبل المستخدمين من منتداك دون أي تغيير على تجربة المستخدم. عندما يقوم المستخدمون بالنقر على الروابط الصادرة للمنتجات أو الخدمات وشراء شيء ما ، فان التجار يدفعون العمولة ، والتي يتم التبرع بحصة لمشروع phpbb. باختيارك تمكين فيغلنك والتبرع بالعائدات إلى مشروع phpbb ، فإنك تدعم منظمتنا المفتوحة المصدر وتضمن استمرار أمننا المالي.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'بإمكانك تغيير هذه الإعدادات أي وقت في  لوحة”<a href="%1$s">إعدادات فيغلينك</a>“.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'لن يتم إعادة توجيهك إلى هذه الصفحة بمجرد إرسالك إعداداتك المفضلة بالضغط على زر إرسال.',
	'ACP_VIGLINK_ENABLE'			=> 'تفعيل فيغلينك',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'يفعل استخدام خدمات فيغلينك.',
	'ACP_VIGLINK_EARNINGS'			=> 'المطالبة بالأرباح لنفسك (اختياري)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'بإمكانك تحويل الأرباح لنفسك بفتحك لحساب تحويل في فيغلينك.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'خدمات فيغلينك تم تعطيلها من phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'احصل على أرباحك',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'بإمكانك الحصول على أرباح منتداك من روابط فيغلينك بدلا من التبرع بها لصالح phpBB. لإدارة إعدادات حسابك سجل لحساب فيغلينك بالنقر على ”تحويل حساب “.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'تحويل حساب',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'تعذر استرداد رابط تحويل الحساب الخاص بفيغلنك.',
));
