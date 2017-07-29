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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'هنا تحدد العمليات الأساسية في منتداك، أعط منتداك اسماً وشرحاً مناسباً ومن ضمن إعددات أخرى حدد الاختيار الافتراضي للتوقيت واللغة',
	'BOARD_INDEX_TEXT'				=> 'نص رئيسية المنتدى',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'هذا النص يتم عرضه كرئيسية المنتدى في ملاحة المنتدى. إذا لم يتم تحديد نص، سيتم استخدام "فهرس المنتدى" افتراضياً.',
	'BOARD_STYLE'					=> 'استايل المنتدى',
	'CUSTOM_DATEFORMAT'				=> 'خاص…',
	'DEFAULT_DATE_FORMAT'			=> 'صيغة التاريخ',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'صيغة التاريخ مثل دالة PHP <code>date</code>',
	'DEFAULT_LANGUAGE'				=> 'اللغة الافتراضية',
	'DEFAULT_STYLE'					=> 'هنا تحدد العمليات الأساسية في منتداك، أعط منتداك اسماً وشرحاً مناسباً ومن ضمن إعددات أخرى حدد الاختيار الافتراضي للتوقيت واللغة',
	'DEFAULT_STYLE_EXPLAIN'			=> 'الاستايل الافتراضي للمستخدمين الجدد.',
	'DISABLE_BOARD'					=> 'تعطيل المنتدى',
	'DISABLE_BOARD_EXPLAIN'			=> 'يغلق المنتدى ولن يكون متاحاً للمستخدمين، يمكنك أيضاً وضع رسالة أقصى عدد حروفها 255 لتبين سبب تعطيل المنتدى',
	'DISPLAY_LAST_SUBJECT'			=> 'عرض عنوان آخر مشاركة في قائمة المنتديات',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'عنوان آخر مشاركة تم وضعها سيتم عرضه في قائمة المنتديات مع رابط للمشاركة.العناوين من المنتديات المحمية بكلمة مرور أو المنتديات التي لا يملك المستخدم صلاحية القراءة بها لن يتم عرضها.',
	'GUEST_STYLE'					=> 'استايل الزوار',
	'GUEST_STYLE_EXPLAIN'			=> 'استايل المنتدى الذي يظهر للزوار غير المسجلين.',
	'OVERRIDE_STYLE'				=> 'تجاوز استايل المستخدم',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'استبدال الاستايل المحدد في التنسيق الافتراضي بالاستايل الخاص بالمستخدمين (والزوار)',
	'SITE_DESC'						=> 'وصف الموقع',
	'SITE_HOME_TEXT'				=> 'نص الموقع الرئيسي',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'هذا النص سيتم عرضه كرابط لموقعك الأصلي في ملاحة المنتدى. إذا لم يتم تحديد نص، سيتم استخدام "الرئيسية" افتراضياً.',
	'SITE_HOME_URL'					=> 'رابط الموقع الرئيسي',
	'SITE_HOME_URL_EXPLAIN'			=> 'إذا تم تحديده، سيتم وضع رابط له في ملاحة المنتدى وسيقوم شعار المنتدى بالربط لهذا الرابط بدلاً من فهرس المنتدى. يجب وضع الرابط كاملاً، مثال <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'اسم الموقع',
	'SYSTEM_TIMEZONE'				=> 'منطقة توقيت النظام',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'الوقت المستخدم ليظهر لغير المسجلين ( الزوار، محركات البحث ) الأعضاء المسجلين يقومون بتعين الوقت المستخدم خلال عملية التسجيل في المنتدى ويمكنهم تغير ذلك من خلال لوحة الملف الشخصي الخاص بهم.',
	'WARNINGS_EXPIRE'				=> 'مدة التحذير',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'عدد الأيام المنقضية التي تبعد التحذير من سجلات المستخدم. اجعل هذه القيمة 0 لجعل التحذيرات دائمة.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'من هنا يمكنك تعطيل تفعيل بعض خصائص المنتدى',

	'ALLOW_ATTACHMENTS'			=> 'اسمح بالمرفقات',
	'ALLOW_BIRTHDAYS'			=> 'السماح بعيد الميلاد',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'السماح بإدخال أيام الميلاد وعرض العمر في صفحة الملف الشخصي. يرجى ملاحظة أن قائمة عيد الميلاد في قائمة المنتديات تكون إدارتها بتحميل إعداد منفصل',
	'ALLOW_BOOKMARKS'			=> 'اسمح بإضافة المواضيع إلى المفضلة',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'السماح للمستخدم بوضع وصلات خارجية في المفضلة',
	'ALLOW_BBCODE'				=> 'السماح بـ BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'السماح بالإشتراك في المنتديات',
	'ALLOW_NAME_CHANGE'			=> 'السماح بتغير اسم المستخدم',
	'ALLOW_NO_CENSORS'			=> 'السماح بتعطيل مراقبة الكلمات',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'المستخدم يمكنه أن يعطل خاصية مراقبة الكلمات البذيئة فتعرض له فقط',
	'ALLOW_PM_ATTACHMENTS'		=> 'السماح بالمرفقات في الرسائل الخاصة',
	'ALLOW_PM_REPORT'			=> 'السماح للأعضاء بالتبليغ عن الرسائل الخاصة',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'إذا تفعّل هذا الخيار، سيمكن للأعضاء التبليغ عن أية رسائل خاصة تصلهم، وأية رسائل خاصة يبلّغ عنها ستصبح مسموحة للقراءة من الإداريين.',
	'ALLOW_QUICK_REPLY'			=> 'السماح بالرد السريع',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'هذا الخيار يحدد إذا كان الرد السريع متاحا أم لا. إذا تفعّل هذا الخيار، فينبغي على المنتديات أن يكون الرد السريع فيها متاحاً أيضاً.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'تفعيل الرد السريع لجميع المنتديات',
	'ALLOW_SIG'					=> 'السماح بالتواقيع',
	'ALLOW_SIG_BBCODE'			=> 'السماح بشفرة BBCode في التواقيع',
	'ALLOW_SIG_FLASH'			=> '<code>[FLASH]</code> السماح بكود الفلاش في التواقيع',
	'ALLOW_SIG_IMG'				=> '<code>[IMG]</code> السماح بكود الصور في التواقيع',
	'ALLOW_SIG_LINKS'			=> 'السماح بوضع وصلات في التواقيع',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> ' <code>[URL]</code> إذا منع لن يُستطاع الضغط على الوصلة لكن يمكن نسخها ولصقها لشريط العناوين',
	'ALLOW_SIG_SMILIES'			=> 'السماح باستعمال الابتسامات في التواقيع',
	'ALLOW_SMILIES'				=> 'السماح بالابتسامات',
	'ALLOW_TOPIC_NOTIFY'		=> 'السماح بمتابعة المواضيع',
	'BOARD_PM'					=> 'الرسائل الخاصة',
	'BOARD_PM_EXPLAIN'			=> 'تعطيل أو تفعيل الرسائل الخاصة لكل المستخدمين',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Allow board notifications',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'الصور الرمزية في الغالب صغيرة يمكن للمستخدم أن يربطها بعضويته، على حسب التنيسق المستخدم في الغالب تعرض الصور تحت اسم المستخدم عند عرض الموضوع، هنا تستطيع تحديد هذه الصور الرمزية، الرجاء الانتباه إلى أنك إذا أردت أن يرفع المستخدمون صورا شخصية من جهازهم عليك أن تنشئ ملف مسمى في الأسفل وتتأكد من إعطائه الترخيص الازم للسماح لخادم الشبكة بالكتابة فيه. أيضاً نحب أن نلفت انتباهك إلى أن تحديد حجم الصور الرمزية يكون على الصورة المحملة على سيرفر المنتدى ولا يكون على الصور ذات الوصلات الخارجية',

	'ALLOW_AVATARS'					=> 'تفعيل الصور الشخصية',
	'ALLOW_AVATARS_EXPLAIN'			=> 'السماح بالاستخدام العام للصور الشخصية؛<br />إذا ألغيت تفعيل الصور الشخصية بشكل عام أو بمود بمعين، فإن الصور الشخصية الملغاة التفعيل لن تظهر في المنتدى، لكن سيبقى للأعضاء إمكانية تحميل صورهم الشخصية من لوحة التحكم الخاصة بهم.',
	'ALLOW_GRAVATAR'				=> 'Enable gravatar avatars',
	'ALLOW_LOCAL'					=> 'تفعيل معرض الصور الشخصية',
	'ALLOW_REMOTE'					=> 'السماح بوصلات الصور الشخصية',
	'ALLOW_REMOTE_EXPLAIN'			=> 'صور شخصية مرفوعة على سيرفر خارج سيرفر المنتدى',
	'ALLOW_REMOTE_UPLOAD'			=> 'تفعيل التحميل الخارجي للصور الشخصية',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'تفعيل تحميل الصور الشخصية من مواقع أخرى.',
	'ALLOW_UPLOAD'					=> 'السماح برفع الصور الشخصية',
	'AVATAR_GALLERY_PATH'			=> 'مسار معرض الصور الشخصية',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'مسار تحت المنتدى إلى معرض الصور الشخصية مثال <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'مسار تخزين الصور الشخصية',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'أقصى الأبعاد للصور الشخصية',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'الارتفاع × العرض بالبكسل',
	'MAX_FILESIZE'					=> 'أقصى حجم لملف الصورة الشخصية',
	'MAX_FILESIZE_EXPLAIN'			=> 'للصور الشخصية التي سترفع على خادم المنتدى. إذا كانت القيمة 0، فإن حجم الملف سيكون محدودا فقط بإعدادات PHP لديك.',
	'MIN_AVATAR_SIZE'				=> 'أدنى الأبعاد للصور الشخصية',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'الارتفاع × العرض بالبكسل',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'هنا يمكنك وضع الإعدادت الافتراضية للرسائل الخاصة',

	'ALLOW_BBCODE_PM'			=> 'السماح بـ BBCode في الرسائل الخاصة',
	'ALLOW_FLASH_PM'			=> 'السماح بكود الفلاش في الرسال الخاصة <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'لاحظ أن تمكين استخدام الفلاش في الرسائل الخاصه يعتمد ايضاً على الصلاحيات',
	'ALLOW_FORWARD_PM'			=> 'السماح بتقديم الرسائل الخاصة',
	'ALLOW_IMG_PM'				=> 'السماح بكود الصور في الرسائل الخاصة <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'السماح بإرسال الرسائل الخاصة لأكثر من عضو أو مجموعة',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'إرسال للمجموعات، يمكن ضبط الخصائص لكل مجموعة على إحدى من صفحة اعدادت المجموعات',
	'ALLOW_PRINT_PM'			=> 'السماح بعرض الطباعة في الرسائل الخاصة',
	'ALLOW_QUOTE_PM'			=> 'السماح بالاقتباس في الرسائل الخاصة',
	'ALLOW_SIG_PM'				=> 'السماح بالتواقيع في الرسائل الخاصة',
	'ALLOW_SMILIES_PM'			=> 'السماح بالابتسامات في الرسائل الخاصة',
	'BOXES_LIMIT'				=> 'أقصى حد من الرسائل في صندوق الرسائل الخاصة',
	'BOXES_LIMIT_EXPLAIN'		=> 'المستخدم لن يستطيع استقبال أي رسائل فوق العدد المحدد. ضع صفر 0 إذا أردت ألا يكون هناك عدد معين',
	'BOXES_MAX'					=> 'أقصى عدد لمجلدات الرسائل الخاصة',
	'BOXES_MAX_EXPLAIN'			=> 'الإعدادت الافتراضية تسمح للمستخدم بعمل مجلدات في الرسائل الخاصة لوضع الرسائل فيها',
	'ENABLE_PM_ICONS'			=> 'السماح باستخدام رموز المواضيع في الرسائل الخاصة',
	'FULL_FOLDER_ACTION'		=> 'الفعل الافتراضي للمجلدات الممتلئة',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'الفعل الافتراضي إذا امتلأ مجلد المستخدم، إذا كانت خيارات فعل المستخدم غير مطبقة، هذا إذا كان لديه فعل محدد. الاستثناء الوحيد في "الرسائل المرسلة" حيث الخيار الافتراضي هو إلغاء الأقدم',
	'HOLD_NEW_MESSAGES'			=> 'أوقف الرسائل الجديدة',
	'PM_EDIT_TIME'				=> 'حصر وقت التعديل',
	'PM_EDIT_TIME_EXPLAIN'		=> 'تحديد الوقت للرسائل الخاصة التي لم تصل إلى الجهة المعنية. القيمة 0 صفر تعطل هذا التصرف',
	'PM_MAX_RECIPIENTS'			=> 'الحد الاعلى للمستلمين',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'الحد الاعلى لسماح المستقبلين في الرسائل الخاصة، اذا عينت 0 ستكون غير محدده، يمكن تحديد هذه الخاصيه لكل مجموعه على حدى من صفحة خصائص المجموعات',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'هنا يمكنك تحديد الافتراضيات للمشاركات',
	'ALLOW_POST_LINKS'					=> 'السماح بالوصلات في المشاركات والرسائل الخاصة',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'إذا منع سيتعطل كود <code>[URL]</code> ولن يتمكن من الضغط المباشر على الوصلة',
	'ALLOWED_SCHEMES_LINKS'				=> 'Allowed schemes in links',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Users can only post schemeless URLs or one of the comma-separated list of allowed schemes.',
	'ALLOW_POST_FLASH'					=> 'السماح باستخدام <code>[FLASH]</code> BBCode في المشاركات',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'إذا منعت استخدام <code>[FLASH]</code> BBCode فسيمنع عرض الفلاش في المشاركات. وفي الأحوال الأخرى سيخضع هذا الأمر لصلاحيات الأعضاء المضبوطة يدويا',

	'BUMP_INTERVAL'					=> 'فترة الرفع',
	'BUMP_INTERVAL_EXPLAIN'			=> 'عدد الدقائق، الساعات أو الأيام بين آخر مشاركة في الموضوع وبين إمكانية رفعه إلى أعلى قائمة المواضيع. ضع القيمة 0 لتعطيل ميزة رفع المواضيع.',
	'CHAR_LIMIT'					=> 'أقصى عدد للحروف في المشاركة',
	'CHAR_LIMIT_EXPLAIN'			=> 'أقصى عدد للحروف في المشاركة. ضع القيمة صفر 0 لجعل الحد الاقصى لا نهائي',
	'DELETE_TIME'					=> 'تحديد وقت الحذف',
	'DELETE_TIME_EXPLAIN'			=> 'تحديد الوقت المتاح لإمكانية حذف المشاركة. ضع 0 لتعطيل هذه الميزة.',
	'DISPLAY_LAST_EDITED'			=> 'عرض معلومات وقت آخر تعديل',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'اختر إذا أردت عرض " آخر مشاركة من قبل" في صفحة المواضيع',
	'EDIT_TIME'						=> 'تحديد وقت التعديل',
	'EDIT_TIME_EXPLAIN'				=> 'يحدد الوقت المسموح به لتعديل المشاركات. القيمة صفر تعطل هذه الخاصية',
	'FLOOD_INTERVAL'				=> 'فترة الإغراق',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'عدد الثواني التي ينبغي انتظارها بين المشاركة والمشاركة الجديدة. للسماح للمستخدمين لتجاهل هذه الخاصية عدل صلاحياتهم',
	'HOT_THRESHOLD'					=> 'بوابة المواضيع النشيطة',
	'HOT_THRESHOLD_EXPLAIN'			=> 'عدد المشاركات في الموضوع التي تؤهله لدخول بوابة المواضيع النشيطة',
	'MAX_POLL_OPTIONS'				=> 'أقصى عدد لخيارات التصويت',
	'MAX_POST_FONT_SIZE'			=> 'أقصى حجم لخط المشاركة',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'الحجم الأقصى للخطوط في المشاركة. عدل القيمة لصفر لجعل حجم الخط بدون حد',
	'MAX_POST_IMG_HEIGHT'			=> 'أقصى ارتفاع للصور بالمشاركة',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'الحد الأقصى لارتفاع الصورة/الفلاش في المشاركة. القيمة 0 تعنى أنه لا يوجد حد',
	'MAX_POST_IMG_WIDTH'			=> 'أقصى حد لعرض الصورة',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'الحد الأقصى لعرض الصورة/الفلاش في المشاركة. القيمة 0 تعنى أنه لا يوجد حد',
	'MAX_POST_URLS'					=> 'أقصى حد للوصلات',
	'MAX_POST_URLS_EXPLAIN'			=> 'أقصى حد للوصلات. ضع القيمة صفر لجعل الحد لا نهائي',
	'MIN_CHAR_LIMIT'				=> 'عدد الأحرف الأدنى في الرسالة أو المشاركة',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'العدد الأدنى من الحروف كي يتمكن العضو من إرسال الرسالة أو المشاركة. أقل عدد يمكن وضعه هو 1.',
	'POSTING'						=> 'مشاركة',
	'POSTS_PER_PAGE'				=> 'المشاركات بالصفحة',
	'QUOTE_DEPTH_LIMIT'				=> 'أقصى عدد للاقتباسات في المشاركة',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'يمكن للمستخدم اقتباس تشعبي حدد عدد تشعب الاقتباس الواحد. ضع القيمة صفر لجعل الاقتباس لا نهائي',
	'SMILIES_LIMIT'					=> 'أقصى عدد للابتسامات في المشاركة',
	'SMILIES_LIMIT_EXPLAIN'			=> 'الحد الأقصى للابتسامات في المشاركة. ضع 0 لجعل الحد الأقصى لا نهائي',
	'SMILIES_PER_PAGE'				=> 'الابتسامات لكل صفحة',
	'TOPICS_PER_PAGE'				=> 'المواضيع بالصفحة',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'هنا يمكنك تحديد الإعدادت الافتراضية لتواقيع الأعضاء',

	'MAX_SIG_FONT_SIZE'				=> 'أكبر حجم للحروف',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'لحد أكبر حجم للخطوط في التوقيع. ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_IMG_HEIGHT'			=> 'الطول الأقصى للصور',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'أقصى طول للصور أو الفلاشات التي يدرجها المستخدم في توقيعه ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_IMG_WIDTH'				=> 'العرض الأقصى للصورة',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'أقصى عرض للصور أو الفلاشات التي يدرجها المستخدم في توقيعه ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_LENGTH'				=> 'أقصى طول للتوقيع',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'الحد الأقصى للحروف المستخدمة بالتوقيع',
	'MAX_SIG_SMILIES'				=> 'أقصى حد للابتسامات',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'الحد الأقصى للابتسامات في مشاركة الأعضاء',
	'MAX_SIG_URLS'					=> 'أقصى حد للوصلات',
	'MAX_SIG_URLS_EXPLAIN'			=> 'أقصى حد للوصلات التي يمكن للمستخدم إضافتها في التوقيع. القيمة صفر 0 تعنى لا نهائي',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'هنا يمكنك تعريف إعدادات ومتعلقات التسجيل والملف الشخصي',

	'ACC_ACTIVATION'				=> 'تفعيل الحساب',
	'ACC_ACTIVATION_EXPLAIN'		=> 'هنا تحدد إذا كان المشاركة يستطيع أن يشارك بالمنتدى فور التسجيل أو يتطلب من المدير الموافقة على تسجيله قبل مشاركته أو أن تبعث رسالة إلى بريد المشترك مع وصلة تفعيل للتأكد من صحة البريد أو تعطيل التسجيل كلياً. <em>يجب تفعيل خاصية المراسلة عن طريق المنتدى لاستخدام التفعيل عن الطريق العضو أو المدير</em>.',
	'ACC_ACTIVATION_WARNING'		=> 'يرجى ملاحظة أن الطريقة المحددة حالياً للتفعيل تتطلب تفعيل المراسلات، غير ذلك سيتم تعطيل التسجيل. ننصح إما باختيار طريقة مختلفة للتفعيل أو إعادة تفعيل المراسلات البريدية.',
	'NEW_MEMBER_POST_LIMIT'			=> 'تحديد عدد مشاركة العضو الجديد',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'الأعضاء المُسجلين الجُدد سيكونوا ضمن مجموعة <em>الأعضاء المسجلين الجًدد</em> حتى يصل عدد مشاركاتهم إلى هذا العدد. تستطيع استخدام هذه المجموعة لاستبعادهم من استخدام الرسائل الخاصة أو مُراجعة نشاط مشاركاتهم. <strong>القيمة صفر ستعطل هذه الخاصية.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'ضبط مجموعة الأعضاء المسجلين الجًدد إلى الإعدادات الإفتراضية',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'إذا اخترت "نعم" وتحديد عدد مشاركات العضو الجديد، سيضاف الأعضاء المُسجلين الجُدد إلى مجموعة <em>الأعضاء المسجلين الجًدد</em> وستكون هذه المجموعة هي المجموعة الافتراضية لهم. وعند تحديد رُتبة أو صورة شخصية إفتراضية مُخصصة لهذه المجموعة، سيتم ضبطها إفتراضياً على أعضاء هذه المجموعة.',

	'ACC_ADMIN'					=> 'بواسطة مدير',
	'ACC_DISABLE'				=> 'تعطيل التسجيل',
	'ACC_NONE'					=> 'بدون تفعيل (المشاركة الفورية)',
	'ACC_USER'					=> 'بواسطة العضو (عن طريق البريد)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'السماح باستخدام البريد أكثر من مرة',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'أكثر من مستخدم يمكنهم استخدام بريد واحد',
	'COPPA'						=> 'القاصرين (COPPA)',
	'COPPA_FAX'					=> 'رقم فاكس القاصرين',
	'COPPA_MAIL'				=> 'عنوان بريد القاصرين',
	'COPPA_MAIL_EXPLAIN'		=> 'هذا هو العنوان الذي سيبعث ولي أمر القاصر (أقل من 13 سنة) رسالة الموافقة لمشاركة القاصر بالمنتدى',
	'ENABLE_COPPA'				=> 'تفعيل نظام القاصر',
	'ENABLE_COPPA_EXPLAIN'		=> 'تفعيل نظام القاصر يطلب من المستخدم التعريف بأن عمره أكبر من 13 سنة إذا كان عمر المستخدم أقل من 13 سنة يتطلب حسب القانون الأمريكي للقاصرين أن يوافق ولي الأمر على مشاركة القاصر. عند تعطيل هذه الخاصية لن يطلب من المستخدم التعريف بعمره وستتجاوز هذه المرحلة بالتسجيل',
	'MAX_CHARS'					=> 'أقصى',
	'MIN_CHARS'					=> 'أقل',
	'NO_AUTH_PLUGIN'			=> 'لم يتم العثور على إضافات مناسبة',
	'PASSWORD_LENGTH'			=> 'طول كلمة المرور',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'أقصى وأدنى عدد للحروف في كلمة المرور',
	'REG_LIMIT'					=> 'عدد محاولات تسجيل الدخول',
	'REG_LIMIT_EXPLAIN'			=> 'المحاولات التي يقدم عليها المستخدم لتسجيل الدخول بعد مشاهدة الصورة الرمزية',
	'USERNAME_ALPHA_ONLY'		=> 'أرقام وحروف فقط',
	'USERNAME_ALPHA_SPACERS'	=> 'أرقام وحروف ومسافة',
	'USERNAME_ASCII'			=> 'ASCII (بدون ترميزات دولية)',
	'USERNAME_LETTER_NUM'		=> 'أي حروف أو أرقام',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'أي حروف أو أرقام أو مساحات',
	'USERNAME_CHARS'			=> 'تحديد عدد حروف اسم المستخدم',
	'USERNAME_CHARS_ANY'		=> 'بدون تحديد',
	'USERNAME_CHARS_EXPLAIN'	=> 'حدد الحروف الممنوعة من الاستخدام اكتب space لمنع المسافة أو الأحرف الآتية أو أي أحرف تريد المسافات هي: space، -، +، _، [،]',
	'USERNAME_LENGTH'			=> 'طول اسم المستخدم',
	'USERNAME_LENGTH_EXPLAIN'	=> 'الحد الأقصى والأدنى للحروف المستخدمة في اسم المستخدم',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'إدارة الإعدادات العامة لتغذية البيانات',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'هذا الموديل يجعل تغذية ATOM متوفرة وكثيرة، ويعرب أي BBCode في المشاركات لجعلها قابلة للقراءة للتغذيات الخارجية.',

	'ACP_FEED_GENERAL'					=> 'الإعدادت العامة',
	'ACP_FEED_POST_BASED'				=> 'إعدادات التغذية للردود',
	'ACP_FEED_TOPIC_BASED'				=> 'إعدادات التغذية للمواضيع',
	'ACP_FEED_SETTINGS_OTHER'			=> 'إعدادات التغذية الأخرى',

	'ACP_FEED_ENABLE'					=> 'تفعيل تغذية البيانات',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'تفعيل أو تعطيل تغذية ATOM لكُل المنتدى.<br />تعطيل هذه الخاصية لكُل التغذية، لايؤخذ في الاعتبار ضبط الخيارات أدناه.',
	'ACP_FEED_LIMIT'					=> 'عدد العناصر',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'العدد الأقصى لعناصر تغذية البيانات لعرضها.',

	'ACP_FEED_OVERALL'					=> 'تمكين التغذية للمنتدى بشكل شامل',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'تمكين التغذية للمواضيع الجديدة بشكل شامل',
	'ACP_FEED_FORUM'					=> 'تفعيل تغذية البيانات لكل منتدى',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'المشاركات الجديدة لمنتدى واحد.',
	'ACP_FEED_TOPIC'					=> 'تفعيل تغذية البيانات لكل موضوع',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'المشاركات الجديدة لموضوع واحد.',

	'ACP_FEED_TOPICS_NEW'				=> 'تمكين تغذية المواضيع الجديدة',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'تمكين تغذية " المواضيع الجديدة " سيظهر آخر المواضيع الجديدة بالإضافة لأول مشاركة من الموضوع',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'تمكين تغذية المواضيع النشطة',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'تمكين تغذية " المواضيع النشطة " سيظهر آخر المواضيع النشطة بالإضافة لآخر الردود',
	'ACP_FEED_NEWS'						=> 'أخبار تغذية البيانات',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'استدعي المشاركة الأولى من هذه المنتديات. اختار " لا منتديات " لتعطيل خاصية التغذية الأخبارية. <br /> لتحديد أكثر من منتدى، إضغط باستمرار مُفتاح <samp>CTRL</samp> والنقر على المنتديات المطلوبة.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'تفعيل تغذية البيانات لجميع المنتديات',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'هذه التغذية تُظهر أحدث المُشاركات لمواضيع المنتديات جميعها .',

	'ACP_FEED_HTTP_AUTH'				=> 'تمكين مصادقة HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'تمكين المصادقة بواسطة HTTP، سيمكن المستخدمين من استقبال محتوى هو مخفي عن الزوار بإضافة <samp>auth=http</samp> على رابط التغذية. من فضلك لاحظ أن بعض اعدادت PHP مطلوبة على ملف .htaccess. يمكن معرفة المزيد من خلال الاطلاع على الملف .',
	'ACP_FEED_ITEM_STATISTICS'			=> 'إحصائيات العنصر',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'إظهر الإحصائيات المُحددة أسفل عناصر التغذية <br />( بواسطة، وقت وتاريخ، الردود، المشاهدات )',
	'ACP_FEED_EXCLUDE_ID'				=> 'استبعاد هذه المنتديات',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'المُحتوى من هذه <strong> لن تظهر في التغذية</strong>. اختار " لا منتديات " لاستدعاء البيانات من المنتديات جميعها. <br /> لتحديد/عدم تحديد أكثر من منتدى، إضغط باستمرار مُفتاح <samp>CTRL</samp> والنقر على المنتديات المطلوبة.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'عند تسجيل المستخدم يقوم نظام الكابتشا بعرض صورة فيها نصوص يصعب على الحاسب قراءتها ولكن يسهل للبشر قراءتها. هذه العملية مقدمة للتأكد من أن المسجل هو إنسان وليس برنامج إزعاج يقوم بعمليات تسجيل كثيرة',
	'ACP_VC_EXT_GET_MORE'					=> 'للمزيد (وربما أفضل) من إضافات منع السبام، قم بزيارة <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>قاعدة بيانات إضافات phpBB.com</strong></a>. للمزيد من المعلومات حول الحماية من السبام على منتداك، قم بزيارة <a href="https://www.phpbb.com/go/anti-spam"><strong>قاعدة معلومات phpBB.com</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'إضافات مُتوفرة',
	'CAPTCHA_UNAVAILABLE'					=> 'لا يمكن اختيار الكابتشا، فمتطلباته لا تتوافق.',
	'CAPTCHA_GD'							=> 'كابتشا GD',
	'CAPTCHA_GD_3D'							=> 'كابتشا GD ثلاثي الأبعاد',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA درجة الإزعاج الأمامية',
	'CAPTCHA_GD_EXPLAIN'					=> 'استعمل (CAPTCHA) لتحسين نظام (GD) للتاكد',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'الإزعاج الأمامي يصعب عملية القراءة على برامج التسجيل المزعجة',
	'CAPTCHA_GD_X_GRID'						=> 'الإزعاج في خط العرض لنظام GD CAPTCHA',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'استعمل قيمة أقل لتصعيب العملية. القيمة صفر تعطل عملية الإزعاج في خط العرض',
	'CAPTCHA_GD_Y_GRID'						=> 'الإزعاج في خط الطول GD CAPTCHA',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'استعمل قيمة أقل لتصعيب العملية. القيمة صفر تعطل عملية الإزعاج في خط الطول',
	'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA تشويش الخطوط',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'تطبيق درجة التشويش على الـ CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'اضافة كائن ثلاثي الابعاد',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'يضيف هذا الخيار كائن ثلاثي الابعاد الخاص بالـ CAPTCHA وذلك فوق الحروف',
	'CAPTCHA_GD_FONTS'						=> 'استخدام خط آخر',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'هذا الخيار سيسمح لك بالتحكم في عدد أشكال الحروف المستخدمة، يمكنك اختيار الشكل الافتراضي أو إدخال تغير على ذلك، الحروف الصغيره مسموحة ايضاً',
	'CAPTCHA_FONT_DEFAULT'					=> 'افتراضي',
	'CAPTCHA_FONT_NEW'						=> 'شكل جديد',
	'CAPTCHA_FONT_LOWER'					=> 'ايضاً حروف صغيرة',
	'CAPTCHA_NO_GD'							=> 'كابتشا بدون GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'لم تحفَظ إعدادتك، هذه فقط معاينة، بعد الحصول على حالة مقبولة تأكد من حفظ الإعدادات',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHA كما ستظهر باستعمال هذه الإعدادت الحالية اضغط على زر المعاينة لتحديث الصورة. انتبه إلى أن الصورة تتغير عند كل معاينة',

	'CAPTCHA_SELECT'						=> 'تثبيت إضافات نظام الكابتشا CAPTCHA',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'القائمة المُنسدلة تحتوي على إضافات الكابتشا CAPTCHA المُعرفة بواسطة المنتدى. المداخل باللون الرمادي غير متوفرة حالياً وبحاجة إلى تهئية قبل الإستخدام.',
	'CAPTCHA_CONFIGURE'						=> 'تهيئة نظام الكابتشا CAPTCHA',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'تغيير الإعدادت لنظام الكابتشا CAPTCHA المُحددة.',
	'CONFIGURE'								=> 'تهئية وإعداد',
	'CAPTCHA_NO_OPTIONS'					=> 'لا يملك هذا الكابتشا CAPTCHA خيارات التهيئة.',

	'VISUAL_CONFIRM_POST'					=> 'تفعيل خاصية CAPTCHA لمشاركات الزوار',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'إذا سمحت للأعضاء الغير مسجلين (الزوار) بالمشاركة سيتطلب منهم كتابة رمز أمني عند تقديم مشاركة',
	'VISUAL_CONFIRM_REG'					=> 'تقعيل خاصية CAPTCHA في التسجيل',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'يطلب من المسجلين الجدد كتابة الرمز الأمني من CAPTCHA لتجنب التسجيل الآلي المتكرر',
	'VISUAL_CONFIRM_REFRESH'				=> 'السماح للمستخدمين بتحديث صورة التأكيد البصري',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'السماح للمستخدمين بطلب صورة تأكيد بصرية جديده، ذلك عند عدم قدرتهم على حل أو قراءة الحروف/الرموز داخل الصورة',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'التفاصيل هنا تعرف المعلومات التي تستعمل لإرسال الكوكيز إلى متصفح المستخدم. في معظم الأوقات الإعدادت الحالية تفي بالغرض. لكن إذا أردت أن تقوم بتعديلات اعملها بحذر. الإعدادت الخاطئة قد تمنع المستخدمين من تسجيل الدخول',

	'COOKIE_DOMAIN'				=> 'نطاق الملفات المؤقته',
	'COOKIE_DOMAIN_EXPLAIN'		=> 'In most cases the cookie domain is optional. Leave it blank if you are unsure.<br /><br /> In the case where you have a board integrated with other software or have multiple domains, then to determine the cookie domain you need to do the following. If you have something like <i>example.com</i> and <i>forums.example.com</i>, or perhaps <i>forums.example.com</i> and <i>blog.example.com</i>. Remove the subdomains until you find the common domain, <i>example.com</i>. Now add a dot in front of the common domain and you would enter .example.com (note the dot at the beginning).',
	'COOKIE_NAME'				=> 'اسم الملفات المؤقتة',
	'COOKIE_NAME_EXPLAIN'		=> 'This can be anything what you want, make it original. Whenever the cookie settings are changed the name of the cookie should be changed.',
	'COOKIE_NOTICE'				=> 'Cookie notice',
	'COOKIE_NOTICE_EXPLAIN'		=> 'If enabled a cookie notice will be displayed to users when visiting your board. This might be required by law depending on the content of your board and enabled extensions.',
	'COOKIE_PATH'				=> 'مسار الملفات المؤقته',
	'COOKIE_PATH_EXPLAIN'		=> 'Note that this is always a slash, it does not matter what your board URL is.',
	'COOKIE_SECURE'				=> 'ملفات مؤقته آمنة',
	'COOKIE_SECURE_EXPLAIN'		=> 'إذا كان خادم الموقع لديك يعمل في الوضع الآمن حوّل هذا الخيار إلى فعال وإلا عطل هذا الخيار. إذا قمت بتفعيل هذا الخيار بدون وجود الوضع الآمن ssl سيسبب لك مشاكل عند التحويلات',
	'ONLINE_LENGTH'				=> 'عرض فترة البقاء في الخط',
	'ONLINE_LENGTH_EXPLAIN'		=> 'عدد الدقائق التي تمسح الأعضاء من قائمة "من على الخط" بعد انعدام فعاليته بالمنتدى.  إذا كان الرقم أكبر سيكثر عدد الموجودين في قائمة المنتدى',
	'SESSION_LENGTH'			=> 'طول الجلسة',
	'SESSION_LENGTH_EXPLAIN'	=> 'بعد أن يسجل المستخدم تسجيل الدخول وتبدأ الجلسة ستنتهي الجلسة بعد هذا الوقت المحدد',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'من هنا يمكنك تفعيل وتعطيل صفحة اتصل بنا وأيضاً إضافة نص ليظهر في الصفحة.',

	'CONTACT_US_ENABLE'				=> 'تفعيل صفحة اتصل بنا',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'هذه الصفحة تسمح للمستخدمين بمراسلة الإدارة عن طريق البريد',

	'CONTACT_US_INFO'				=> 'معلومات التواصل',
	'CONTACT_US_INFO_EXPLAIN'		=> 'الرسالة ستعرض في صفحة اتصل بنا',
	'CONTACT_US_INFO_PREVIEW'		=> 'استعراض - معلومات صفحة اتصل بنا',
	'CONTACT_US_INFO_UPDATED'		=> 'تم تحديث معلومات صفحة اتصل بنا.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'هنا تستطيع تعطيل أو تفعيل بعض أعمال المنتدى لتقليل الحمل على قاعدة البيانات. في أكثر خوادم المواقع لا تحتاج إلى تعطيل أي خاصية. لكن في الاستضافة المشتركة أو خوادم الشبكة الضعيفة قد يؤدي تعطيل بعض الخصائص إلى تخفيف الحمل على المنتدى. تستطيع أيضا تحديد قدرة الحمل على المنتدى وجلسات الاتصال الفعالة بحيث يتعطل المنتدى عند وصول الحمل إلى مستوى معين',

	'ALLOW_CDN'						=> 'السماح باستخدام شبكات توفير محتوى لأطراف ثالثة',
	'ALLOW_CDN_EXPLAIN'				=> 'إذا تم تفعيل هذا الخيار، بعض الملفات سيتم توفيرها من خوادم خارجية لأطراف ثالثة بدلاً من الخادم الخاص بك. هذا سيقلل من كمية نقل البيانات الخاصة بخادمك، لكن قد يمثل مشاكل في الخصوصية لبعض مدراء المنتديات. في نسخة phpBB الافتراضية، هذا يشمل تحميل مكتبات “jQuery” وخط “Open Sans” من شبكة تقديم المحتوى الخاصة بـ Google.',
	'ALLOW_LIVE_SEARCHES'			=> 'السماح بالبحث الذكي',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'إذا تم تفعيل هذه الخاصية، سيتم توفير اقتراحات خاصة للمستخدمين أثناء كتابتهم في خانات البحث في المنتدى.',
	'CUSTOM_PROFILE_FIELDS'			=> 'حقل الملف الشخصي المخصص',
	'LIMIT_LOAD'					=> 'تحديد حمل النظام',
	'LIMIT_LOAD_EXPLAIN'			=> 'إذا كان حمل النظام في معدل الدقيقة الواحدة تجاوز هذه القيمة فسيتعطل تلقائياً المنتدى. القيمة 1.0 تساوي تقريبا مائة بالمئة من استعمال معالج جهاز الحاسب المستضيف. هذا فقط يعمل على أنظمة تعمل على Linux وحالة الحصول على هذه المعلومات ممكنة. تعاد القيمة إلى صفر إذا لم يتمكن المنتدى حجم الحمل',
	'LIMIT_SESSIONS'				=> 'تحدد الجلسات',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'إذا تجاوزت عدد الجلسات في خلال دقيقة واحدة سيتم إيقاف المنتدى تلقائياً. ضع القيمة 0 لتعطيل هذه الخاصية',
	'LOAD_CPF_MEMBERLIST'			=> 'اسمح للتنسيقات بعرض الحقول الإضافية في قائمة الأعضاء',
	'LOAD_CPF_PM'					=> 'اعرض الحقول الإضافية في الرسائل الخاصة',
	'LOAD_CPF_VIEWPROFILE'			=> 'اعرض الحقول الأضافية في ملف المستخدم',
	'LOAD_CPF_VIEWTOPIC'			=> 'عرض الحقول الأضافية في صفحة المواضيع',
	'LOAD_USER_ACTIVITY'			=> 'عرض تحركات المستخدم',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'عرض تحركات المستخدم في المشاركات وأقسام المنتديات. يفضل تعطيل هذه الخاصية إذا تجاوز عدد المواضيع المليون موضوع',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'User’s activity post limit',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'The active topic/forum won’t be shown for users having more than this number of posts. Set to 0 to disable the limit.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'انتهاء الإشعارات المقروءة',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'عدد الأيام المنقضية قبل أن يتم حذف الإشعارات المقروءة تلقائياً. قم بجعلها 0 لجعل الإشعارات دائمة.',
	'RECOMPILE_STYLES'				=> 'إعادة تكوين مواد التنسيقات المصغرة',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'افحص التحديثات في التنسيقات وأعِد التكوين',
	'YES_ANON_READ_MARKING'			=> 'تفعيل تعليم المواضيع للزوار',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'تخزن معلومات حالة الزوار القراءة/عدم القراءة. إذا تعطلت فإن حالة الزوار دوماً ستكون بالقراءة',
	'YES_BIRTHDAYS'					=> 'تفعيل اعياد الميلاد',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'إذا عطلت هذا الخيار فسيتوقف عرض لائحة عيد الميلاد. ليعمل هذا الخيار جيداً ينبغي أن تكون خاصية عيد الميلاد مفعلة ايضاً',
	'YES_JUMPBOX'					=> 'تفعيل عرض صندوق التنقل السريع',
	'YES_MODERATORS'				=> 'تفعيل عرض المشرفين',
	'YES_ONLINE'					=> 'تفعيل خاصية من على الخط',
	'YES_ONLINE_EXPLAIN'			=> 'عرض معلومات وجود الأعضاء على صفحة البداية والمنتديات وقائمة المواضيع',
	'YES_ONLINE_GUESTS'				=> 'عرض معلومات اتصال الزوار',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'عرض معلومات الزوار في صفحة من على الخط',
	'YES_ONLINE_TRACK'				=> 'تفعيل خاصية إذا كان العضو متصلا أم لا',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'عرض معلومات الاتصال للمستخدم في الصفحة الشخصية وفي صفحة المواضيع',
	'YES_POST_MARKING'				=> 'تفعيل المواضيع المحددة',
	'YES_POST_MARKING_EXPLAIN'		=> 'تبيين هل شارك العضو بالموضوع',
	'YES_READ_MARKING'				=> 'تفعيل تعليم المواضيع في السيرفر',
	'YES_READ_MARKING_EXPLAIN'		=> 'تخزين قراءة وإزالة معلومات الحالة في قاعدة البيانات المنتدى بدل وضعها في كوكيز في متصفح المستخدم',
	'YES_UNREAD_SEARCH'				=> 'تمكين البحث في المواضيع التي لم يتم قرأتها',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'منتديات phpBB تدعم إضافات وفروع التوثيق. هذه تسمح لك بتحديد طريقة توثيق المستخدمين عند تسجيل دخولهم للمنتدى. افتراضيا هناك ثلاثة إضافات متوفرة. والتي هي DB و LDAP و Apache. ليست كل طرق التوثيق تتطلب منك معلومات إضافية فقط عبّئ الحقول إذا كانت ذات صلة بالطريقة المتبعة',

	'AUTH_METHOD'				=> 'اختر طريقة التوثيق',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'المفتاح والسر الخاصة بكل مقدم خدمة OAuth كليهما يجب أن يتم توفيرهما. لقد تم توفير أحدهما فقط لمقدم خدمة OAuth.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'كل مقدم خدمة OAuth يتطلب سر ومفتاح فريدين لتتم المصادقة مع الخادم الخارجي.<br />هذان من المفترض أن يتم توفيرهما عن طريق مقدم خدمة OAuth عند قيامك بتسجيل موقعك لديهم ويجب أن يتم إدخالهما تماماً كما استلمتهما.<br />أي خدمة لا تحتوي على كلا المفتاح والسر سوياً لن تكون متاحة للاستخدام من مشتركي المنتدى.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'المفتاح',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'السر',

	'APACHE_SETUP_BEFORE_USE'	=> 'عليك أن تعدّ توثيق Apache قبل أن تحول توثيق المنتدى إلى نظام توثيق Apache. ضع في عين الاعتبار أن اسم المستخدم لتوثيق Apache هو نفس اسم المستخدم  المستعمل في المنتدى يمكنك استخدام Apache فقط عند تعطيل mod_php، safe_mode',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP أساس <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'هذا الاسم المميز، تحديد معلومات المستخدم مثال <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'صفة بريد LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'حدد هذا لصفات اسم بريد مستخدميك (إذا كان هنا واحد أصلاً) لكي يتعيّن عنوان البريد تلقائياً للمستخدمين الجدد. إذا تركت هذا فارغاً سيُترك البريد فارغ للمستخدمين الذين يسجلون الدخول للمرة الأولى',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'الاندماج مع سيرفر LDAP فشل من اسم وكلمة المرور المعطاه',
	'LDAP_NO_EMAIL'					=> 'صفات البريد المحددة غير موجودة',
	'LDAP_NO_IDENTITY'				=> 'لم نستطع إيجاد هوية تسجيل لـ %s',
	'LDAP_PASSWORD'					=> 'كلمة مرور LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'اتركها فارغة للسماح بالدخول المجهول وإلا فاكتب كلمة المرور للمستخدم. <em><strong>تحذير</strong>: كلمة المرور ستحفظ بقاعدة البيانات بدون تشفير. أي شخص يمكنه الاطلاع على قاعدة البيانات يستطيع معرفة كلمة المرور.</em>',
	'LDAP_PORT'						=> 'منفذ خادم LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'اختيارياً تستطيع تحديد منفذ الذي سيستعمل للإتصال بـخادم LDAP بدلاً عن المنفذ الإفتراضي  389',
	'LDAP_SERVER'					=> 'اسم خادم LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'إذا استخدمت LDAP اكتب اسم أو رقم IP الخادم',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'هذا هو المفتاح المستعمل للبحث عن هوية أي تسجيل مثال<var>uid</var>، <var>sn</var>، etc',
	'LDAP_USER'						=> 'مستخدم LDAP',
	'LDAP_USER_EXPLAIN'				=> 'اتركها فارغة للسماح بالدخول المجهول.إذا عُبِـّأت سيقوم المنتدى بالاتصال بخادم الـ LDAP بالاسم المحدد',
	'LDAP_USER_FILTER'				=> 'فلتر اعضاء LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'اختيارياً تستطيع أن تحّد من الكائنات المبحوث عنها بواسطة مرشحات اضافيه. مثلاً: <samp>objectClass=posixGroup</samp> سوف يكون الناتج عن استخدام <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'هنا يمكنك وضع إعدادت الخادم والنطاق. الرجاء التأكد من أن المعلومات المعطاه صحيحة، الأخطاء ستنتج رسائل بريدية تحتوى على معلومات خاطئة. تذكر عندما تضع عنوان الموقع لا تسبقه بـ(http) وأيضا تعديل المنفذ - (port) إذا كنت تستعمل منفذ غير المنفذ 80. 80 هو الرقم الأصح في الغالب',

	'ENABLE_GZIP'				=> 'تفعيل ضغط GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'المواد المرسلة ستضغط قبل إرسالها إلى المستخدم. هذا سيقلل من حجم المعلمات المرسلة لكن سيزيد العباء على جهاز الموقع وجهاز المستخدم عند فك الضغط',
	'FORCE_SERVER_VARS'			=> 'فرض إعدادت وصلة المنتدى',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'إذا كان الخيار نعم إعدادت الخادم (السيرفر) المستخدمة هنا ستستعمل عوضاً عن الخيارات المحددة تلقائياً',
	'ICONS_PATH'				=> 'ضع مسار تخزين الصور الرمزية',
	'ICONS_PATH_EXPLAIN'		=> 'مسار تحت مجلد المنتدى مثال <samp>images/icons</samp>',
	'MOD_REWRITE_ENABLE'		=> 'تفعيل تغيير الراوبط',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'عند التفعيل، الروابط التي تحتوي على ’app.php’ سيتم تغييرها لإزالة اسم الملف (مثال app.php/foo ستصبح /foo). <strong>موديول mod_rewrite الخاص بخادم Apache مطلوب لتعمل هذه الميزة؛ إذا تم تفعيل هذا الخيار بدون أن يدعم خادمك موديول mod_rewrite، فقد تتعطل الروابط في المنتدى.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'موديول <strong>mod_rewrite</strong> على خادم Apache الخاص بك معطل. قم بتفعيل الموديول أو اتصل بمقدم خدمة الاستضافة إذا أردت تفعيل هذا الخيار.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'لا يمكن تحديد إذا ما كان خادمك يدعم ميزة تغيير الروابط أم لا. قد يتم تفعيل هذا الخيار لكن إذا كانت ميزة تغيير الروابط غير مدعومة، فإن المسارات التي ينتجها المنتدى (لاستخدامها في الروابط مثلاً) قد تصبح معطلة. قم بالاتصال بمقدم خدمة الاستضافة إذا لم تكن متأكداً إن كان بإمكانك تفعيل هذه الميزة بأمان.',
	'PATH_SETTINGS'				=> 'إعدادت المسار',
	'RANKS_PATH'				=> 'مسار تخزين صور الرتب',
	'RANKS_PATH_EXPLAIN'		=> 'مسار تحت مجلد المنتدى مثال <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'مسار الشفرات',
	'SCRIPT_PATH_EXPLAIN'		=> 'مسار موقع المنتدى مثال <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'اسم النطاق',
	'SERVER_NAME_EXPLAIN'		=> 'النطاق الذي يشير إلى المنتدى (مثلا: <samp>www.phpbb.com</samp>)',
	'SERVER_PORT'				=> 'منفذ الخادم',
	'SERVER_PORT_EXPLAIN'		=> 'المنفذ الذي يعمل منه خادمك على الانترنت، في الغالب يكون 80، غيره فقط إذا علمت أنه غير 80',
	'SERVER_PROTOCOL'			=> 'بروتوكول الخادم',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'سيستخدم بروتوكول الخادم إذا تم فرض هذه الإعدادت. إذا كان فارغا سيتحدد البروتوكل عن طريق إعدادت الكوكيز الآمنة(<samp>http://</samp> or <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'إعدادت مسار الخادم',
	'SMILIES_PATH'				=> 'مسار تخزين الابتسامات',
	'SMILIES_PATH_EXPLAIN'		=> 'مسار تحت مجلد المنتدى مثال <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'مسار تخزين صور امتدادت الملفات',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/upload_icons</samp>',
	'USE_SYSTEM_CRON'		=> 'تنفيذ مهمات دورية من ملف النظام cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'عندما تكون معطلة، المنتدى سيقوم بتجهيز مهمات دورية ليتم تنفذيها آلياً. عندما تكون مفعلة، المنتدى لن يقوم بوضع أي مهام على جدوله تلقائياً؛ مدير المنتدى يجب أن يقوم بتجهيز المهام لتنفيذها عن طريق <code>cron.php</code> ليتم تنفذيها على فترات زمنية منتظمة (مثلاً كل 5 دقائق).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'هناك يمكنك تعريف الجلسات وإعدادت تسجيل الدخول',

	'ALL'							=> 'الكل',
	'ALLOW_AUTOLOGIN'				=> 'السماح بالدخول التلقائي',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'حدد إذا أمكن الدخول التلقائي للمستخدمين',
	'ALLOW_PASSWORD_RESET'			=> 'السماح باستعادة كلمة المرور ("نسيت كلمة المرور")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'تحديد إذا ما كان يمكن للمستخدمين استخدام رابط "نسيت كلمة المرور" في صفحة تسجيل الدخول لاستعادة حساباتهم. إذا كنت تستخدم وسيلة تعريف خارجية قد تود تعطيل هذه الميزة.',
	'AUTOLOGIN_LENGTH'				=> 'تاريخ انتهاء الدخول التلقائي بالأيام',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'الأيام التي يستمر فيها الدخول التلقائي. ضع القيمة 0 للتعطيل',
	'BROWSER_VALID'					=> 'التأكد من المتصفح',
	'BROWSER_VALID_EXPLAIN'			=> 'التأكد من المتصفح لكل جلسة يزيد من درجة الأمان',
	'CHECK_DNSBL'					=> 'افحص رقم الآي بي ضمن القائمة السوداء',
	'CHECK_DNSBL_EXPLAIN'			=> 'إذا تفعلت هذه الخاصية سيتم فحص IP المستخدم ضمن القائمة السوداء في التسجيل وفي المشاركة. قد يأخذ هذا البحث بعض الوقت إذا شعرت بحالة بطء في المنتدى يفضل تعطيل هذه الخاصية',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'التأكد من MX البريد',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'إذا تفعلت هذه الخاصية سيكون التأكد فعلياً من وجود هذا البريد في قائمة خوادم  MX',
	'FORCE_PASS_CHANGE'				=> 'فرض تغيير كلمة المرور',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'يفرض على المستخدم تغيير كلمة المرور بعد عدد معين من الأيام. لتعطيل هذه الخاصية ضع القيمة 0',
	'FORM_TIME_MAX'					=> 'أقصى وقت لإرسال النموذج',
	'FORM_TIME_MAX_EXPLAIN'			=> 'الوقت الذي يستغرقه المستخدم لإرسال الفورم. استخدم -1 للتعطيل. علماً أنه يمكن تعطيل الإرسال إذا انتهت فترة الجلسة. بغض النظر عن هذا الإعداد',
	'FORM_SID_GUESTS'				=> 'مفتاح حمايه للنماذج في جلسة الزائر',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'لو فعلت هذه فإن مفتاح الحماية للنموذج الخاص بالزائر سوف يكون خاصا فقط للزائر نفسه. مما قد تسبب مشاكل مع بعض مقدمي خدمات الاتصالات',
	'FORWARDED_FOR_VALID'			=> 'التأكد من رئاسة <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'ستستمر الجلسة للمستخدم فقط إذا كانت قيمة الـ <var>X_FORWARDED_FOR</var> نفس القيمة السابقة وليست قيمة أخرى',
	'IP_VALID'						=> 'تصديق جلسة IP',
	'IP_VALID_EXPLAIN'				=> 'تحديد عدد خانات IP التي تستخدم في تصديق الجلسة إما الجزء الأول والثاني A.B أو الكل A.B.C أو تعطيل الخاصية None',
	'IP_LOGIN_LIMIT_MAX'			=> 'أقصى عدد من محاولات الدخول للـ IP الواحد',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'أقصى عدد من محاولات تسجيل الدخول المتاحة لنفس الـ IP قبل أن يطلب من المستخدم وضع رمز أمني ضد السبام. ضع القيمة 0 لجعل عدد محاولات التسجيل غير محدودة.',
	'IP_LOGIN_LIMIT_TIME'			=> 'وقت انتهاء محاولة تسجيل دخول الـ IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'محاولة تسجيل الدخول تنتهي بعد هذا الوقت.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'تحديد تسجيل الدخول باستخدام قيمة <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'بدلا من تحديد محاولات تسجيل الدخول باستخدام الـ IP يتم تحديدها باستخدام قيم <var>X_FORWARDED_FOR</var>. <br /><em><strong>تحذير:</strong> قم بتشغيل هذه الخاصية فقط إذا كنت تعمل على سيرفر يستخدم بروكسي يحدد قيم <var>X_FORWARDED_FOR</var> لقيم موثوقة.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'عدد محاولات تسجيل الدخول',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'بعد هذا العدد من محاولات الدخول سيطلب من المستخدم وضع الرمز الأمني بجانب اسم المستخدم وكلمة المرور',
	'NO_IP_VALIDATION'				=> 'لا يوجد',
	'NO_REF_VALIDATION'				=> 'بدون',
	'PASSWORD_TYPE'					=> 'صعوبة كلمة المرور',
	'PASSWORD_TYPE_EXPLAIN'			=> 'تحديد صعوبة كلمة المرور إذا أنشئت أو عدلت. بما في ذلك التغير إلى كلمة المرور السابقة',
	'PASS_TYPE_ALPHA'				=> 'عليها أن تحتوي على حروف وأرقام',
	'PASS_TYPE_ANY'					=> 'لا توجد متطلبات',
	'PASS_TYPE_CASE'				=> 'عليها أن تحتوي على حروف صغرى وكبرى',
	'PASS_TYPE_SYMBOL'				=> 'عليها أن تحتوي على رموز مثل: *$#',
	'REF_HOST'						=> 'خادم صالح فقط',
	'REF_PATH'						=> 'مسار مقبول',
	'REFERRER_VALID'				=> 'التحقق من المرجع',
	'REFERRER_VALID_EXPLAIN'		=> 'إذا تم تفعيلها، فإن مرجع طلبات المشاركة سيتم التحقق منه في مقابل مسار إعدادات المضيف/السكربت. هذا قد يسبب مشاكل في المنتديات التي تستعمل أكثر من اسم دومين أو طرق تسجيل دخول خارجية.',
	'TPL_ALLOW_PHP'					=> 'السماح بشفرات php في التنسيقات',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'إذا تفعّل هذه الخاصية شفرة php سينظر إليها وستشغَل كلغة برمجة. إذا فعلت هذا الخيار واستعملت تنسيقا آخر تأكد من مصداقية مصمم التنسيق لكن إذا عطلت هذه الخاصية فلن يضر استعمال التنسيق',
	'UPLOAD_CERT_VALID'				=> 'Validate upload certificate',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'If enabled, certificates of remote uploads will be validated. This requires the CA bundle to be defined by the <samp>openssl.cafile</samp> or <samp>curl.cainfo</samp> setting in your php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'هذه المعلومات تستخدم عندما يرسل المنتدى بريد للمستخدمين. الرجاء التأكد من أن البريد الذي تضعه يعمل. أي رسالة لا تصل إلى صاحبها سترد إلى البريد المسجل هنا. إذا كان مقدم خدمة الاستضافة لديك لا يقدم خدمة بريد php الإلكتروني تستطيع أن تبعث رسائل باستخدام بروتوكول SMTP. إذا طلب السيرفر منك وضع كلمة سر واسم مستخدم (فقط إذا طلب ذلك) اكتب الاسم وكلمة المرور. الرجاء ملاحظة أن مصداقية بسيطة متطلبة. المصداقيات الأخرى غير مدعومة حالياً',

	'ADMIN_EMAIL'					=> 'عنوان بريد الرد',
	'ADMIN_EMAIL_EXPLAIN'			=> 'هذا سيكون البريد الذي يستطيع المستخدمون الرد عليه عند استقبالهم الرسائل',
	'BOARD_EMAIL_FORM'				=> 'إرسال البريد للمستخدم عن طريق المنتدى',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'بدلا من عرض بريد المستخدمين في الانترنت، يمكن للمستخدمين مراسلة بعضهم إلى بريدهم الشخصي عن طريق المنتدى بدون إظهار عنوان بريد العضو حيث تكون المراسلة بدون معرفة البريد الإلكتروني',
	'BOARD_HIDE_EMAILS'				=> 'إخفاء عناوين البريد',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'هذه الخاصية تجعل البريد الإلكتروني خاص بالكامل',
	'CONTACT_EMAIL'					=> 'بريد الاتصال',
	'CONTACT_EMAIL_EXPLAIN'			=> 'بريد الاتصال هذا سيستعمل في أي حالة تحتاج إلى اتصال مثل التبليغ عن خطأ أو عن حالة خاصة بالمنتدى',
	'CONTACT_EMAIL_NAME'			=> 'اسم الاتصال',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'هذا هو الاسم الذي سيراه مستقبلي البريد الالكتروني. إن لم ترد أن يكون هناك اسم اتصال، فاترك هذا الحقل فارغاً.',
	'EMAIL_FUNCTION_NAME'			=> 'دالة البريد',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'أدخل دالة البريد التي تستخدم لارسال الرسائل عن طريق php',
	'EMAIL_PACKAGE_SIZE'			=> 'حجم مجموعة البريد الإلكتروني',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'هنا عدد البريد الإلكتروني التي تُراسل في حزمة واحدة',
	'EMAIL_SIG'						=> 'توقيع البريد الإلكتروني',
	'EMAIL_SIG_EXPLAIN'				=> 'هذا التوقيع سيرسل مع كل الرسائل الصادرة من المنتدى',
	'ENABLE_EMAIL'					=> 'تفعيل المراسلات البريدية',
	'ENABLE_EMAIL_EXPLAIN'			=> 'إذا تم تعطيل هذه الميزة فلن يتم إرسال رسائل بريدية عن طريق المنتدى نهائياً. <em>يرجى ملاحظة أن تفعيل عضويات المستخدمين والمدير يتطلب أن تكون هذه الميزة مفعلة. إذا قمت باختيار "المستخدم" أو "المدير" في إعدادات التسجيل، فإن تعطيل هذه الميزة سيقوم بتعطيل التسجيل.</em>',
	'SEND_TEST_EMAIL'				=> 'Send a test email',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'This will send a test email to the address defined in your account.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Allow self-signed SSL certificates',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Allow connections to SMTP server with self-signed SSL certificate.<em><strong>Warning:</strong> Allowing self-signed SSL certificates may cause security implications.</em>',
	'SMTP_AUTH_METHOD'				=> 'طريقة التصديق SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'فقط استعمل اسم المستخدم/كلمة المرور، راسل مستضيفك إذا لم تكن متأكدا من طريقة استعمالهم',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'الدخول',
	'SMTP_PASSWORD'					=> 'كلمة سر SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'ضع كلمة المرور إذا كانت مطلوبة فقط',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'منفذ خادم SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'غير المنفذ فقط إذا تأكدت أنه منفذ آخر',
	'SMTP_SERVER'					=> 'عنوان خادم SMTP',
	'SMTP_SERVER_EXPLAIN'			=> 'Note that you have to provide the protocol that your server uses. If you are using SSL, this has to be "ssl://your.mailserver.com"',
	'SMTP_SETTINGS'					=> 'إعدادات SMTP',
	'SMTP_USERNAME'					=> 'اسم المستخدم SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'ضع اسم المستخدم إذا كان مطلوباً فقط',
	'SMTP_VERIFY_PEER'				=> 'Verify SSL certificate',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Require verification of SSL certificate used by SMTP server.<em><strong>Warning:</strong> Connecting peers with unverified SSL certificates may cause security implications.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Verify SMTP peer name',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Require verification of peer name for SMTP servers using SSL / TLS connections.<em><strong>Warning:</strong> Connecting to unverified peers may cause security implications.</em>',
	'TEST_EMAIL_SENT'				=> 'The test email has been sent.<br />If you don’t receive it, please check your emails configuration.<br /><br />If you require assistance, please visit the <a href="https://www.phpbb.com/community/">phpBB support forums</a>.',

	'USE_SMTP'						=> 'استخدام خادم SMTP للبريد الإلكتروني',
	'USE_SMTP_EXPLAIN'				=> 'اختار نعم إذا أردت أو وجب عليك إرسال الرسائل عن طريق خادم غير الخادم المحلي',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'من هنا تستطيع تفعيل خاصية المراسلة الفورية وتنبيهات المنتدى بالبروتوكول Jabber، Jabber هو بروتكول مفتوح المصدر ويمكن استخدامه من اي شخص، بعض خدمات Jabber توفر منافذ أو طرق تمكنك من محادثه مستخدمين على شبكات اخرى. ليس كل الخوادم توفر منافذ خارجيه، لذا كن حذراً من تغيير البروتكول لان التغيير قد تمنع الخدمات من التشغيل. وكن متأكد من وضع معلومات حسابك المسجل، وسوف نستخدمه بالتنبيهات والمراسلة في phpbb',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Allow self-signed SSL certificates',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Allow connections to Jabber server with self-signed SSL certificate.<em><strong>Warning:</strong> Allowing self-signed SSL certificates may cause security implications.</em>',
	'JAB_ENABLE'					=> 'تفعيل خاصية Jabber',
	'JAB_ENABLE_EXPLAIN'			=> 'تفعيل خاصية Jabber للمحادثة الفورية والتنبيه',
	'JAB_GTALK_NOTE'				=> 'رجاءاً لاحظ أن GTalk لن يعمل لأن الدالة <samp>dns_get_record</samp> لا يمكن إيجادها. هذه الداله غير متوفره في نسخ PHP4  وأيضا غير مضمنة في استضافات الويندوز. وحالياً هي لاتعمل على انظمة BSD بالاضافه لنظام ماكنتوش',
	'JAB_PACKAGE_SIZE'				=> 'حجم مجموعة Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'		=> 'هذا هو عدد الرسائل المرسلة في المره الواحده، اذا وضعتها 0 سترسَل فوريا ولن تنظّم لإرسالها في وقت لاحق',
	'JAB_PASSWORD'					=> 'كلمة سر Jabber',
	'JAB_PASSWORD_EXPLAIN'			=> '<em><strong>تنويه:</strong> كلمة المرور سيتم تخزينها بدون تشفير في قاعدة البيانات وستكون ظاهره لقرأتها بشكل سهل لأصحاب الصلاحية للدخول إلى قاعدة بيانات المنتدى أو صفحة الإعدادات الخاصة بهذه الجزء</em>',
	'JAB_PORT'						=> 'منفذ Jabber',
	'JAB_PORT_EXPLAIN'				=> 'اتركها فارغة إلا إذا علمت أنه ليس منفذ 5222',
	'JAB_SERVER'					=> 'خادم Jabber',
	'JAB_SERVER_EXPLAIN'			=> 'لعرض الخوادم المتوفرة زر موقع %sjabber.org%s',
	'JAB_SETTINGS_CHANGED'			=> 'تغيرت إعدادت Jabber بنجاح',
	'JAB_USE_SSL'					=> 'استخدام SSL للاتصال',
	'JAB_USE_SSL_EXPLAIN'			=> 'لو كنت مفعّلا للاتصال الآمن سوف نحاول أن نعتمد عليه بالاتصال. منفذ Jabber سوف يتغير الى 5223 لو كان المنفذ 5222 محدد',
	'JAB_USERNAME'					=> 'اسم مستخدم Jabber',
	'JAB_USERNAME_EXPLAIN'			=> 'حدد اسم المستخدم بدقة. فلن نتأكد من صحة الاسم',
	'JAB_VERIFY_PEER'				=> 'Verify SSL certificate',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Require verification of SSL certificate used by Jabber server.<em><strong>Warning:</strong> Connecting peers with unverified SSL certificates may cause security implications.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Verify Jabber peer name',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Require verification of peer name for Jabber servers using SSL / TLS connections.<em><strong>Warning:</strong> Connecting to unverified peers may cause security implications.</em>',
));
