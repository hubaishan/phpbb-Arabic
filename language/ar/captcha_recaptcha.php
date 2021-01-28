<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
* 2017 Updated and maintained by Saeed Hubaishan <https://phpbb-ar.com>
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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'ar',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> 'الكود المئي الذي قُدِّم غير صحيح',
	'RECAPTCHA_NOSCRIPT'			=> 'الرجاء تفعيل جافا سكربت في متصفحك لتنفيد الاختبار.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'إذا كنت تريد استخدام reCaptcha, ينبغي عليك تسجيل حساب في <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'هذه الكابتشا غير مرئية في الواقع، للتحقق من أنها تعمل أيقونة صغيرة يجب أن تظهر في الزاوية اليمنى السفلية من هذه الصفحة.',

	'RECAPTCHA_PUBLIC'				=> 'مفتاح الموقع',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> ' مفتاح reCAPTCHA لموقعك، يمكنك الحصول على المفاتيح من <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. الرجاء استعمال  reCAPTCHA v2 &gt; نوع Invisible reCAPTCHA badge',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> ' مفتاح reCAPTCHA لموقعك، يمكنك الحصول على المفاتيح من <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. الرجاء استعمال reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'مفتاح reCAPTCHA السري',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'مفتاح reCAPTCHA السري . يمكنك الحصول على مفاتيح من <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.  الرجاء استعمال  reCAPTCHA v2 &gt; نوع Invisible reCAPTCHA badge',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> ' مفتاح reCAPTCHA لموقعك، يمكنك الحصول على المفاتيح من <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. الرجاء استعمال reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'دومين الطلب',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'الدومين الذي يتم إحضار  البرنامج النصي منه لتحقق من الطلب.<br>استعمل <samp>recaptcha.net</samp> عندما تكون <samp>google.com</samp> غير قابلة للوصول.',

	'RECAPTCHA_V3_METHOD'				=> 'طريقة الطلب',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'الطريقة المستعملة للتحقق من الطلب .<br>الخيارات المعطلة غير متاحة من التثبيت.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'الدرجة الدنيا الافتراضية',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'تستخدم عند تعذر تطبيق إي من الدرجات الأخرى.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'درجة تسجيل الدخول',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'درجة المشاركة',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'درجة التسجيل',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'درجة التبليغ',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'درجات  القبول الدنيا',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 ترجع درجة (<samp>1.0</samp> للتفاعل الممتاز, <samp>0.0</samp> لسلوك البوتات). هنا تضبط الدرجة الدنيا للقبول لكل عمل.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3  تتطلب معرفة الطريقة المتاحة التي تريدها لفحص الطلب.',
]);
