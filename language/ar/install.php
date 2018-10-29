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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'لوحة التنصيب',
	'SELECT_LANG'	=> 'اختيار اللغة',

	'STAGE_INSTALL'	=> 'تثبيت phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'المقدمة',
	'INTRODUCTION_BODY'		=> 'مرحبا بك إلى phpBB3!<br /><br />phpBB هي نظام المنتديات المفتوح المصدر الأوسع انتشارًا في العالم. phpBB3 هو آخر إصدار من سلسلة بدأت عام 2000. وكسابقيه, phpBB3 غني بالمميزات وسهل الاستخدام ومدعوم كاملًا من فريق phpBB. phpBB3 عزز ما أعطى لـphpBB2 شعبيته، وأضاف العديد من المميزات المطلوبة الغير متوفرة في الإصدار السابق. نأمل أن يتجاوز توقعاتك.<br /><br />نظام التثبيت هذا سيرشدك لتثبيت  phpBB3 أو ترقيته إلى آخر إصدار من إصدار سابق، . للمزيد من المعلومات ندعوك للاطلاع على  <a href="../docs/INSTALL.html">دليل التثبيت باللغة الإنجليزية</a>.<br /><br />لقراءة ترخيص phpBB3 أو كيفية الحصول على الدعم اختر الخيار المناسب من القائمة الجانبية. للمتابعة ، الرجاء تحديد علامة التبويب المناسبة أعلاه.',

	// Support page
	'SUPPORT_TITLE'		=> 'الدعم',
	'SUPPORT_BODY'		=> 'الدعم الكامل سيتم تقديمه للنسخة المستقرة الحالية من phpBB3، مجاناً. هذا يتضمن:</p><ul><li>التركيب</li><li>الإعداد</li><li>الأسئلة التقنية</li><li>المشاكل المتعلقة بالثغرات المحتملة في البرنامج</li><li>الترقية من النسخ المرشحة إلى آخر نسخة مستقرة</li><li>التحويل من phpBB2.0.x إلى phpBB3</li><li>التحويل من أنواع منتديات أخرى إلى phpBB3 (يرجى الاطلاع على <a href="https://www.phpbb.com/community/viewforum.php?f=486">منتدى التحويل</a>)</li></ul><p>نحن نشجع المستخدمين الذين مازالوا يعملون على نسخة تجريبية من phpBB3 أن يقوموا باستبدال نسخهم بتثبيت أحدث نسخة.</p><h2>الإضافات - الستايلات</h2><p>للمسائل المتعلقة بالإضافات، يرجى الكتابة في <a href="https://www.phpbb.com/community/viewforum.php?f=451">منتدى الإضافات</a> المناسب.<br />للمسائل المتعلقة بالستايلات، يرجى الكتابة في <a href="https://www.phpbb.com/community/viewforum.php?f=471">منتدى الستايلات</a> المناسب.<br /><br />إذا كان سؤالك يختص بحزمة معينة، يرجى الكتابة مباشرةً في الموضوع الخاص بتلك الحزمة.</p><h2>الحصول على الدعم</h2><p><a href="https://www.phpbb.com/support/">قسم الدعم</a><br /><a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/">دليل البدء السريع</a><br /><br />لتكون متأكدًا أنك مطلع دائمًا على آخر النسخ والأخبار تابعنا على <a href="https://www.twitter.com/phpbb/">تويتر</a> و <a href="https://www.facebook.com/phpbb/">فيسبوك</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'الرخصة العامة',

	// Install page
	'INSTALL_INTRO'			=> 'مرحبًا بك في عملية تنصيب phpBB3!',
	'INSTALL_INTRO_BODY'	=> 'عن طريق هذا الخيار، تستطيع تنصيب phpBB3.</p><p>إذا أردت المتابعة، ستحتاج إلى معرفة إعدادات قاعدة البيانات. إذا لم تكن تعرف معلومات قاعدة البيانات، يرجى الاتصال بالمستضيف ليعطيها لك. لن تستطيع إكمال التركيب بدونها. ستحتاج إلى:</p>

	<ul>
		<li>نوع قاعدة البيانات - قاعدة البيانات التي سوف تستعملها.</li>
		<li>اسم خادم قاعدة البيانات أو DSN - عنوان خادم قاعدة البيانات.</li>
		<li>منفذ خادم قاعدة البيانات  - منفذ قاعدة البيانات (في أغلب الحالات لن تحتاج هذه المعلومة).</li>
		<li>اسم قاعدة البيانات - اسم قاعدة البيانات على الخادم.</li>
		<li>اسم مستخدم وكلمة المرور إلى قاعدة البيانات - معلومات الدخول للاتصال بقاعدة البيانات.</li>
	</ul>

	<p><strong>ملاحظة:</strong> إذا كنت تستعمل SQLite، يجدر بك إدخال المسار بالكامل لملف قاعدة البيانات في حقل DSN وترك حقول اسم المستخدم وكلمة المرور فارغين.</p>

	<p>قواعد البيانات التي يدعمها phpBB3:</p>
	<ul>
		<li>MySQL 3.23 أو أعلى (MySQLi مدعوم)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 أو أعلى (مباشرة أو من خلال ODBC)</li>
		<li>MS SQL Server 2005 أو أعلى (مباشر)</li>
		<li>Oracle</li>
	</ul>

	<p>سيتم عرض قواعد البيانات المتوفرة على خادمك فقط.',

	'ACP_LINK'	=> 'انتقل إلى <a href="%1$s">لوحة التحكم الرئيسية</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB مثبت فعليًا.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB لم يثبت بعد.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'الملفات غير موجودة',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'ينبغي توفر الملف %1$s لإمكانية تثبيت phpBB.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'من المستحسن أن يكون الملف %1$s موجودًا من أجل تجربة مستخدم أفضل.',
	'FILE_NOT_WRITABLE'						=> 'الملف غير قابل للكتابة',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'لتتمكن من تثبيت phpBB ينبغي أن يكون الملف  %1$s قابلا للكتابة.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'من المستحسن أن يكون الملف  %1$s قابلا للكتابة من أجل تجربة مستخدم أفضل.',

	'DIRECTORY_NOT_EXISTS'						=> 'المسار غير متوفر',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'ينبغي أن يكون المسار  %1$s موجودًا حتى تستطيع تثبيت phpBB.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'من المستحسن أن يكون المسار  %1$s موجودًا من أجل تحسين تجربة المستخدم.',
	'DIRECTORY_NOT_WRITABLE'					=> 'المسار غير قابل للكتابة',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'لكي تكون قادرًا على تثبيت phpBB المسار  %1$s ينبغي أن يكون قابلًا للكتابة.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'من المستحسن أن يكون المسار  %1$s قابلا للكتابة من أجل تجربة مستخدم أفضل.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'إصدار PHP >= 5.4.0',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB يتطلب PHP إصدار 5.4.0 أو أعلى.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'دالة PHP getimagesize() متوفرة',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>مطلوب</strong> - ليعمل phpBB بشكل صحيح، دالة getimagesize ينبغي أن تكون متوفرة',
	'PCRE_UTF_SUPPORT'					=> 'دعم PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB <strong>لن يعمل</strong> إذا كان تركيب PHP لديك غير متوافق مع UTF-8 في امتداد PCRE',
	'PHP_JSON_SUPPORT'					=> 'دعم PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '<strong>مطلوب</strong> - ليعمل phpBB بشكل صحيح، فإنه يجب وجود دعم امتداد PHP JSON.',
	'PHP_XML_SUPPORT'					=> 'دعم PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'لكي يعمل phpBB بشكل جيد ينبغي أن تكون الإضافة PHP XML/DOM متاحة.',
	'PHP_SUPPORTED_DB'					=> 'قواعد البيانات المدعومة',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>مطلوب</strong> - ينبغي على الأقل أن يكون أحد قواعد البيانات متوافقة مع PHP. إذا كانت موديلات قواعد البيانات غير متوفرة فينبغي عليك الاتصال بمستضيفك',

	'RETEST_REQUIREMENTS'	=> 'إعادة فحص المتطلبات',

	'STAGE_REQUIREMENTS'	=> 'متطلبات التنصيب',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'ينبغي عليك ملء الحقول كلها في هذه الصفحة',

	'TIMEOUT_DETECTED_TITLE'	=> 'كشف المثبت عن فوات المهلة(timeout) ',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'كشف المثبت عن فوات المهلة (timeout)، بإمكانك محاولة تحديث الصفحة، والتي ربما تؤدي إلى تلف البيانات. نقترح عليك إما زيادة إعدادات المهلة (timeout) أو محاولة استخدام CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'ضبط بيانات التثبيت',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'معلومات المدير العام',

	// Form labels
	'ADMIN_CONFIG'				=> 'إعداد المدير العام',
	'ADMIN_PASSWORD'			=> 'كلمة المرور للمدير العام',
	'ADMIN_PASSWORD_CONFIRM'	=> 'تأكيد تطابق كلمة المرور',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'ينبغي أن تتكون كلمة المرور من 6 إلى 30 خانة',
	'ADMIN_USERNAME'			=> 'اسم المستخدم للمدير العام',
	'ADMIN_USERNAME_EXPLAIN'	=> ' الرجاء كتابة اسم يتكون من 6 إلى 30 حرف',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'البريد الإلكتروني الذي أدخلته غير صحيح',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'كلمات المرور التي أدخلتها غير متطابقة',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'كلمة المرور التي أدخلتها كبيرة جدًا. أقصى طول ينبغي ألا يتعدى 30 حرف',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'كلمة المرور التي أدخلتها صغيرة جدًا. أقل طول ينبغي أن يكون أكبر من 6 أحرف',
	'INST_ERR_USER_TOO_LONG'		=> 'اسم المستخدم الذي استعملته طويل جدًا. أقصى طول هو 20 حرف',
	'INST_ERR_USER_TOO_SHORT'		=> 'اسم المستخدم الذي أدخلته قصير جدًا. أقل طول مسموح هو 3 أحرف',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'تكوين المنتدى',
	'DEFAULT_LANGUAGE'	=> 'اللغة الافتراضية',
	'BOARD_NAME'		=> 'عنوان المنتدى',
	'BOARD_DESCRIPTION'	=> 'وصف قصير للمنتدى',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'إعدادات الاتصال بقاعدة البيانات',

	// Form labels
	'DB_CONFIG'				=> 'إعدادات قاعدة البيانات',
	'DBMS'					=> 'نوع قاعدة البيانات',
	'DB_HOST'				=> 'اسم خادم قاعدة البيانات (hostname) أو DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN قياسي لمورد البيانات ومتوافق فقط مع تثبيت ODBC.مع PostgreSQL: استعمل localhost للاتصال بسيرفر محلي عبر مأخذ مجال UNIX، أو  127.0.0.1 للاتصال بواسطة TCP. مع SQLite: أدخل المسار الكامل لملف قاعدة البيانات.',
	'DB_PORT'				=> 'منفذ خادم قاعدة البيانات',
	'DB_PORT_EXPLAIN'		=> 'اتركه فارغًا إلا إذا كان الخادم يستعمل منفذ غير القياسي',
	'DB_PASSWORD'			=> 'كلمة مرور قاعدة البيانات',
	'DB_NAME'				=> 'اسم قاعدة البيانات',
	'DB_USERNAME'			=> 'اسم مستخدم قاعدة البيانات',
	'DATABASE_VERSION'		=> 'إصدار قاعدة البيانات',
	'TABLE_PREFIX'			=> 'سوابق جداول قاعدة البيانات',
	'TABLE_PREFIX_EXPLAIN'	=> 'البادئة يجب أن تبدأ بحرف وتحتوي فقط على حروف، أرقام و underscores.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'خطأ في تثبيت قاعدة البيانات',
	'INST_ERR_NO_DB'				=> 'لا يمكن تحميل موديول PHP لنوع قاعدة البيانات المحددة',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'البادئة التي أدخلتها غير صحيحة. يجب أن تبدأ بحرف وتحتوي فقط على حروف، أرقام وunderscores.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'سوابق الجدول التي حددتها طويلة جدًا. أقصى طول هو %d حرف',
	'INST_ERR_DB_NO_NAME'			=> 'لم تحدد قاعدة البيانات',
	'INST_ERR_DB_FORUM_PATH'		=> 'ملف قاعدة البيانات المحدد هو دليل داخل مجلد منتداك، عليك وضع هذا الملف في مكان لا يمكن الوصول إليه عبر المتصفح',
	'INST_ERR_DB_CONNECT'			=> 'لا يمكن الاتصال بقاعدة البيانات، شاهد رسالة الخطأ في الأسفل',
	'INST_ERR_DB_NO_WRITABLE'		=> 'ينبغي أن تكون قاعدة البيانات والمسار المحتوي لها كلاها قابلين للكتابة.',
	'INST_ERR_DB_NO_ERROR'			=> 'لا توجد أية رسالة خطأ',
	'INST_ERR_PREFIX'				=> 'الجداول ذات السوابق التي حددتها موجودة مسبقًا، يرجى اختيار غيرها',
	'INST_ERR_DB_NO_MYSQLI'			=> 'إصدار MySQL المركب على هذا الجهاز غير متوافق مع خيار ”MySQL with MySQLi Extension“ الذي حددته. يرجى محاولة خيار ”MySQL“ بدلًا منه',
	'INST_ERR_DB_NO_SQLITE3'		=> 'إصدار SQLite extension المثبت لديك قديم جدًا، يجب ترقيته إلى الإصدار 3.6.15 على الأقل.',
	'INST_ERR_DB_NO_ORACLE'			=> 'إصدار Oracle المركب على هذا الجهاز يستلزم وضع خيار <var>NLS_CHARACTERSET</var> على <var>UTF8</var>.ينبغي عليك تحديث التركيب إلى 9.2+ أو تغيير الخيار',
	'INST_ERR_DB_NO_POSTGRES'		=> 'قاعدة البيانات التي حددتها لم تُنشَأ على نظام <var>UNICODE</var> أو <var>UTF8</var>. حاول تركيب قاعدة البيانات على نظام <var>UNICODE</var> أو <var>UTF8</var>',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'ملف المخطط غير قابل للكتابة',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'تكوين البريد الإلكتروني',

	// Package info
	'PACKAGE_VERSION'				=> 'تم تثبيت حزمة الإصدار',
	'UPDATE_INCOMPLETE'				=> 'لم يتم تحديث تثبيت phpBB بصورة صحيحة..',
	'UPDATE_INCOMPLETE_MORE'		=> 'الرجاء قراءة المعلومات التالية لإصلاح الخطأ.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>تحديث غير مكتمل</h1>

		<p>لاحظنا أن التحديث الأخير لتثبيت phpBB لم يكتمل. الرجاء فتح وتشغيل<a href="%1$s" title="%1$s">سكربت تحديث قاعدة البيانات</a> . تأكد من اختيارك <em>تحديث قاعدة البيانات فقط</em> واضغط على زر <strong>إرسال</strong>.  لا تنس حذف مجلد install بعد تحديث قاعدة البيانات بنجاح.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'يتوفر إصدار مميزات جديد <strong>%1$s</strong>، الرجاء قراءة <a href="%2$s" title="%2$s"><strong>إعلان الإصدار</strong></a> لمعرفة ماذا يقدم، وكيفية الترقية.',
	'SERVER_CONFIG'				=> 'إعدادات الخادم',
	'SCRIPT_PATH'				=> 'مسار السكربت',
	'SCRIPT_PATH_EXPLAIN'		=> 'مسار مجلد phpBB مرتبط بعنوان الموقع، مثال <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'شكرًا، إدارة المنتدى',
	'CONFIG_SITE_DESC'				=> 'وصف مختصر للمنتدى',
	'CONFIG_SITENAME'				=> 'اسم الموقع',

	'DEFAULT_INSTALL_POST'			=> 'هذا مثال على مشاركة في منتديات phpBB.كل شيء يبدو أنه يعمل بشكل ممتاز. تستطيع الآن حذف هذه المشاركة إن أردت أو تعديلها وأكمل ضبط إعدادات منتداك. خلال عملية التنصيب أنشِأ القسم الأول والمنتدى الأول وأعِدّت صلاحيات مناسبة من أجل المجموعات إذا قررت أن تحذف هذا القسم لا تنسَ أن تعيذن الصلاحيات إلى كل المجموعات التي ستنشؤها.من الأفضل أن تعيد تسمية القسم الأول والمنتدى الأول وتنسخ الصلاحيات منهم حين تنشئ أقساما أو منتديات جديدة.',

	'FORUMS_FIRST_CATEGORY'			=> 'القسم الأول',
	'FORUMS_TEST_FORUM_DESC'		=> 'هذا مجرد منتدى تجريبي',
	'FORUMS_TEST_FORUM_TITLE'		=> 'منتدى تجريبي 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'مدير الموقع',
	'REPORT_WAREZ'					=> 'المشاركة تحتوي على روابط لبرامج قرصنة',
	'REPORT_SPAM'					=> 'المشاركة المبلغة قد تحتوي على إعلان لموقع أخر أو برنامج أخر',
	'REPORT_OFF_TOPIC'				=> 'المشاركة المبلغة هي خارج الموضوع',
	'REPORT_OTHER'					=> 'المشاركة المبلغة لا تتعلق بأي قسم من الأقسام، نرجو استخدام حقل المعلومات المقدم',

	'SMILIES_ARROW'					=> 'سهم',
	'SMILIES_CONFUSED'				=> 'محتار',
	'SMILIES_COOL'					=> 'رايق',
	'SMILIES_CRYING'				=> 'يبكي أو حزين جدًا',
	'SMILIES_EMARRASSED'			=> 'خجول',
	'SMILIES_EVIL'					=> 'شرير أو غاضب جدًا',
	'SMILIES_EXCLAMATION'			=> 'تعجب',
	'SMILIES_GEEK'					=> 'مهوس',
	'SMILIES_IDEA'					=> 'فكرة',
	'SMILIES_LAUGHING'				=> 'ضحكة',
	'SMILIES_MAD'					=> 'غاضب',
	'SMILIES_MR_GREEN'				=> 'الوجه الأخضر',
	'SMILIES_NEUTRAL'				=> 'طبيعي',
	'SMILIES_QUESTION'				=> 'سؤال',
	'SMILIES_RAZZ'					=> 'استهزاء',
	'SMILIES_ROLLING_EYES'			=> 'يفكر',
	'SMILIES_SAD'					=> 'حزين',
	'SMILIES_SHOCKED'				=> 'مصدوم',
	'SMILIES_SMILE'					=> 'مبتسم',
	'SMILIES_SURPRISED'				=> 'متفاجئ',
	'SMILIES_TWISTED_EVIL'			=> 'ماكر',
	'SMILIES_UBER_GEEK'				=> 'مهوس جدًا',
	'SMILIES_VERY_HAPPY'			=> 'سعيد جدًا',
	'SMILIES_WINK'					=> 'غمزة',

	'TOPICS_TOPIC_TITLE'			=> 'أهلا بك في phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'نظرة عامة',
	'MENU_INTRO'		=> 'المقدمة',
	'MENU_LICENSE'		=> 'الترخيص',
	'MENU_SUPPORT'		=> 'الدعم',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'إنشاء ملف التكوين',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'إضافة إعدادات التكوين',
	'TASK_ADD_DEFAULT_DATA'				=> 'إضافة الإعدادات الافتراضية إلى قاعدة البيانات',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'إنشاء ملف مخطط قاعدة البيانات',
	'TASK_SETUP_DATABASE'				=> 'إعداد قاعدة البيانات',
	'TASK_CREATE_TABLES'				=> 'إنشاء الجداول',

	// Install data
	'TASK_ADD_BOTS'				=> 'تسجيل البوتات',
	'TASK_ADD_LANGUAGES'		=> 'تثبيت اللغات المتوفرة',
	'TASK_ADD_MODULES'			=> 'تثبيت الموديولات',
	'TASK_CREATE_SEARCH_INDEX'	=> 'إنشاء فهرس البحث',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'تثبيت الإضافات المحزمة',
	'TASK_NOTIFY_USER'			=> 'إرسال إشعار بريدي',
	'TASK_POPULATE_MIGRATIONS'	=> 'تطبيق التهجيرات',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'المثبت أنهى التثبيت بنجاح',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'الموديول غير موجود',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'لم يوجد الموديول بسبب أن الخدمة(%s) غير معرفة.',

	'TASK_NOT_FOUND'				=> 'المهمة غير موجودة',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'لم توجد المهمة بسبب أن الخدمة(%s) غير معرفة.',

	'SKIP_MODULE'	=> 'تخطي الموديول ”%s“',
	'SKIP_TASK'		=> 'تخطي المهمة ”%s“',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'كل خدمات مهام المثبت يجب أن تبدأ بـ ”installer“',
	'TASK_CLASS_NOT_FOUND'				=> 'تعريف خدمة مهمة المثبت غير صحيح، اسم الخدمة المعطى هو ”%1$s“، اسم الفئة المتوقع لها هو ”%2$s“. للمزيد من المعلومات الرجاء الاطلاع على مستندات الـ task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'ملف تكوين المثبت غير قابل للكتابة.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'تثبيت phpBB',
	'CLI_UPDATE_BOARD'				=> 'ترقية phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'إظهار التكوين الذي سيستخدم',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'التحقق من صحة ملف التكوين',
	'CLI_CONFIG_FILE'				=> 'ملف Config الذي سيستخدم',
	'MISSING_FILE'					=> 'غير قادر على الوصول إلى ملف %1$s',
	'MISSING_DATA'					=> 'يفتقد ملف التكوين بعض البيانات أو أنه يحتوي على إعدادات غير صالحة.',
	'INVALID_YAML_FILE'				=> 'غير قادر على تحليل ملف YAML %1$s',
	'CONFIGURATION_VALID'			=> 'ملف التكوين صالح',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'تحديث تركيب phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'عن طريق هذا الخيار، سيكون من الممكن تحديث تركيب منتداك phpBB إلى آخر نسخة.<br />أثناء التقدم ستُفحص ملفاتك كلها. ستتمكن من فحص الاختلافات والملفات كلها قبل البدء بتحديثها.<br /><br />ملف التحديث نفسه يستطيع أن ينتهي على طريقتين مختلفتين.</p><h2>التحديث اليدوي</h2><p>مع هذا التحديث ليس عليك سوى تحميل مجموعة الملفات الخاصة بالتعديل للتأكد من أنك لن تفقد ملفاتك المعدلة عند القيام بذلك. بعد تحميل هذه الصفحة تحتاج إلى تحميل الملفات يدويا إلى المسار الصحيح في phpBB ستكون مرحلة الفحص مرة أخرى لنرى إذا كان وُضعَت الملفات في الموقع الصحيح</p><h2>تحديث بواسطة FTP</h2><p>هذه الطريقة مشابهة للأولى ولكن من دون الحاجة إلى تحميل الملفات وتحميل الملفات المتغيرة، وسيتم ذلك لك! من أجل استخدام هذه الطريقة تحتاج لمعرفة التفاصيل الخاصة بك منذ دخول FTP سوف يطلب تسجيل الدخول منك بالنسبة لها. وبمجرد الانتهاء سوف تنتقل إلى التحقق من الملف مرة أخرى للتأكد من استكمال كل ما حصل بشكل صحيح!<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>إعلان الإصدار</h1>

		<p>يرجى قراءة إعلان الإصدار للنسخة الأخيرة قبل اكمال عملية التحديث، فقد يحتوي على معلومات مفيدة. يحتوي الإعلان أيضًا على روابط للتحميل الكامل كما يحتوي أيضًا على قائمة التغييرات.</p>

		<br />

		<h1>كيفية تحديث تثبيتك بالحزمة الكاملة</h1>

		<p>الطريقة المستحسنة لتحديث تثبيتك هي استخدام الحزمة الكاملة، إذا عُدلت ملفات phpBB الأساسية في تثبيتك فريما ترغب في استخدام حزمة التحديث الآلي للحفاظ على تعديلاتك، بإمكانك أيضًا التحديث باستخدام الطرق المنصوص عليها في ملف INSTALL.html، خطوات التثبيت باستخدام الحزمة الكاملة هي:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">انسخ احتياطيًا كل ملفات المنتدى وقاعدة البيانات.</strong></li>
			<li>اذهب إلى <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/"> صفحة تحميلات phpBB.com </a> وحمل أرشيف الحزمة الكاملة "Full Package".</li>
			<li>فك ضغط الأرشيف.</li>
			<li>احذف ملف <code class="inline">config.php</code>، ومجلدات <code class="inline">/images</code> و <code class="inline">/store</code> و <code class="inline">/files</code><em>من الحزمة</em> (وليس من موقعك).</li>
			<li>اذهب إلى لوحة تحكم الإدارة -> إعدادات المنتدى، وتأكد بأن الاستايل الافتراضي مضبوط على (prosilver)وإلا فاضبطه على prosilver.</li>
			<li>احذف مجلدي <code class="inline">/vendor</code> و <code class="inline">/cache</code> من مجلد المنتدى الرئيسي في الاستضافة.</li>
			<li>عبر FTP أو SSH ارفع بقية الملفات والمجلدات (المقصود هو المكونات المتبقية لمجلدphpBB3) إلى المجلد الرئيسي لتثبيت phpBB على السيرفر مستبدلا الملفات الموجودة. (ملاحظة: انتبه إلى عدم حذف أية إضافة في مجلد <code class="inline">/ext</code>عند رفع مكونات phpBB3 الجديدة.)</li>
			<li><strong><a href="%1$s" title="%1$s">ابدأ الآن عملية التحديث بفتح متصفحك على مجلد install</a>.</strong></li>
			<li>اتيع الخطوات لتحديث قاعدة البيات واتركها تعمل إلى الإتمام.</li>
			<li> عبر FTP أو SSH احذف مجلد <code class="inline">/install</code> من مجلد التثبيت الرئيسي.<br><br></li>
		</ol>
		
		<p>لديك الآن منتدى محدث يحوي جميع الأعضاء والمشاركات. الخطوات المقبلة:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>تحديث حزم اللغات</li>
			<li>تحديث الاستايلات<br><br></li>
		</ul>

		<h1>كيفية تحديث المنتدى عن طريق حزمة التحديث الآلي</h1>

		<p>حزمة التحديث الآلي موصى بها فقط في حالة وجود تعديلات على ملفات phpBB الأساسية في تثبيتك. يمكنك أيضًا تحديث منتداك باتباع إحدى الطرق الموجودة في ملف INSTALL.html. الخطوات لتحديث منتداك آليًا هي:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>اذهب إلى <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">صفحة تحميل phpBB.com</a> وقم بتحميل ملف حزمة التحديث الآلي "Automatic Update Package".</li>
			<li>قم بفك الضغط عن الملف.</li>
			<li>قم برفع مجلدي "install" و "vendor" غير المضغوطين كاملين إلى المجلد الرئيسي لمنتدى phpBB لديك (المجلد الذي يحتوي على ملف config.php بداخله).<br><br></li>
		</ol>

		<p>بعد أن يتم الرفع، سيتم غلق منتداك آليًا عن الزوار بسبب وجود مجلد install الذي قمت برفعه.<br /><br />
		<strong><a href="%1$s" title="%1$s">الآن قم ببدء عملية التحديث عن طريق الذهاب بمتصفحك إلى مجلد install</a>.</strong><br />
		<br />
		سيتم بعد ذلك إرشادك خلال عملية التحديث. سيتم إعلامك عند اكتمال عملية التحديث.
		</p>
