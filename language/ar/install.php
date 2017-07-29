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

	'STAGE_INSTALL'	=> 'Installing phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introduction',
	'INTRODUCTION_BODY'		=> 'Welcome to phpBB3!<br /><br />phpBB® is the most widely used open source bulletin board solution in the world. phpBB3 is the latest installment in a package line started in 2000. Like its predecessors, phpBB3 is feature-rich, user-friendly, and fully supported by the phpBB Team. phpBB3 greatly improves on what made phpBB2 popular, and adds commonly requested features that were not present in previous versions. We hope it exceeds your expectations.<br /><br />This installation system will guide you through installing phpBB3, updating to the latest version of phpBB3 from past releases, as well as converting to phpBB3 from a different discussion board system (including phpBB2). For more information, we encourage you to read <a href="../docs/INSTALL.html">the installation guide</a>.<br /><br />To read the phpBB3 license or learn about obtaining support and our stance on it, please select the respective options from the side menu. To continue, please select the appropriate tab above.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Full support will be provided for the current stable release of phpBB3, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from Release Candidate (RC) versions to the latest stable version</li><li>converting from phpBB 2.0.x to phpBB3</li><li>converting from other discussion board software to phpBB3 (please see the <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>We encourage users still running beta versions of phpBB3 to replace their installation with a fresh copy of the latest version.</p><h2>Extensions / Styles</h2><p>For issues relating to Extensions, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />For issues relating to styles, templates and themes, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />If your question relates to a specific package, please post directly in the topic dedicated to the package.</p><h2>Obtaining Support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />To ensure you stay up to date with the latest news and releases, why not <a href="https://www.phpbb.com/support/">subscribe to our mailing list</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'مرحباً بك في عملية تنصيب phpBB3!',
	'INSTALL_INTRO_BODY'	=> 'عن طريق هذا الخيار، ستستطيع تنصيب phpBB3.</p><p>إذا أردت المتابعة، ستحتاج إلى إعدادات قاعدة البيانات. إذا لم تكن تعرف معلومات قاعدة البيانات، يرجى الاتصال بالمستضيف ليعطيها لك. لن تستطيع إكمال التركيب بدونها. ستحتاج إلى:</p>

	<ul>
		<li>نوع قاعدة البيانات - قاعدة البيانات التي سوف تستعملها.</li>
		<li>خادم قاعدة البيانات hostname أو DSN أو عنوان خادم قاعدة البيانات.</li>
		<li>منفذ خادم قاعدة البيانات  - منفذ قاعدة البيانات (في أغلب الحالات لن تحتاج هذه المعلومة).</li>
		<li>اسم قاعدة البيانات - اسم قاعدة البيانات على الخادم.</li>
		<li>اسم مستخدم وكلمة المرور إلى قاعدة البيانات - معلومات الدخول للاتصال بقاعدة البيانات.</li>
	</ul>

	<p><strong>ملاحظة:</strong> إذا كنت تستعمل SQLite، يجدر بك إدخال المسار بالكامل لملف قاعدة البيانات في حقل DSN وترك حقول اسم المستخدم وكلمة المرور فارغين.</p>

	<p>قواعد البيانات التي يدعمها phpBB3:</p>
	<ul>
		<li>MySQL 3.23 أو اعلى (MySQLi مدعومه)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 أو اعلى (مباشرة أو من خلال ODBC)</li>
		<li>خادم MS SQL 2005 أو أعلى (أصلي)</li>
		<li>Oracle</li>
	</ul>

	<p>سيتم عرض قواعد البيانات المتوفرة على خادمك فقط',

	'ACP_LINK'	=> 'Take me to <a href="%1$s">the ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB is already installed.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB is not installed yet.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'File does not exist',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'To be able to install phpBB the %1$s file needs to exist.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s file exist for a better forum user experience.',
	'FILE_NOT_WRITABLE'						=> 'File is not writable',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'To be able to install phpBB the %1$s file needs to be writable.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s file be writable for a better forum user experience.',

	'DIRECTORY_NOT_EXISTS'						=> 'Directory does not exist',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'To be able to install phpBB the %1$s directory needs to exist.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s directory exist for a better forum user experience.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Directory is not writable',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'To be able to install phpBB the %1$s directory needs to be writable.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s directory be writable for a better forum user experience.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'إصدار PHP >= 5.4.0',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB يتطلب PHP إصدار 5.4.0 أو أعلى.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'دالة PHP getimagesize() متوفرة',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>مطلوب</strong> - ليعمل phpBB بشكل صحيح، دالة getimagesize ينبغي أن تكون متوفرة',
	'PCRE_UTF_SUPPORT'					=> 'دعم PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB <strong>لن يعمل</strong> إذا كان تركيب PHP لديك غير متوافق مع UTF-8 في امتداد PCRE',
	'PHP_JSON_SUPPORT'					=> 'دعم PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '<strong>مطلوب</strong> - ليعمل phpBB بشكل صحيح، فإنه يجب وجود دعم امتداد PHP JSON.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM support',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'In order for phpBB to function correctly, the PHP XML/DOM extension needs to be available.',
	'PHP_SUPPORTED_DB'					=> 'قواعد البيانات المدعومة',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>مطلوب</strong> - ينبغي على الأقل أن يكون أحد قواعد البيانات متوافقة مع PHP. إذا كانت موديلات قواعد البيانات غير متوفرة فينبغي عليك الاتصال بمستضيفك',

	'RETEST_REQUIREMENTS'	=> 'Retest requirements',

	'STAGE_REQUIREMENTS'	=> 'متطلبات التنصيب',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'ينبغي عليك ملء الحقول كلها في هذه الصفحة',

	'TIMEOUT_DETECTED_TITLE'	=> 'The installer detected a timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'The installer has detected a timeout, you may try to refresh the page, which may lead to data corruption. We suggest that you either increase your timeout settings or try to use the CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Set installation data',

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
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'كلمة المرور التي أدخلتها كبيرة جداً. أقصى طول ينبغي ألا يتعدى 30 حرف',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'كلمة المرور التي أدخلتها صغيرة جداً. أقل طول ينبغي أن يكون أكبر من 6 أحرف',
	'INST_ERR_USER_TOO_LONG'		=> 'اسم المستخدم الذي استعملته طويل جداً. أقصى طول هو 20 حرف',
	'INST_ERR_USER_TOO_SHORT'		=> 'اسم المستخدم الذي أدخلته قصير جداً. أقل طول مسموح هو 3 أحرف',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Bulletin board configuration',
	'DEFAULT_LANGUAGE'	=> 'Default language',
	'BOARD_NAME'		=> 'Title of the board',
	'BOARD_DESCRIPTION'	=> 'Short description of the board',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'إعدادات الاتصال بقاعدة البيانات',

	// Form labels
	'DB_CONFIG'				=> 'إعدادات قاعدة البيانات',
	'DBMS'					=> 'نوع قاعدة البيانات',
	'DB_HOST'				=> 'Database server أو hostname أو DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN قياسي لمورد البيانات ومتوافق فقط مع تثبيت ODBC. على PostgreSQL، استعمل السيرفر الشخصي عن طريق الدخول إلى 127.0.0.1 للاتصال بواسطة TCP. على SQLite، أدخل المسار الكامل لملف قاعدة البيانات.',
	'DB_PORT'				=> 'منفذ خادم قاعدة البيانات',
	'DB_PORT_EXPLAIN'		=> 'اتركه فارغاً إلا إذا كان الخادم يستعمل منفذ غير القياسي',
	'DB_PASSWORD'			=> 'كلمة مرور قاعدة البيانات',
	'DB_NAME'				=> 'اسم قاعدة البيانات',
	'DB_USERNAME'			=> 'اسم مستخدم قاعدة البيانات',
	'DATABASE_VERSION'		=> 'Database version',
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
	'INST_ERR_NO_DB'				=> 'لا يمكن تحميل موديول PHP لنوع قاعدة البيانات المحددة',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'البادئة التي أدخلتها غير صحيحة. يجب أن تبدأ بحرف وتحتوي فقط على حروف، أرقام وunderscores.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'سوابق الجدول التي حددتها طويلة جداً. أقصى طول هو %d حرف',
	'INST_ERR_DB_NO_NAME'			=> 'لم تحدد قاعدة البيانات',
	'INST_ERR_DB_FORUM_PATH'		=> 'ملف قاعدة البيانات المحدد هو دليل داخل مجلد منتداك، عليك وضع هذا الملف في مكان لا يمكن الوصول إليه عبر المتصفح',
	'INST_ERR_DB_CONNECT'			=> 'لا يمكن الاتصال بقاعدة البيانات، شاهد رسالة الخطأ في الأسفل',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Both the database and the directory containing it must be writable.',
	'INST_ERR_DB_NO_ERROR'			=> 'لا توجد أية رسالة خطأ',
	'INST_ERR_PREFIX'				=> 'الجداول ذات السوابق التي حددتها موجودة مسبقاً، يرجى اختيار غيرها',
	'INST_ERR_DB_NO_MYSQLI'			=> 'إصدار MySQL المركب على هذا الجهاز غير متوافق مع خيار “MySQL with MySQLi Extension” الذي حددته. يرجى محاولة خيار “MySQL” بدلاً منه',
	'INST_ERR_DB_NO_SQLITE3'		=> 'إصدار SQLite extension المثبت لديك قديم جداً، يجب ترقيته إلى الإصدار 3.6.15 على الأقل.',
	'INST_ERR_DB_NO_ORACLE'			=> 'إصدار Oracle المركب على هذا الجهاز يستلزم وضع خيار <var>NLS_CHARACTERSET</var> على <var>UTF8</var>.ينبغي عليك تحديث التركيب إلى 9.2+ أو تغيير الخيار',
	'INST_ERR_DB_NO_POSTGRES'		=> 'قاعدة البيانات التي حددتها لم تُنشَأ على نظام <var>UNICODE</var> أو <var>UTF8</var>. حاول تركيب قاعدة البيانات على نظام <var>UNICODE</var> أو <var>UTF8</var>',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'The schema file is not writable',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail configuration',

	// Package info
	'PACKAGE_VERSION'					=> 'Package version installed',
	'UPDATE_INCOMPLETE'				=> 'Your phpBB installation has not been correctly updated.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Please read the information below in order to fix this error.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Incomplete update</h1>

		<p>We noticed that the last update of your phpBB installation hasn’t been completed. Visit the <a href="%1$s" title="%1$s">database updater</a>, ensure <em>Update database only</em> is selected and click on <strong>Submit</strong>. Don\'t forget to delete the "install"-directory after you have updated the database sucessfully.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'A new feature release <strong>%1$s</strong> is available. Please read <a href="%2$s" title="%2$s"><strong>the release announcement</strong></a> to learn about what it has to offer, and how to upgrade.',
	'SERVER_CONFIG'				=> 'إعدادات الخادم',
	'SCRIPT_PATH'				=> 'مسار السكربت',
	'SCRIPT_PATH_EXPLAIN'		=> 'مسار مجلد phpBB مرتبط بعنوان الموقع، مثال <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'شكراً، إدارة المنتدى',
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
	'SMILIES_CRYING'				=> 'يبكي أو حزين جداً',
	'SMILIES_EMARRASSED'			=> 'خجول',
	'SMILIES_EVIL'					=> 'شرير أو غاضب جداً',
	'SMILIES_EXCLAMATION'			=> 'تعجب',
	'SMILIES_GEEK'					=> 'Geek',
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
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'سعيد جداً',
	'SMILIES_WINK'					=> 'غمزة',

	'TOPICS_TOPIC_TITLE'			=> 'أهلا بك في phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Overview',
	'MENU_INTRO'		=> 'Introduction',
	'MENU_LICENSE'		=> 'License',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Creating configuration file',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adding configuration settings',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adding default settings to the database',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Creating database schema file',
	'TASK_SETUP_DATABASE'				=> 'Setting up database',
	'TASK_CREATE_TABLES'				=> 'Creating tables',

	// Install data
	'TASK_ADD_BOTS'				=> 'Registering bots',
	'TASK_ADD_LANGUAGES'		=> 'Installing available languages',
	'TASK_ADD_MODULES'			=> 'Installing modules',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Creating search index',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Installing packaged extensions',
	'TASK_NOTIFY_USER'			=> 'Sending notification e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'The installer has finished successfully',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Module not found',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'				=> 'Task not found',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'All installer task services should start with “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer task service definition is invalid. Service name “%1$s” given, the expected class namespace is “%2$s” for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Install phpBB',
	'CLI_UPDATE_BOARD'				=> 'Update phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Show the configuration which will be used',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validate a configuration file',
	'CLI_CONFIG_FILE'				=> 'Config file to use',
	'MISSING_FILE'					=> 'Unable to access file %1$s',
	'MISSING_DATA'					=> 'Config file is missing data or might contain invalid settings.',
	'INVALID_YAML_FILE'				=> 'Could not parse YAML file %1$s',
	'CONFIGURATION_VALID'			=> 'The configuration file is valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'تحديث تركيب phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'عن طريق هذا الخيار، سيكون من الممكن تحديث تركيب منتداك phpBB إلى آخر نسخة.<br />أثناء التقدم ستُفحص ملفاتك كلها. ستتمكن من فحص الاختلافات والملفات كلها قبل البدء بتحديثها.<br /><br />ملف التحديث نفسه يستطيع أن ينتهي على طريقتين مختلفتين.</p><h2>التحديث اليدوي</h2><p>مع هذا التحديث ليس عليك سوى تحميل مجموعة الملفات الخاصة بالتعديل للتأكد من أنك لن تفقد ملفاتك المعدلة عند القيام بذلك. بعد تحميل هذه الصفحة تحتاج الى تحميل الملفات يدويا الى المسار الصحيح في phpBB ستكون مرحلة الفحص مرة أخرى لنرى إذا كان وُضعَت الملفات في الموقع الصحيح</p><h2>تحديث بواسطة FTP</h2><p>هذه الطريقة مشابهة للأولى ولكن من دون الحاجة إلى تحميل الملفات وتحميل الملفات المتغيرة، وسيتم ذلك لك! من أجل استخدام هذه الطريقة تحتاج لمعرفة التفاصيل الخاصة بك منذ دخول FTP سوف يطلب تسجيل الدخول منك بالنسبة لها. وبمجرد الانتهاء سوف تنتقل إلى التحقق من الملف مرة أخرى للتأكد من استكمال كل ما حصل بشكل صحيح!<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>إعلان الإصدار</h1>

		<p>يرجى قراءة إعلان الإصدار للنسخة الأخيرة قبل اكمال عملية التحديث، فقد يحتوي على معلومات مفيدة.  يحتوي الإعلان أيضاً على روابط للتحميل الكامل كما يحتوي أيضاً على قائمة التغييرات.</p>

		<br />

		<h1>كيفية تحديث المنتدى عن طريق حزمة التحديث الآلي</h1>

		<p>الطريقة المفضلة لتحديث منتاك المكتوبة هنا تنطبق فقط على حزمة التحديث الآلي. يمكنك أيضاً تحديث منتاك باتباع إحدى الطرق الموجودة في ملف INSTALL.html. الخطوات لتحديث منتداك آلياً هي:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>اذهب إلى <a href="https://www.phpbb.com/downloads" title="https://www.phpbb.com/downloads">صفحة تحميل phpBB.com</a> وقم بتحميل ملف "حزمة التحديث الآلي".<br /><br /></li>
			<li>قم بفك الضغط عن الملف.<br /><br /></li>
			<li>قم برفع مجلدي "install" و "vendor" غير المضغوطين كاملين إلى المجلد الرئيسي لمنتدى phpBB لديك (المجلد الذي يحتوي على ملف config.php بداخله).<br /><br /></li>
		</ul>

		<p>بعد أن يتم الرفع، سيتم غلق منتداك آلياً عن الزوار بسبب وجود مجلد install الذي قمت برفعه.<br /><br />
		<strong><a href="%1$s" title="%1$s">الآن قم ببدء عملية التحديث عن طريق الذهاب بمتصفحك إلى مجلد install</a>.</strong><br />
		<br />
		سيتم بعد ذلك إرشادك خلال عملية التحديث. سيتم إعلامك عند اكتمال عملية التحديث.
		</p>
