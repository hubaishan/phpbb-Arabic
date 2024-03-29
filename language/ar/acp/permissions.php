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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>نظام الصلاحيات قوي جدًا وهو مقسم إلى أربعة أقسام رئيسية وهي:</p>

		<h2>الصلاحيات العامة</h2>
		<p>وتستخدم للتحكم في صلاحيات الوصول واستعمال المنتدى بصورة عامة، وهي مقسمة أيضًا إلى صلاحيات الأعضاء وصلاحيات المجموعات وصلاحيات المدراء والمراقبين العامّين (مشرف عام).</p>

		<h2>الصلاحيات الخاصة لكل منتدى</h2>
		<p>وتستخدم للتحكم في صلاحيات الوصول لكل منتدى على حدة، وهي مقسمة أيضًا إلى صلاحيات المنتدى ومشرفي المنتديات وصلاحيات الأعضاء والمجموعات لكل منتدى.</p>

		<h2>قوالب الصلاحيات</h2>
		<p>وتستخدم لإنشاء نماذج مختلفة من الصلاحيات لكي تستَعمَل لاحقًا لضبط الصلاحيات المتنوعة بطريقة القوالب الجاهزة، القوالب الافتراضية يفترض بها أن تكون مناسبة لإدارة أي منتدى سواء كان كبيرًا أم صغيرًا، ومع ذلك يمكنك إضافة وتعديل وحذف القوالب للأقسام الأربعة كما تراه مناسبًا لاحتياجاتك.</p>

		<h2>ظل الصلاحيات</h2>
		<p>وتستخدم لمشاهدة الصلاحيات المعطاة للأعضاء والمشرفين والمدراء وكذلك للمنتديات.</p>

		<br />

		<p>لمزيد من المعلومات حول كيفية إعداد وضبط الصلاحيات، يرجى زيارة الفصل في<a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">إعدادات الصلاحيات في دليل البدء السريع</a>.</p>