',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'نوع التحديث الذي سيتم تشغيله',

	'UPDATE_TYPE_ALL'		=> 'تحديث نظام الملفات وقاعدة البيانات',
	'UPDATE_TYPE_DB_ONLY'	=> 'تحديث قاعدة البيانات فقط',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'طرق تحديث الملفات',

	'UPDATE_FILE_METHOD'			=> 'طريقة تحديث الملفات',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'تحميل الملفات المعدلة في ملف مضغوط',
	'UPDATE_FILE_METHOD_FTP'		=> 'تحديث الملفات عبر FTP (تلقائي)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'تحديث الملفات عبر الوصول المباشر للملف (تلقائي)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'اختر صيغة تحميل الملف',

	// FTP settings
	'FTP_SETTINGS'			=> 'إعدادات FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'لم يتم العثور على مسار تحديث صالح ، الرجاء التأكد من تحميل الملفات ذات الصلة.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'الإصدار هو الأحدث حتى الآن. ليس هناك حاجة لتشغيل أداة التحديث، إذا أردت أن تقوم بفحص لملفاتك نرجو التأكد بأنك تستخدم أداة التحديث الصحيحة',
	'OLD_UPDATE_FILES'				=> 'ملفات التحديث قديمة. ملفات التحديث هذه هي للتحديث من pbpbb%1$s إلى phpBB %2$s ولكن الإصدار الأخير من phpBB هو %3$s',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'ملفات التحديث التي تم أوجِدَت غير متوافقة مع إصدار التركيب. إصدارك المركب هو %1$s وملفات التحديث هي للترقية من %2$s إلى %3$s',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'تحديث الملفات',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'التحقق من الملفات للتحديث',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'فشل مقارن الملفات في تحميل %s.',

	'UPDATE_FILE_DIFF'		=> 'مقارنة الملفات المعدلة',
	'ALL_FILES_DIFFED'		=> 'تم مقارنة جميع الملفات المعدلة.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'تحديث الملفات',

	'DOWNLOAD'							=> 'تحميل',
	'DOWNLOAD_CONFLICTS'				=> 'تحميل التضاربات لهذا الملف',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'البحث عن &lt;&lt;&lt; لاستعراض التضاربات',
	'DOWNLOAD_UPDATE_METHOD'			=> 'تحميل أرشيف الملفات المعدلة',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'بمجرد تحميلها ينبغي عليك فك حزمة الأرشيف. ستجد الملفات المعدلة التي تحتاج إلى أن ترفعها داخل مجلد المنتدى الرئيسي. الرجاء رفع الملفات إلى أماكنها المحددة. وبعد أن ترفع كل الملفات، الرجاء فحص الملفات مرة أخرى بواسطة الزر في الأسفل',

	'FILE_ALREADY_UP_TO_DATE'		=> 'الملف محدث سابقًا',
	'FILE_DIFF_NOT_ALLOWED'			=> 'الملف غير قابل للمقارنة',
	'FILE_USED'						=> 'معلومات الاستعمال من',			// Single file
	'FILES_CONFLICT'				=> 'الملفات المتعارضة',
	'FILES_CONFLICT_EXPLAIN'		=> 'الملفات الآتية معدلة ولا تمثل الملفات الأصلية من النسخة القديمة. phpBB قررت أن هذه الملفات تشكل تعارضا إذا ما تم محاولة إدماجها. الرجاء تحقق من الملفات وحاول إصلاحها أو أكمل التحديث باختيار طريقة الدمج المفضلة. إذا حللت التعارض يدويًا أفحص الملفات مرة أخرى قبل أن تعدلهم. أنت قادر أيضا على الاختيار بين طرق الدمج المفضلة لكل ملف. الأولى ستنتج في ملف حيث سطر التعارض من الملف القديم سيفقد، والآخر سينتج في خسارة التغييرات من الملف الجديد',
	'FILES_DELETED'					=> 'ملفات محذوفة',
	'FILES_DELETED_EXPLAIN'			=> 'الملفات التالية غير موجودة في الإصدار الجديد. هذه الملفات يجب حذفها من منتداك.',
	'FILES_MODIFIED'				=> 'الملفات المعدلة',
	'FILES_MODIFIED_EXPLAIN'		=> 'الملفات الآتية معدلة ولا تمثل الملفات الأصلية من النسخة القديمة، الملفات المحدثة ستدمَج بين تعديلاتك والملفات الجديدة',
	'FILES_NEW'						=> 'الملفات الجديدة',
	'FILES_NEW_EXPLAIN'				=> 'الملفات الآتية غير موجودة أثناء التنصيب',
	'FILES_NEW_CONFLICT'			=> 'ملفات متعارضة جديدة',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'الملفات الآتية جديدة داخل آخر نسخة ولكن حُدِّد أن هناك من قبل ملفات بنفس الاسم ونفس المكان. هذه الملفات ستستبدل بالملفات الجديدة',
	'FILES_NOT_MODIFIED'			=> 'الملفات الغير معدلة',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'الملفات الآتية ليست معدلة وتمثل ملفات phpBB الأصلية من النسخة التي تريد التحديث منها',
	'FILES_UP_TO_DATE'				=> 'تم تحديث الملفات سابقًا',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'الملفات الآتية محدثة من قبل ولا تحتاج أي تحديث',
	'FILES_VERSION'					=> 'إصدار الملفات',
	'TOGGLE_DISPLAY'				=> 'إظهار/إخفاء القائمة',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'تحديث الملفات',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'فشل محدث الملف  “%1$s“ ، سيحاول المثبت الرجوع إلى ملف  “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'فشل محدث الملف. لا يوجد أساليب رجوع أخرى متاحة',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'إكمال عملية التثبيت',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'فحص الملفات مجددًا',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'تحديث قاعدة البيانات',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'تحدّثت قاعدة البيانات بنجاح، الآن ستحتاج لمتابعة عملية التحديث',

	'TASK_UPDATE_EXTENSIONS'	=> 'تحديث الإضافات',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'المحول الذي حددته غير موجود',
	'DEV_NO_TEST_FILE'			=> 'لم تحدد أية قيمة للمتحول test_file في برنامج التحويل. ليس من المفترض مشاهدة هذه الرسالة، الرجاء تبليغ هذه الرسالة إلى مبرمج السكربت',
	'COULD_NOT_FIND_PATH'		=> 'لا يمكن إيجاد مسار المنتدى الذي حددته، يرجى فحص الإعدادات ثم أعد المحاولة مرة أخرى<br />» المسار الذي حددته هو %s',
	'CONFIG_PHPBB_EMPTY'		=> 'إعداد متغير phpBB3 لـ "%s" فارغ!',

	'MAKE_FOLDER_WRITABLE'		=> 'يرجى التأكد من أن المجلد موجود ويقبل الكتابة ثم حاول مجددًا:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'يرجى التأكد من أن المجلدات موجودة وتقبل الكتابة ثم حاول مجددًا:<br />»<strong>%s</strong>',

	'INSTALL_TEST'				=> 'إعادة التجربة',

	'NO_TABLES_FOUND'			=> 'لم يوجد أي جدول',
	'TABLES_MISSING'			=> 'لا يمكن إيجاد هذه الجداول<br />» <strong>%s</strong>',
	'CHECK_TABLE_PREFIX'		=> 'الرجاء التأكد من سوابق الجداول ثم إعادة المحاولة',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'متابعة التحويل',
	'CONTINUE_CONVERT_BODY'		=> 'لقد كُشِف عن محاولة مسبقة للتحويل. يمكنك الآن الاختيار بين البدء بتحويل جديد أو إكمال التحويل السابق',
	'CONVERT_NEW_CONVERSION'	=> 'تحويل جديد',
	'CONTINUE_OLD_CONVERSION'	=> 'متابعة التحويل السابق',

	// Start conversion
	'SUB_INTRO'					=> 'مقدمة',
	'CONVERT_INTRO'				=> 'مرحبًا بك في برنامج التحويل إلى phpBB3',
	'CONVERT_INTRO_BODY'		=> 'من هنا، تستطيع استيراد بيانات من نظام منتدى آخر (مُنصب). اللائحة في الأسفل تظهر برامج التحويل المتوفرة حاليًا. إذا لم يكن هناك أي برنامج تحويل في هذه القائمة يناسب المنتدى الذي تريد تحويله، الرجاء قم بزيارة موقعنا حيث ستجد المزيد من برامج التحويل جاهزة للتحميل',
	'AVAILABLE_CONVERTORS'		=> 'المنتديات المتوفرة للتحويل',
	'NO_CONVERTORS'				=> 'لا يوجد برامج تحويل متاحة للاستعمال',
	'CONVERT_OPTIONS'			=> 'خيارات',
	'SOFTWARE'					=> 'برنامج المنتدى',
	'VERSION'					=> 'النسخة',
	'CONVERT'					=> 'تحويل',

	// Settings
	'STAGE_SETTINGS'			=> 'الإعدادات',
	'TABLE_PREFIX_SAME'			=> 'سوابق الجداول ينبغي أن تكون نفسها المستخدمة في البرنامج الذي تحول منه.<br />» سوابق الجدول المحددة كانت %s',
	'DEFAULT_PREFIX_IS'			=> 'برنامج التحويل لم يستطع إيجاد الجداول التي تبدأ بالسوابق التي أدخلتها. تأكد من أنك أدخلت المعلومات الصحيحة لمنتداك الذي تريد التحويل منه. سوابق الجداول الافتراضية لـ %1$s هي <strong>%2$s</strong>',
	'SPECIFY_OPTIONS'			=> 'تحديد خيارات التحويل',
	'FORUM_PATH'				=> 'مسار المنتدى',
	'FORUM_PATH_EXPLAIN'		=> 'هذا هو المسار <strong>المرتبط</strong> لمنتداك القديم من طرف <strong>root تركيب phpBB</strong>',
	'REFRESH_PAGE'				=> 'حدث الصفحة لمتابعة التحويل',
	'REFRESH_PAGE_EXPLAIN'		=> 'إذا اخترت نعم، فبرنامج التحويل سيحدّث الصفحة لمتابعة التحويل بعد إنهاء كل خطوة. إذا كانت هذه عمليتك الأولى في التحويل لتجربة ومعرفة أي أخطاء مستقبلًا، نقترح عليك اختيار لا',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'جاري التحويـل',

	'AUTHOR_NOTES'				=> 'ملاحظات الكاتب<br />» %s',
	'STARTING_CONVERT'			=> 'جاري بدء التحويل',
	'CONFIG_CONVERT'			=> 'تحويل الإعدادات',
	'DONE'						=> 'انتهى',
	'PREPROCESS_STEP'			=> 'تنفيذ إجراءات أولية functions/queries',
	'FILLING_TABLE'				=> 'مليء الجدول <strong>%s</strong>',
	'FILLING_TABLES'			=> 'مليء الجداول',
	'DB_ERR_INSERT'				=> 'خطأ في التركيب أمر <code>INSERT</code>',
	'DB_ERR_LAST'				=> 'خطأ في التركيب <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'خطأ أثناء تشغيل <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'خطأ أثناء تشغيل <var>query_first</var>، %s ("%s")',
	'DB_ERR_SELECT'				=> 'خطأ أثناء تشغيل أمر <code>SELECT</code>',
	'STEP_PERCENT_COMPLETED'	=> 'الخطوة <strong>%d</strong> من <strong>%d</strong>',
	'FINAL_STEP'				=> 'استكمال الخطوة الأخيرة',
	'SYNC_FORUMS'				=> 'بدء مزامنة المنتديات',
	'SYNC_POST_COUNT'			=> 'بدء مزامنة عدد المشاركات',
	'SYNC_POST_COUNT_ID'		=> 'بدء مزامنة عدد المشاركات ابتداء من <var>القيمة</var> %1$s إلى %2$s',
	'SYNC_TOPICS'				=> 'بدء مزامنة المواضيع',
	'SYNC_TOPIC_ID'				=> 'مزامنة المواضيع من <var>topic_id</var> %1$s to %2$s',
	'PROCESS_LAST'					=> 'إنهاء آخر الخطوات',
	'UPDATE_TOPICS_POSTED'		=> 'توليد معلومات المواضيع المنشورة',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'وقع خطأ أثناء توليد معلومات المواضيع المنشورة. تستطيع إعادة هذه الخطوة في لوحة تحكم الإدارة بعد أن ينتهي التحويل',
	'CONTINUE_LAST'				=> 'متابعة اللمسات الأخيرة',
	'CLEAN_VERIFY'				=> 'فحص وتنظيف البنية النهائية',
	'NOT_UNDERSTAND'			=> 'لا يمكن فهم %s #%d، جدول %s ("%s")',
	'NAMING_CONFLICT'			=> 'تشابه في الأسماء: %sو%s لديهم نفس الاسم<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'انتهى التحويل',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'انتهيت الآن من تحويل منتداك إلى phpBB 3.2. تستطيع الآن تسجيل الدخول و<a href="../">تصفح منتداك</a>، رجاءً تأكد من تحويل الإعدادت بالصورة المطلوبة قبل تفعيل المنتدى عبر حذف مجلد inatall . تذكر أن المساعدة على استعمال phpBB موجودة على الشبكة في <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">المستندات</a> و <a href="https://www.phpbb.com/community/viewforum.php?f=466">منتدى الدعم الفني</a>',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'رفع المرفقات عبر FTP مفعل في المنتدى القديم. رجاءً عطّل خيار الرفع عبر FTP وتأكد من تحديد مجلد الرفع الصحيح، وبعدها ارفع الملفات المرفقة كلها إلى مجلد المرفقات الجديد. بمجرد الانتهاء من هذا، أعِد تشغيل المحول',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'لا توجد أية معلومات متاحة لإعداد هذا المحول',
	'CONV_ERROR_FORUM_ACCESS'			=> 'غير قادر على إيجاد بيانات الدخول للمنتدى',
	'CONV_ERROR_GET_CATEGORIES'			=> 'غير قادر على تحديد الأقسام',
	'CONV_ERROR_GET_CONFIG'				=> 'غير قادر على استرجاع إعدادات المنتدى',
	'CONV_ERROR_COULD_NOT_READ'			=> 'لا يمكن الاتصال/قراءة "%s"',
	'CONV_ERROR_GROUP_ACCESS'			=> 'لا يمكن التحقق من المعلومات الخاصة بالمجموعات',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'هناك تضارب في جدول المجموعات في add_bots() - ستحتاج إلى إضافة المجموعات الخاصة كلها يدويًا',
	'CONV_ERROR_INSERT_BOT'				=> 'لا يمكن إضافة bot إلى جدول الأعضاء',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'لا يمكن إضافة bot إلى جدول bots',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'لا يمكن إضافة الأعضاء إلى جدول user_group',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'خطأ في كاتب الرسائل',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'ملاحظة المطور: ينبغي عليك تحديد $convertor[\'avatar_path\'] لاستعمال %s',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'المسار المرتبط لمعلومات المنتدى لم يُحدّد',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'ملاحظة المطور: ينبغي عليك تحديد $convertor[\'avatar_gallery_path\'] لاستعمال %s',
	'CONV_ERROR_NO_GROUP'				=> 'المجموعة "%1$s" لا يمكن إيجادها في %2$s',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'ranks_path\'] لاستعمال %s',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'smilies_path\'] لاستعمال %s',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'ملاحظة للمطور: ينبغي عليك تحديد $convertor[\'upload_path\'] لاستعمال %s',
	'CONV_ERROR_PERM_SETTING'			=> 'لا يمكن إضافة/تحديث إعداد الصلاحيات',
	'CONV_ERROR_PM_COUNT'				=> 'لا يمكن تحديد عدد الرسائل في مجلد الرسائل الخاصة',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'لا يمكن إنشاء أقسام جديدة لاستبدالها بالأقسام القديمة',
	'CONV_ERROR_REPLACE_FORUM'			=> 'لا يمكن إنشاء منتدى جديد لاستبدال المنتدى القديم',
	'CONV_ERROR_USER_ACCESS'			=> 'غير قادر على استرجاع بيانات العضويات',
	'CONV_ERROR_WRONG_GROUP'			=> 'خطأ المجموعة "%1$s" موجود في %2$s',
	'CONV_OPTIONS_BODY'					=> 'هذه الصفحة ستقوم بجمع البيانات المطلوبة للوصول إلى المنتدى المصدر، أدخِل بيانات قاعدة البيانات لمنتداك القديم. البرنامج المحول لن يقوم بتعديل أي شيء في هذه القاعدة. ويفضل أن يكون المنتدى المصدر معطلًا ليكون التحويل سلسلا وناجحا',
	'CONV_SAVED_MESSAGES'				=> 'الرسائل المحفوظة',

	'PRE_CONVERT_COMPLETE'			=> ' اكتملت الخطوات السابقة كلها بنجاح. تستطيع الآن البدء في التحويل الفعلي. يرجى ملاحظة أنه عليك فعل بعض الأعمال يدويًا. بعد التحويل، خصوصًا التأكد من الصلاحيات، اعِد بناء محرك البحث إذا كان ضروريًا وتأكد أيضا من أن الملفات نسخِت جيدًا، مثل الصور الرمزية والابتسامات',
));