',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'		=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'اختر شكل تحميل الملف',

	// FTP settings
	'FTP_SETTINGS'			=> 'إعدادات FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'الإصدار هو الأحدث حتى الآن. ليس هناك حاجة لتشغيل أداة التحديث، إذا أردت أن تقوم بفحص لملفاتك نرجو التأكد بأنك تستخدم أداة التحديث الصحيحة',
	'OLD_UPDATE_FILES'				=> 'ملفات التحديث قديمة. ملفات التحديث هذه هي للتحديث من pbpbb%1$s إلى phpBB %2$s ولكن الإصدار الأخير من phpBB هو %3$s',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'ملفات التحديث التي تم أوجِدَت غير متوافقة مع إصدار التركيب. إصدارك المركب هو %1$s وملفات التحديث هي للترقية من %2$s إلى %3$s',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'تحديث الملفات',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'تحميل',
	'DOWNLOAD_CONFLICTS'				=> 'تحميل التضاربات لهذا الملف',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'البحث عن &lt;&lt;&lt; لاستعراض التضاربات',
	'DOWNLOAD_UPDATE_METHOD'			=> 'تحميل أرشيف الملفات المعدلة',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'بمجرد تحميلها ينبغي عليك فك حزمة الأرشيف. ستجد الملفات المعدلة التي تحتاج إلى أن ترفعها داخل مجلد المنتدى الرئيسي. الرجاء رفع الملفات إلى أماكنها المحددة. وبعد أن ترفع كل الملفات، الرجاء فحص الملفات مرة أخرى بواسطة الزر في الأسفل',

	'FILE_ALREADY_UP_TO_DATE'		=> 'الملف محدث سابقاً',
	'FILE_DIFF_NOT_ALLOWED'			=> 'الملف غير قابل ليكون diffed',
	'FILE_USED'						=> 'معلومات الاستعمال من',			// Single file
	'FILES_CONFLICT'				=> 'الملفات المتعارضة',
	'FILES_CONFLICT_EXPLAIN'		=> 'الملفات الآتية معدلة ولا تمثل الملفات الأصلية من النسخة القديمة. phpBB قررت أن هذه الملفات تشكل تعارضا إذا ما تم محاولة إدماجها. الرجاء تحقق من الملفات وحاول إصلاحها أو أكمل التحديث باختيار طريقة الدمج المفضلة. إذا حللت التعارض يدوياً أفحص الملفات مرة أخرى قبل أن تعدلهم. أنت قادر أيضا على الاختيار بين طرق الدمج المفضلة لكل ملف. الأولى ستنتج في ملف حيث سطر التعارض من الملف القديم سيفقد، والآخر سينتج في خسارة التغييرات من الملف الجديد',
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
	'FILES_UP_TO_DATE'				=> 'تم تحديث الملفات سابقاً',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'الملفات الآتية محدثة من قبل ولا تحتاج أي تحديث',
	'FILES_VERSION'					=> 'Files Version',
	'TOGGLE_DISPLAY'				=> 'إظهار/إخفاء القائمة',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'تحدّثت قاعدة البيانات بنجاح، الآن ستحتاج لمتابعة عملية التحديث',

	'TASK_UPDATE_EXTENSIONS'	=> 'Updating extensions',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'المحول الذي حددته غير موجود',
	'DEV_NO_TEST_FILE'			=> 'لم تحدد أية قيمة للمتحول test_file في برنامج التحويل. ليس من المفترض مشاهدة هذه الرسالة، الرجاء تبليغ هذه الرسالة إلى مبرمج السكربت',
	'COULD_NOT_FIND_PATH'		=> 'لا يمكن إيجاد مسار المنتدى الذي حددته، يرجى فحص الإعدادات ثم أعد المحاولة مرة أخرى<br />» المسار الذي حددته هو %s',
	'CONFIG_PHPBB_EMPTY'		=> 'إعداد متغير phpBB3 لـ "%s" فارغ!',

	'MAKE_FOLDER_WRITABLE'		=> 'يرجى التأكد من أن المجلد موجود ويقبل الكتابة ثم حاول مجدداً:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'يرجى التأكد من أن المجلدات موجودة وتقبل الكتابة ثم حاول مجدداً:<br />»<strong>%s</strong>',

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
	'CONVERT_INTRO'				=> 'مرحباً بك في برنامج التحويل الى phpBB3',
	'CONVERT_INTRO_BODY'		=> 'من هنا، تستطيع استيراد بيانات من نظام منتدى آخر (مُنصب). اللائحة في الأسفل تظهر برامج التحويل المتوفرة حالياً. إذا لم يكن هناك أي برنامج تحويل في هذه القائمة يناسب المنتدى الذي تريد تحويله، الرجاء قم بزيارة موقعنا حيث ستجد المزيد من برامج التحويل جاهزة للتحميل',
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
	'REFRESH_PAGE_EXPLAIN'		=> 'إذا اخترت نعم، فبرنامج التحويل سيحدّث الصفحة لمتابعة التحويل بعد إنهاء كل خطوة. إذا كانت هذه عمليتك الأولى في التحويل لتجربة ومعرفة أي أخطاء مستقبلاً، نقترح عليك اختيار لا',

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
	'CONVERT_COMPLETE_EXPLAIN'	=> 'انتهيت الآن من تحويل منتداك إلى phpBB 3.0.x. تستطيع الآن تسجيل الدخولو<a href="../">تصفح منتداك</a>، رجاءً تأكد من تحويل الإعدادت بالصورة المطلوبة فعّل منتداك عن طريق حذف مجلد التنصيب install. تذكر أن المساعدة على استعمال phpBB موجودة على الشبكة في <a href="http://www.phpbb.com">منتدى الدعم الفني</a>',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'رفع المرفقات عبر FTP مفعل في المنتدى القديم. رجاءً عطّل خيار الرفع عبر FTP وتأكد من تحديد مجلد الرفع الصحيح، وبعدها ارفع الملفات المرفقة كلها إلى مجلد المرفقات الجديد. بمجرد الانتهاء من هذا، أعِد تشغيل المحول',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'لا توجد أية معلومات متاحة لإعداد هذا المحول',
	'CONV_ERROR_FORUM_ACCESS'			=> 'غير قادر على إيجاد بيانات الدخول للمنتدى',
	'CONV_ERROR_GET_CATEGORIES'			=> 'غير قادر على تحديد الأقسام',
	'CONV_ERROR_GET_CONFIG'				=> 'غير قادر على استرجاع إعدادات المنتدى',
	'CONV_ERROR_COULD_NOT_READ'			=> 'لا يمكن الاتصال/قراءة "%s"',
	'CONV_ERROR_GROUP_ACCESS'			=> 'لا يمكن التحقق من المعلومات الخاصة بالمجموعات',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'هناك تضارب في جدول المجموعات في add_bots() - ستحتاج إلى إضافة المجموعات الخاصة كلها يدوياً',
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
	'CONV_OPTIONS_BODY'					=> 'هذه الصفحة ستقوم بجمع البيانات المطلوبة للوصول إلى المنتدى المصدر، أدخِل بيانات قاعدة البيانات لمنتداك القديم. البرنامج المحول لن يقوم بتعديل أي شيء في هذه القاعدة. ويفضل أن يكون المنتدى المصدر معطلاً ليكون التحويل سلسلا وناجحا',
	'CONV_SAVED_MESSAGES'				=> 'الرسائل المحفوظة',

	'PRE_CONVERT_COMPLETE'			=> ' اكتملت الخطوات السابقة كلها بنجاح. تستطيع الآن البدء في التحويل الفعلي. يرجى ملاحظة أنه عليك فعل بعض الأعمال يدوياً. بعد التحويل، خصوصاً التأكد من الصلاحيات، اعِد بناء محرك البحث إذا كان ضرورياً وتأكد أيضا من أن الملفات نسخِت جيداً، مثل الصور الشخصية والابتسامات',
));
