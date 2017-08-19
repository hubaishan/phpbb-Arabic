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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'عرض الصور في المشاركات',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'المقدمة',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'إنشاء الروابط',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'إنشاء القوائم',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'أمور أخرى',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'الاقتباس وإخراج النص بعرض ثابت',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'تنسيق النص',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'لإضافة مرفقات لمشاركتك فما عليك إلا تضمينها في الدالة <br /><br /><strong>[attachment=][/attachment]</strong><br /><br /> إذا كانت خاصية المرفقات مفعلة من إدارة المنتدى، وكذلك يوجد قائمة منسدلة لإضافة المرفقات وقت كتابة المشاركة.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'إضافة المرفقات في المشاركة',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'طريقة phpBB BBCode تستخدم دالة لإضافة الصور في رسائلك. هناك أمران مهمان عند إضافة الصور: كثير من المستخدمين لا يفضلون ظهور الكثير من الصور في الرسائل، الصورة المدرجة ينبغي أن تكون موجودة على الانترنت (يعني يجب ألا تكون موجودة على جهاز الحاسب لديك فقط، إلا اذا كان لديك خادم صفحات الانترنت!). لا توجد طريقة في الوقت الحالي لتخزين الصور في phpBB (هذه العقبات كلها سوف تدرس للإصدار القادم من phpBB). لإظهار صورة من موقع ما عليك تضمينه في الدالة <strong>[img][/img]</strong>. مثلاً:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />كما هو مذكور في تكوين الروابط أعلاه تستطيع وضع الصورة في الدالة [url][/url] إن أردت ذلك، مثلاً<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />سوف يعطي:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'إضافة الصور في المشاركة',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode هو جزء من تطبيق HTML. باستطاعتك استخدام BBCode,التي أعدّها مدير المنتدى، في تنسيق المشاركات. بالإضافة لذلك تستطيع تعطيل BBCode لكل إرسال على حدة. BBCode مشابه لـ HTML، التأشير يحدد بأقواس مربعة [ و ] وليس &lt; و &gt; مما يعطي تحكم أفضل لما يعرض. بناءً على نوع القالب المستخدم يكون استعمال BBCode لرسائلك أسهل باستعمال الأزرار أعلى مربع الرسائل في صفحة إرسال الرسالة. حتى مع هذه السهولة سوف تجد الدليل الآتي مفيداً!.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'ماذا تعني BBcode؟',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'طريقة BBCode المستخدمة في phpBB يدعم عدة طرائق لإظهار الروابط URIs، Uniform Resource Indicators المعروفة بـ URLs.<ul><li>أول هذه الطرائق هي استخدام الدوال <strong>[url=][/url]</strong>، أي نص يكتب بعد = سوف يكون رابط الموقع. مثلاً لتصل بالموقع phpbb.com تستطيع استخدام:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>زوروا موقعنا<strong>[/url]</strong><br /><br />هذا سوف يكون الوصلة الآتية، <a href="https://www.phpbb.com/">زوروا موقعنا</a> سوف تلاحظ أن الصفحة سوف تظهر في نافذة جديدة لتمكن الزائر من مواصلة التصفح في المنتدى.</li><li>إذا كنت تريد إظهار الرابط فقط يمكنك استخدام:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />هذا سوف يعطي الرابط الآتي، <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>بالإضافة لذلك فإن phpBB تستخدم ما يسمى <i>وصلات سحريه</i>، وهي تحوبل اسم أي لموقع على الانترنت كتب بطريقة صحيحة إلى وصلة دون استخدام أي من الدوال السابقة الذكر أو استعمال الكلمة https://. مثلاً عندما تكتب www.phpbb.com في رسالتك فإن هذا سوف يتحول إلى <a href="https://www.phpbb.com/">www.phpbb.com</a> عند استعراض رسالتك. </li><li>الشيء نفسه ينطبق على عناوين البريد الالكتروني، تستطيع إما استخدام البريد الالكتروني مباشرة مثل:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />وهو سيظهر <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> أو تستطيع فقط كتابة no.one@domain.adr في رسالتك وهي ستتحول إلى رابط بريدي صحيح عند استعراضها.</li></ul>كما هو الحال مع دوال BBCode كلها تستطيع وضع عنوانين الصفحات في أي من الدوال السابق ذكرها مثل سميك أو مائل وغيرها مثل <strong>[img][/img]</strong> (انظر النقطة الآتية)، <strong>[b][/b]</strong>. كما هو الحال مع الدوال السابقة عليك التأكد من استعمال دوال الفتح والإغلاق بطريقة صحيحة، مثلاً:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><u>ليس</u> صحيحاً مما قد يدعو إلى إلغاء رسالتك، لذا عليك الانتباه.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'الربط إلى موقع آخر',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'النوع الثاني من القوائم، القوائم المرقمة تعطيك تحكم حول ما سيظهر قبل كل سطر سواء كان عدداً أم حرفاً. لتكوين قائمة عددية نستخدم <strong>[list=1][/list]</strong>لتكوين قائمة حرفية نستخدم <strong>[list=a][/list]</strong>. كما هو الحال في القائمة غير المرقمة نستعمل <strong>[*]</strong>. مثلاً:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>اذهب إلى السوق<br /><strong>[*]</strong>اشتر كمبيوتر<br /><strong>[*]</strong>اصرخ على الكمبيوتر حين يتعطل<br /><strong>[/list]</strong><br /><br />سوف يظهر الآتي:<ol style="list-style-type: decimal;"><li>اذهب إلى السوق</li><li>اشتر كمبيوتر</li><li>اصرخ على الكمبيوتر حين يتعطل</li></ol>وفي حالة القائمة الحرفية نستخدم:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>الجواب الأول<br /><strong>[*]</strong>الجواب الثاني<br /><strong>[*]</strong>الجواب الثالث<br /><strong>[/list]</strong><br /><br />يعطينا <ol style="list-style-type: lower-alpha"><li>الجواب الأول</li><li>الجواب الثاني</li><li>الجواب الثالث</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>الجواب الأول<br /><strong>[*]</strong>الجواب الثاني<br /><strong>[*]</strong>الجواب الثالث<br /><strong>[/list]</strong><br /><br />يعطينا <ol style="list-style-type: upper-alpha"><li>الجواب الأول</li><li>الجواب الثاني</li><li>الجواب الثالث</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>الجواب الأول<br /><strong>[*]</strong>الجواب الثاني<br /><strong>[*]</strong>الجواب الثالث<br /><strong>[/list]</strong><br /><br />يعطينا <ol style="list-style-type: lower-roman"><li>الجواب الأول</li><li>الجواب الثاني</li><li>الجواب الثالث</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>الجواب الأول<br /><strong>[*]</strong>الجواب الثاني<br /><strong>[*]</strong>الجواب الثالث<br /><strong>[/list]</strong><br /><br />يعطينا <ol style="list-style-type: upper-roman"><li>الجواب الأول</li><li>الجواب الثاني</li><li>الجواب الثالث</li></ol>.',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'إنشاء قائمة مرقمة',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode يدعم نوعين من القوائم، غير مرقمة ومرقمة. هما مشابهتان لطريقة HTML. القوائم غير المرقمة تظهر كنقاط كل نقطة بداية السطر يتبعها النص. لتكوين قائمة غير مرقمة نستخدم <strong>[list][/list]</strong> مع وضع العلامة <strong>[*]</strong>قبل كل سطر. مثلاً النص الآتي، الألوان المفضل استعمالها:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>أحمر<br /><strong>[*]</strong>أزرق<br /><strong>[*]</strong>أصفر<br /><strong>[/list]</strong><br /><br />سوف تظهر هكذا:<ul><li>أحمر</li><li>أزرق</li><li>أصفر</li></ul><br />بدلا من ذلك يمكنك تحديد نمط التعداد النقطي للقائمة باستعمال <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'إنشاء قائمة غير مرقمة',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'إذا كنت تمتلك صلاحيات الدخول للوحة التحكم الرئيسية فتستطيع من خلالها إضافة دوال خاصة بك.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'هل يمكنني إضافة دالة خاصة بي؟',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'إذا كنت تريد إضافة نص ثابت لبرنامج أو كود معين، مثلاً نوع الخط Courier ينبغي عليك وضع النص بين الدالتين <strong>[code][/code]</strong>، كمثال<br /><br /><strong>[code]</strong>echo "This is some code";<strong>[/code]</strong><br /><br />العبارات كلها المستخدمة بين الدالتين <strong>[code][/code]</strong> ستظهر كما هي دون أي تغيير.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'إظهار نص برنامج أو كتابة حروف ثابتة',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'توجد طريقتان للاقتباس، واحدة مع ذكر الكاتب والثانية بدون ذكره.<ul><li>عند استخدام الاقتباس للرد على موضوع، عليك التذكر أن النص المقتبس سوف يوضع في نص رسالتك بين الدالتين <strong>[quote=&quot;"][/quote]</strong>. هذه الطريقة تمكنك من الإشارة	إلى الشخص المقتبس منه! مثل اقتباس جزء من نص 	كتبه Mr. Blobby نستخدم:<br /><br /><strong>[quote="Mr. Blobby"]</strong>النص 	الذي كتبه هذا الشخص<strong>[/quote]</strong><br /><br />	النتيجة سوف تضع، Mr. Blobby كتب: قبل النص مباشرة. تذكر 	أنه <strong>ينبغي</strong> تضمين الأقواس	" " حول النص المقتبس، وينبغي استعمالها.</li><li>	الطريقة الثانية هي للاقتباس بدون ذكر الكاتب. لتفعل ذلك ضع النص بين الدالتين <strong>[quote][/quote]</strong>. عند استعراض الرسالة سوف ترى النص المقتبس، اقتباس: قبل النص مباشرة.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'اقتباس المشاركات',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'تشمل BBCode علامات تجعلك تغير تنسيق النص بسرعة. تستطيع عمل ذلك بالطرق التالية: <ul><li>لجعل جزء من النص سميكاً ضعه بين العلامة <strong>[b][/b]</strong>، مثلاً <br /><br /><strong>[b]</strong>أهلاً<strong>[/b]</strong><br /><br />سوف تصبح <strong>أهلاً</strong></li><li>للنص المسطر <strong>[u][/u]</strong>، مثلاً:<br /><br /><strong>[u]</strong>صباح الخير<strong>[/u]</strong><br /><br />تصبح <u>صباح الخير</u></li><li>لجعل الخط مائل <strong>[i][/i]</strong>، مثلاً<br /><br />هذا <strong>[i]</strong>عظيم!<strong>[/i]</strong><br /><br />سوف يعطيك هذا <i>عظيم!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'كيفية كتابة نص عريض أو مائل أو تحته خط',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'لتغيير لون وحجم الخط يمكنك استخدام التالي. لا تنسى أن شكل ولون النص يعتمد على برنامج المتصفح وجهازه: <ul><li>لتغيير اللون ضع النص بين الدوال <strong>[color=][/color]</strong>. تستطيع استخدام أي من الألوان المتعارف عليها (eg. red, blue, yellow, etc.) أو طريقة الأرقام الثلاثة الست عشرية، eg. #FFFFFF, #000000. مثلاً، لجعل لون النص أحمر تستطيع استخدام:<br /><br /><strong>[color=red]</strong>أهلاً!<strong>[/color]</strong><br /><br />أو<br /><br /><strong>[color=#FF0000]</strong>أهلاً!<strong>[/color]</strong><br /><br />جميعهم سوف يظهرون <span style="color:red">أهلاً!</span></li><li>لتغيير حجم الخط نستطيع بطريقة مماثلة استخدام <strong>[size=][/size]</strong>. هذه الدالة سوف تعتمد على القالب المستخدم لكن الطريقة المفضلة هي استخدام نظام النقط في حجم النص، ابتداء من 1 (صغير إلى أقصى درجة) إلى الرقم 29 (كبير جداً). مثلاً:<br /><br /><strong>[size=9]</strong>صغير<strong>[/size]</strong><br /><br />سوف تكون <span style="font-size:30%;">صغير</span><br /><br />حيث:<br /><br /><strong>[size=24]</strong>ضخم!<strong>[/size]</strong><br /><br />ستكون <span style="font-size:200%;">ضخم!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'كيفية القيام بتغيير لون النص أو حجمه',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'نعم، بالطبع تستطيع ذلك، مثلاً لتلفت انتباه شخص ما تستطيع استخدام:<br /><br /><strong>[size=200][color=red][b]</strong>أنظر إلىّ!<strong>[/b][/color][/size]</strong><br /><br />هذا سوف يظهر <span style="color:red;font-size:200%;"><strong>أنظر إلىّ!</strong></span><br /><br />لكننا لا ننصح بكتابة الكثير من تلك الدوال! على الكاتب التأكد من إغلاق الإشارات بطريقة صحيحة، تذكر الأمر يعود إليك. مثلاً الآتي غير صحيح:<br /><br /><strong>[b][u]</strong>هذا خطأ<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'هل يمكنني دمج أكثر من علامة لتنسيق النص؟',
));