',

	'ACL_NEVER'				=> 'أبدًا',
	'ACL_SET'				=> 'إعداد الصلاحيات',
	'ACL_SET_EXPLAIN'		=> 'الصلاحيات تعمل على نظام بسيط <strong>نعم</strong>/<strong>لا</strong>. إعطاء القيمة <strong>أبدًا</strong> لإحدى خيارات العضو أو المجموعة سيلغي أية قيمة أخرى معطاة. اذا لم تكن ترغب بإعطاء أية قيمة لإحدى الخيارات فضعها <strong>لا</strong>. بحيث إذا أعطِيَ هذا الخيار قيمة في مكان آخر فسيعتمَد، حتى ولو كانت <strong>أبدًا</strong>. العناصر المحددة جميعها (باستعمال مربع التحديد أمامها) ستستخدم الصلاحيات التي ستعرّفها، لاحظ أن ضبط الصلاحيات الإدارية للمؤسس لا يؤثر شيئا، لأن المؤسس يتمتع يالصلاحيات الإدارية كافة',
	'ACL_SETTING'			=> 'إعدادات',

	'ACL_TYPE_A_'			=> 'الصلاحيات الإدارية',
	'ACL_TYPE_F_'			=> 'صلاحيات المنتدى',
	'ACL_TYPE_M_'			=> 'صلاحيات الإشراف',
	'ACL_TYPE_U_'			=> 'صلاحيات العضوية',

	'ACL_TYPE_GLOBAL_A_'	=> 'الصلاحيات الإدارية',
	'ACL_TYPE_GLOBAL_U_'	=> 'صلاحيات العضوية',
	'ACL_TYPE_GLOBAL_M_'	=> 'صلاحيات الرقابة العامة',
	'ACL_TYPE_LOCAL_M_'		=> 'صلاحيات مشرف المنتدى',
	'ACL_TYPE_LOCAL_F_'		=> 'صلاحيات المنتدى',

	'ACL_NO'				=> 'لا',
	'ACL_VIEW'				=> 'مشاهدة الصلاحيات',
	'ACL_VIEW_EXPLAIN'		=> 'هنا تستطيع مشاهدة الصلاحيات الفعالة المعطاة للعضو/المجموعة. المربع الأحمر يرمز إلى أن المجموعة/العضو لا تملك هذه الصلاحية، المربع الأخضر يرمز إلى أن المجموعة/العضو تملك هذه الصلاحية',
	'ACL_YES'				=> 'نعم',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'هنا يمكنك إعطاء الصلاحيات الإدارية للأعضاء أو المجموعات. الأعضاء جميعهم الذين يملكون الصلاحيات الإدارية يستطيعون مشاهدة لوحة التحكم',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'هنا يمكنك تعيين أعضاء أو مجموعات مشرفين منتديات، لضبط صلاحيات الوصول أو ضبط صلاحيات الرقابة العامة يرجى منك استخدام الصفحة المناسبة لذلك',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'هنا يمكنك تحديد أي الأعضاء والمجموعات يمكنهم مشاهدة أي المنتديات. لتعيين المشرفين يرجى منك مراجعة الصفحة المناسبة لذلك',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'من هنا تستطيع نسخ تصاريح المنتدى من منتدى واحد أو أكثر من منتدى.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'هنا يمكنك إعطاء صلاحيات الرقابة العامة للأعضاء أو المجموعات، هؤلاء المراقبون كالمشرفين عدا أنهم يملكون صلاحيات الإشراف على المنتديات كلها',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'هنا يمكنك إسناد صلاحيات المنتدى للمجموعات',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'هنا يمكنك تغيير الصلاحيات العامة للمجموعات - صلاحيات العضوية وصلاحيات الرقابة العامة والصلاحيات الإدارية. صلاحية العضوية تتحكم في القدرات المتنوعة كإمكانية استخدام صورة رمزية، إرسال الرسائل الخاصة، وغيرها. صلاحيات الرقابة العامة تشمل الموافقة على المواضيع وإدارتها، حظر الأعضاء وغيرها. وأخيرا الصلاحيات الإدارية تشمل تعديل الصلاحيات، تعريف رموز المنتدى BBcode وإدارة المنتديات وغيرها. صلاحيات الأعضاء المنفردة يفضل عدم تغييرها إلا في حالات نادرة، الطريقة الأفضل لضبط الصلاحيات هي بضم المستخدمين في مجموعة معينة وإعطاء الصلاحيات لهذه المجموعة',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'هنا يمكنك إدارة قوالب الصلاحيات الإدارية. القوالب هي صلاحيات ذكية، إذا عدّلت إحدى القوالب فإن العناصر كلها التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'هنا يمكنك إدارة قوالب صلاحيات المنتدى. القوالب هي صلاحيات ذكية، إذا عدّلت إحدى القوالب فإن العناصر كلها التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'هنا يمكنك إدارة قوالب صلاحيات الإشراف. القوالب هي صلاحيات ذكية، إذا عدّلت إحدى القوالب فإن العناصر كلها التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة',
	'ACP_USER_ROLES_EXPLAIN'					=> 'هنا يمكنك إدارة قوالب صلاحيات العضوية. القوالب هي صلاحيات ذكية، إذا عدّلت إحدى القوالب فإن العناصر كلها التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'هنا يمكنك إسناد صلاحيات المنتدى للأعضاء',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'هنا يمكنك تغيير الصلاحيات العامة للأعضاء - صلاحيات العضوية وصلاحيات الرقابة العامة والصلاحيات الإدارية. صلاحية العضوية تتحكم في القدرات المتنوعة كإمكانية استخدام صورة رمزية، إرسال الرسائل الخاصة، وغيرها. صلاحيات الرقابة العامة تشمل الموافقة على المواضيع وإدارتها، حظر الأعضاء وغيرها. وأخيرا الصلاحيات الإدارية تشمل تعديل الصلاحيات، تعريف رموز المنتدى BBcode وإدارة المنتديات وغيرها. لضبط هذه الصلاحيات لمجموعة كبيرة من الأعضاء دفعة واحدة فننصحك بنظام صلاحيات المجموعات. صلاحيات الأعضاء المنفردة يفضل عدم تغييرها إلا في حالات نادرة، الطريقة الأفضل لضبط الصلاحيات هي بضم المستخدمين في مجموعة معينة وإعطاء الصلاحيات لهذه المجموعة',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'هنا تستطيع مشاهدة الصلاحيات الإدارية الفعالة والتي أسندَت إلى الأعضاء/المجموعات المحددة',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة صلاحيات الرقابة العامة الفعالة والتي أسندت إلى الأعضاء/المجموعات المحددة',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'هنا تستطيع مشاهدة الصلاحيات المنتدى الفعالة والتي أسندت إلى الأعضاء/المجموعات والمنتديات',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة صلاحيات الإشراف الفعالة والتي أسندت إلى الأعضاء/المجموعات والمنتديات',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'هنا تستطيع مشاهدة صلاحيات العضوية الفعالة والتي أسندت إلى الأعضاء/المجموعات',

	'ADD_GROUPS'				=> 'إضافة مجموعات',
	'ADD_PERMISSIONS'			=> 'إضافة صلاحيات',
	'ADD_USERS'					=> 'إضافة أعضاء',
	'ADVANCED_PERMISSIONS'		=> 'صلاحيات متقدمة',
	'ALL_GROUPS'				=> 'إختر المجموعات كلها',
	'ALL_NEVER'					=> '<strong>أبدًا</strong> للجميع',
	'ALL_NO'					=> '<strong>لا</strong> للجميع',
	'ALL_USERS'					=> 'إختـَر الأعضاء كلهم',
	'ALL_YES'					=> '<strong>نعم</strong> للجميع',
	'APPLY_ALL_PERMISSIONS'		=> 'تطبيق الصلاحيات كلها',
	'APPLY_PERMISSIONS'			=> 'تطبيق الصلاحيات',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'الصلاحيات والقوالب التي تعرّفت لهذا العنصر ستتطبَق فقط على هذا العنصر والعناصر المحددة الأخرى',
	'AUTH_UPDATED'				=> 'تحدّثت الصلاحيات بنجاح',

	'COPY_PERMISSIONS_CONFIRM'				=> 'هل أنت متأكد من أنك تريد القيام بهذه العملية؟ المتابعة في هذا سيلغي الصلاحيات كلها التي أعِدّ من قبل لكل ما قد حددته الآن.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'المنتدى المُراد نسخ التصاريح منه.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'المنتديات المُراد تطبيق التصاريح المنسوخة إليها.',
	'COPY_PERMISSIONS_FROM'					=> 'نسخ التصاريح من',
	'COPY_PERMISSIONS_TO'					=> 'تطبيق التصاريح إلى',

	'CREATE_ROLE'				=> 'أنشئ قالب',
	'CREATE_ROLE_FROM'			=> 'استعمل الإعدادات من…',
	'CUSTOM'					=> 'مخصص.',

	'DEFAULT'					=> 'الافتراضي',
	'DELETE_ROLE'				=> 'حذف القالب',
	'DELETE_ROLE_CONFIRM'		=> 'هل أنت متأكد من أنك تريد حذف هذا القالب؟ العناصر التي تطبقت هذا القالب عليها <strong>لن تفقد</strong> إعدادات صلاحياتهم',
	'DISPLAY_ROLE_ITEMS'		=> 'عرض العناصر التي تستعمل هذا القالب',

	'EDIT_PERMISSIONS'			=> 'تعديل الصلاحيات',
	'EDIT_ROLE'					=> 'تعديل القالب',

	'GROUPS_NOT_ASSIGNED'		=> 'لم يسنـَد هذا القالب إلى أية مجموعة',

	'LOOK_UP_GROUP'				=> 'بحث عن مجموعة مستخدمين',
	'LOOK_UP_USER'				=> 'بحث عن عضو',

	'MANAGE_GROUPS'		=> 'إدارة المجموعات',
	'MANAGE_USERS'		=> 'إدارة الأعضاء',

	'NO_AUTH_SETTING_FOUND'		=> 'لم تتعرف إعدادات الصلاحيات',
	'NO_ROLE_ASSIGNED'			=> 'لم تتطبق أي قالب',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'التحويل إلى هذا القالب لا يغير الصلاحيات على اليسار. إذا أردت إلغاء/حذف الصلاحيات كلها يجدر بك استعمال وصلة ”<strong>لا</strong> للجميع“',
	'NO_ROLE_AVAILABLE'			=> 'لا يوجد قوالب متوفرة',
	'NO_ROLE_NAME_SPECIFIED'	=> 'رجاءً اختر اسم للقالب',
	'NO_ROLE_SELECTED'			=> 'لم يعثـَر على القالب',
	'NO_USER_GROUP_SELECTED'	=> 'لم تحدد أي عضو أو مجموعة',

	'ONLY_FORUM_DEFINED'	=> 'لقد عرّفت المنتديات فقط في اختيارك. رجاءً حددت عضو واحد أو مجموعة واحدة على الأقل',

	'PERMISSION_APPLIED_TO_ALL'		=> 'سيطبّق الصلاحيات والقالب على العناصر المحددة كلها',
	'PLUS_SUBFORUMS'				=> '+ المنتديات الفرعية',

	'REMOVE_PERMISSIONS'			=> 'حذف الصلاحيات',
	'REMOVE_ROLE'					=> 'حذف القالب',
	'RESULTING_PERMISSION'			=> 'نتيجة الصلاحية',
	'ROLE'							=> 'قالب',
	'ROLE_ADD_SUCCESS'				=> 'أضيفـَت القالب بنجاح',
	'ROLE_ASSIGNED_TO'				=> 'الأعضاء/المجموعات المنسوبة لـ %s',
	'ROLE_DELETED'					=> 'حُذِف القالب بنجاح',
	'ROLE_DESCRIPTION'				=> 'وصف القالب',

	'ROLE_ADMIN_FORUM'			=> 'مدير منتدى',
	'ROLE_ADMIN_FULL'			=> 'إدارة كاملة',
	'ROLE_ADMIN_STANDARD'		=> 'إدارة متوسطة',
	'ROLE_ADMIN_USERGROUP'		=> 'إدارة الأعضاء والمجموعات',
	'ROLE_FORUM_BOT'			=> 'تصفح محركات البحث',
	'ROLE_FORUM_FULL'			=> 'حرية تصفح كاملة',
	'ROLE_FORUM_LIMITED'		=> 'تصفح محدود',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'تصفح محدود + الاستطلاعات',
	'ROLE_FORUM_NOACCESS'		=> 'لا وصول',
	'ROLE_FORUM_ONQUEUE'		=> 'يتطلب موافقة المشرف',
	'ROLE_FORUM_POLLS'			=> 'تصفح متوسط + الاستطلاعات',
	'ROLE_FORUM_READONLY'		=> 'التصفح للقراءة فقط',
	'ROLE_FORUM_STANDARD'		=> 'تصفح متوسط',
	'ROLE_FORUM_NEW_MEMBER'		=> 'وصول العضو المُسجل الجديد',
	'ROLE_MOD_FULL'				=> 'إشراف كامل',
	'ROLE_MOD_QUEUE'			=> 'إشراف بسيط جدا',
	'ROLE_MOD_SIMPLE'			=> 'إشراف بسيط',
	'ROLE_MOD_STANDARD'			=> 'إشراف متوسط',
	'ROLE_USER_FULL'			=> 'الخصائص جميعها',
	'ROLE_USER_LIMITED'			=> 'خصائص محدودة',
	'ROLE_USER_NOAVATAR'		=> 'لا صورة رمزية',
	'ROLE_USER_NOPM'			=> 'لا رسائل خاصة',
	'ROLE_USER_STANDARD'		=> 'خصائص متوسطة',
	'ROLE_USER_NEW_MEMBER'		=> 'مميزات العضو المُسجل الجديد',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'يستطيع الوصول إلى إدارة المنتديات وإعدادت صلاحيات المنتديات',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'يمكنه تصفح أدوات الإدارة كلها.<br />ليس محبذا',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'يمكنه تصفح معظم خصائص ادارة المنتدى ولكن لا يمكنه تصفح الأدوات المتعلقة بالخادم والنظام',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'يستطيع إدارة المجموعات والاعضاء: يستطيع تعديل الصلاحيات، الإعدادات، حظر الأعضاء، وإدارة الرتب',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'هذا القالب هو المفضل لمحركات البحث',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'يستطيع استعمال خصائص المنتدى كلها، مثل كتابة الإعلانات والمواضيع المثبتة. يستطيع أيضًا تجاهل فترة الإغراق.<br />غير مستحب للأعضاء العاديين',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'يستطيع استعمال بعض خصائص المنتدى، لكن لا يمكنه إرفاق الملفات أو استعمال أيقونات المواضيع',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'مثله مثل التصفح المحدود لكنه يستطيع إنشاء الاستطلاعات',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'لا يستطيع رؤية أو تصفح المنتدى',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'يستطيع استعمال بعض خصائص المنتدى بالإضافة إلى المرفقات، لكن المرفقات والمواضيع يجب أن يوافق عليها المشرف أولًا',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'مثل التصفح المتوسط لكنه يستطيع أيضًا إنشاء الاستطلاعات',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'يستطيع قراءة المنتدى، لكنه لا يستطيع إنشاء مواضيع جديدة أو الرد عليها',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'يستطيع استعمال أغلب خصائص المنتدى بما فيها إرفاق الملفات وحذف المواضيع الخاصة به، لكنه لا يستطيع إغلاق مواضيعه، ولا يستطيع إنشاء الاستطلاعات',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'قالب مُخصص للأعضاء في مجموعة الأعضاء المُسجلين الجُدد، يحتوي على تصاريح <strong>مُطلقة</strong> لتثبيت الخصائص للأعضاء الجُدد.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'يستطيع استعمال خصائص الإشراف جميعها، بما فيها حظر الأعضاء',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'يستطيع استعمال الإشراف المحدود جدا لتفعيل المواضيع وتعديلها، لكن لا شيء أكثر',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'يستطيع استعمال عمليات الموضوع الأساسية. لا يستطيع إرسال التحذيرات أو استعمال أوامر الإشراف',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'يستطيع استعمال أغلبية أدوات الاشراف، لكن لا يستطيع حظر الأعضاء أو تغيير كاتب الموضوع',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'يستطيع استعمال الخصائص كلها المتوفرة للأعضاء، بما فيها تغيير اسم المستخدم وتجاهل فترة الإغراق.<br />لا ننصح بذالك',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'يستطيع تصفح بعض خيارات العضو. المرفقات، البريد، والرسائل الخاصة غير متاحة',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'لديه بعض الخصائص البسيطة ولا يمكنه استعمال الصورة الرمزية',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'لديه بعض الخاصئص البسيطة ولا يمكنه إرسال الرسائل الخاصة',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'يستطيع تصفح أغلبية خصائص العضو وليس كلها. لا يستطيع تغيير اسم المستخدم أو تجاهل فترة الإغراق',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'قالب مُخصص للأعضاء في مجموعة الأعضاء المُسجلين الجُدد، يحتوي على تصاريح <strong>مُطلقة</strong> لتثبيت الخصائص للأعضاء الجُدد.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'تستطيع إضافة وصف صغير لما يفعله القالب أو ماذا يعني. النص الذي ستكتبه هنا سيعرَض في شاشة الصلاحيات أيضًا',
	'ROLE_DESCRIPTION_LONG'			=> 'وصف القالب كبير جدا، حاول ألا يتعدى 4000 حرف',
	'ROLE_DETAILS'					=> 'تفاصيل القالب',
	'ROLE_EDIT_SUCCESS'				=> 'تعدّل القالب بنجاح',
	'ROLE_NAME'						=> 'اسم القالب',
	'ROLE_NAME_ALREADY_EXIST'		=> 'اسم القالب <strong>%s</strong> موجود مسبقًا في هذه الصلاحيات',
	'ROLE_NOT_ASSIGNED'				=> 'لم يسند القالب بعد',

	'SELECTED_FORUM_NOT_EXIST'		=> 'المنتديات المحددة غير موجودة',
	'SELECTED_GROUP_NOT_EXIST'		=> 'المجموعات المحددة غير موجودة',
	'SELECTED_USER_NOT_EXIST'		=> 'الأعضاء المحددين غير موجدين',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'المنتدى الذي حددته هنا سيحتوي على المنتديات الفرعية كلها في التحديد',
	'SELECT_ROLE'					=> 'اختر قالب.',
	'SELECT_TYPE'					=> 'اختر النوع',
	'SET_PERMISSIONS'				=> 'ضبط الصلاحيات',
	'SET_ROLE_PERMISSIONS'			=> 'ضبط صلاحيات القالب',
	'SET_USERS_PERMISSIONS'			=> 'ضبط صلاحيات العضوية',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'ضبط صلاحيات الوصول للمنتدى',

	'TRACE_DEFAULT'					=> 'افتراضيًا كل صلاحية خيارها <strong>لا</strong> (غير معطاة). لذا الصلاحية يمكن أن تستبدل بإعدادات أخرى',
	'TRACE_FOR'						=> 'التتبع لـ',
	'TRACE_GLOBAL_SETTING'			=> '(عام) %s',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'صلاحيات هذه المجموعة تغيرت إلى <strong>أبدًا</strong> كمجموع للنتيجة إذن النتيجة السابقة احتفِظ بها',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'صلاحية المجموعة في هذا المنتدى هي <strong>أبدًا</strong> مثل مجموع النتيجة لذا يحتفظ بالنتيجة القديمة',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'صلاحيات هذه المجموعة تغيرت إلى <strong>أبدًا</strong> لأن مجموع القيمة الجديدة لم يتغير (غيّر إلى <strong>لا</strong>)',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'صلاحية المجموعة في هذا المنتدى هي <strong>أبدًا</strong> التي توافق قيمة المجموع الجديد لأنها لم تتحدد بعد (اضغط على <strong>لا</strong>)',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'صلاحيات هذه المجموعة تغيرت إلى <strong>أبدًا</strong> مما يؤدي إلى استبدال جميع الـ <strong>نعم</strong> إلى <strong>أبدًا</strong> لهذا العضو',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'صلاحية هذه المجموعات في هذا المنتدى هي <strong>أبدًا</strong> الذي يستبدل المجموع <strong>نعم</strong> لـ <strong>أبدًا</strong> لهذا العضو',
	'TRACE_GROUP_NO'				=> 'الصلاحية هي <strong>لا</strong> لهذه المجموعة لذا احتـُفِظ بمجموع القيمة السابق',
	'TRACE_GROUP_NO_LOCAL'			=> 'صلاحية المجموعة في هذا المنتدى هي <strong>لا</strong> مثل مجموع النتيجة لذا يحتفظ بالنتيجة القديمة',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'تغيرت صلاحيات هذه المجموعة إلى <strong>نعم</strong> لكن في المجموع <strong>أبدًا</strong> لا يمكن استبدالها',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'صلاحية هذه المجموهات لهذا المنتدى تغيرت إلى <strong>نعم</strong> لكن المجموع هو <strong>أبدًا</strong> لا يمكن تغييره',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'تغيرت صلاحية هذه المجموعة إلى <strong>نعم</strong> لأن مجموع القيمة الجديدة لم يتغير (غيّر إلى <strong>لا</strong>)',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'صلاحيات هذه المجموعة تغيرت إلى <strong>نعم</strong> لأن مجموع القيمة الجديدة لم يتغير (غيّر إلى <strong>لا</strong>)',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'تغيرت صلاحية هذه المجموعة إلى <strong>نعم</strong> ومجموع الصلاحية السابق كان <strong>نعم</strong>، لذا احتـُفِظ بالنتيجة',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'صلاحية هذه المجموعات إلى هذا المنتدى تغيرت إلى <strong>نعم</strong> ومجموع الصلاحية تغيرت مسبقا إلى <strong>نعم</strong>، لذا فنتيجة المجموع يحتفظ بها',
	'TRACE_PERMISSION'				=> 'تتبع الصلاحية - %s',
	'TRACE_RESULT'					=> 'نتيجة التتبع',
	'TRACE_SETTING'					=> 'إعدادات التتبع',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'تغيرت صلاحيات العضو للمنتدى المستقلة إلى <strong>نعم</strong> ولكن مجموع الصلاحيات مازال مضبوطًاَ على <strong>نعم</strong>، لذا فالمجموع الحاصل سيحفظ. %sتتبع الصلاحيات العامة%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'تغيرت صلاحيات العضو للمنتدى المستقلة إلى <strong>نعم</strong> بحيث أنها عوضت النتائج المحلية الحالية <strong>أبدا</strong>. %sتتبع الصلاحيات العامة%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'تغيرت صلاحيات العضو للمنتدى المستقلة إلى <strong>أبدا</strong> بحيث أنها لم تؤثر على الصلاحيات المحلية. %sتتبع الصلاحيات العامة%s',

	'TRACE_USER_FOUNDER'					=> 'لدى العضو إعدادات من نوع المؤسس، ولذلك فصلاحيات المدير مضبوطة افتراضيا على <strong>نعم</strong>',
	'TRACE_USER_KEPT'						=> 'صلاحيات العضو هي <strong>لا</strong> لذا فمجموع القيمة القديم احتـُفِظ به',
	'TRACE_USER_KEPT_LOCAL'					=> 'صلاحيات العضو للمنتدى هي <strong>لا</strong> لذا فمجموع القيمة القديم احتـُفِظ به',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'صلاحيات العضو مضبوطة على <strong>أبدًا</strong> ومجموع القيمة ضبط على <strong>أبدًا</strong>، لذا فلا شيء تغير',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'صلاحيات هذا المنتدى مضبوطة على <strong>أبدًا</strong> ومجموع القيمة ضبط على <strong>أبدًا</strong>، لذا فلا شيء تغير',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'صلاحيات العضو مضبوطة على <strong>أبدًا</strong> حيث أصبحت القيم جميعها كذلك بسبب أنه ضُبِط على لا',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'صلاحيات العضو من لهذا المنتدى مضبوطة على <strong>أبدًا</strong> بحيث أصبحت مجموع القيمة بسبب أنه ضُبِط على لا',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'صلاحيات العضو مضبوطة على <strong>أبدًا</strong> وغطت السابق <strong>نعم</strong>',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'صلاحيات العضو من لهذا المنتدى مضبوطة على <strong>أبدًا</strong> وغطت السابق <strong>نعم</strong>',
	'TRACE_USER_NO_TOTAL_NO'				=> 'صلاحيات العضو هي <strong>لا</strong> ومجموع القيمة ضُبِط على لا لذا أصبحت <strong>أبدًا</strong> افتراضية',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'صلاحيات العضو من لهذا المنتدى هي <strong>لا</strong> ومجموع القيمة ضُبِط على لا لذا أصبحت <strong>أبدًا</strong> افتراضية',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'صلاحيات العضو مضبوطة على <strong>نعم</strong> ولكن المجموع <strong>أبدًا</strong> لا يمكن تغطيته',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'صلاحيات العضو من لهذا المنتدى مضبوطة على <strong>نعم</strong> ولكن المجموع <strong>أبدًا</strong> لا يمكن تغطيته',
	'TRACE_USER_YES_TOTAL_NO'				=> 'صلاحيات العضو مضبوطة على <strong>نعم</strong> بحيث أصبحت مجموع القيمة بسبب أنه ضُبِط على <strong>لا</strong>',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'صلاحيات العضو من لهذا المنتدى مضبوطة على <strong>نعم</strong> بحيث أصبحت مجموع القيمة بسبب أنه ضُبَط على <strong>لا</strong>',
	'TRACE_USER_YES_TOTAL_YES'				=> 'صلاحيات العضو مضبوطة على <strong>نعم</strong> ومجموع القيمة ضبط على <strong>نعم</strong>، لذا فلا شيء تغير',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'صلاحيات العضو من لهذا المنتدى مضبوطة على <strong>نعم</strong> ومجموع القيمة ضبط على <strong>نعم</strong>، لذا فلا شيء تغير',
	'TRACE_WHO'								=> 'من',
	'TRACE_TOTAL'							=> 'المجموع',

	'USERS_NOT_ASSIGNED'			=> 'لم يُسنَد هذا القالب لأي عضو',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'إنه عضو في المجموعة الافتراضية التالية',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'إنه عضو في المجموعة الخاصة التالية',

	'VIEW_ASSIGNED_ITEMS'	=> 'استعراض العناصر التي أسند اليها القالب',
	'VIEW_LOCAL_PERMS'		=> 'صلاحيات خاصة',
	'VIEW_GLOBAL_PERMS'		=> 'صلاحيات عامة',
	'VIEW_PERMISSIONS'		=> 'عرض الصلاحيات',

	'WRONG_PERMISSION_TYPE'				=> 'خطأ في نوع الصلاحيات المحدد',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'إعدادات الصلاحيات مكونة على شكل خاطئ، phpBB غير قادر على معالجتها بشكل صحيح !',
));
