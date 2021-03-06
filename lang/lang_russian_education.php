<?php

// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_education[1] = "Образование";
$header_education[2] = "Школа:";
$header_education[3] = "Средняя школа|Высшая школаl|Институт|Аспирантура|Техникум"; // drop down attended for / school type
$header_education[4] = "Вуз:";
$header_education[5] = "Факультет:";
$header_education[6] = "Кафедра:";
$header_education[7] = "Форма обучения:";
$header_education[8] = "Статус:";
$header_education[9] = "Высшее образование";
$header_education[10] = "Среднее образование";
$header_education[11] = "№ ";

$edu_status = array(
	'1' => 'Абитуриент',
	'2' => 'Студент (специалист)',
	'3' => 'Студент (бакалавр)',
	'4' => 'Студент (магистр)',
	'5' => 'Выпускник (специалист)',
	'6' => 'Выпускник (бакалавр)',
	'7' => 'Выпускник (магистр)',
	'8' => 'Аспирант',
	'9' => 'Кандидат наук',
	'10' => 'Доктор наук'
);

$edu_form = array(
	'1' => 'Дневная',
	'2' => 'Вечерняя',
	'3' => 'Заочная',	
);

$edu_class = array(
	'1' => "а",
	'2' => "б",
	'3' => "в",
	'4' => "г",
	'5' => "д",
	'6' => "е",
	'7' => "ж",
	'8' => "з",
	'9' => "и",
	'10' => "к",
	'11' => "л",
	'12' => "м",
	'13' => "н",
	'14' => "о",
	'15' => "п",
	'16' => "р",
	'17' => "с",
	'18' => "т",
	'19' => "у",
	'20' => "ф",
	'21' => "х",
	'22' => "ц",
	'23' => "ч",
	'24' => "ш",
	'25' => "щ",
	'26' => "ы",
	'27' => "э",
	'28' => "ю",
	'29' => "я",
	'30' => "а2",
	'31' => "б2",
	'32' => "в2",
	'33' => "г2",
	'34' => "д2",
	'35' => "е2",
	'36' => "ж2",
	'37' => "з2",
	'38' => "и2",
	'39' => "к2",
	'40' => "л2",
	'41' => "м2",
	'42' => "н2",
	'43' => "о2",
	'44' => "п2",
	'45' => "р2",
	'46' => "с2",
	'47' => "т2",
	'48' => "у2",
	'49' => "ф2",
	'50' => "х2",
	'51' => "ц2",
	'52' => "ч2",
	'53' => "ш2",
	'54' => "щ2",
	'55' => "ы2",
	'56' => "э2",
	'57' => "ю2",
	'58' => "я2",
	'59' => "а3",
	'60' => "б3",
	'61' => "в3",
	'62' => "г3",
	'63' => "д3",
	'64' => "е3",
	'65' => "ж3",
	'66' => "з3",
	'67' => "и3",
	'68' => "к3",
	'69' => "л3",
	'70' => "м3",
	'71' => "н3",
	'72' => "о3",
	'73' => "п3",
	'74' => "р3",
	'75' => "с3",
	'76' => "т3",
	'77' => "у3",
	'78' => "ф3",
	'79' => "х3",
	'80' => "ц3",
	'81' => "ч3",
	'82' => "ш3",
	'83' => "щ3",
	'84' => "ы3",
	'85' => "э3",
	'86' => "ю3",
	'87' => "я3",
	'88' => "1",
	'89' => "2",
	'90' => "3",
	'91' => "4",
	'92' => "5",
	'93' => "6",
	'94' => "7",
	'95' => "8",
	'96' => "9");

// ASSIGN ALL SMARTY GENERAL VARIABLES
foreach ($header_education as $key=>$val) {
  $smarty->assign("header_education".$key, $val);
}


// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "user_education":
    $user_education[1] = "Мое образование";
    $user_education[2] = "Вы можете управлять анкетой используя форму ниже.";
    $user_education[3] = "Вы уверены?";
    $user_education[4] = "Добавить новую школу (имя не обязательно)";
    $user_education[5] = "Удалить";
    $user_education[6] = "Вуз или номер школы";
    $user_education[7] = "Тип образования";
    $user_education[8] = "Год начала";
    $user_education[9] = "Факультет:";
    $user_education[10] = "Кафедра:";
    $user_education[11] = "Форма обучения:";
    $user_education[12] = "Статус:";
    $user_education[13] = "Сохранить изменения";
    $user_education[14] = "Изменения сохранены.";
    break;
	
case "admin_levels_educationsettings":
	$admin_levels_educationsettings[1] = "Настроики образования";
	$admin_levels_educationsettings[2] = "Эсли вы разрешите эту опцию у ваших пользователей будет возможность добавления и настроек параметров образования.";
	$admin_levels_educationsettings[3] = "Разрешить образование?";
	$admin_levels_educationsettings[4] = "Если Вы выбрали ДА, у Ваших пользователей будет выбор создания educations. Отметьте, что, если Вы переключаете это от ДА до НЕ, пользователи потеряют любой поток educations, они имеют.";
	$admin_levels_educationsettings[5] = "Да пользователи могут создавать Образование.";
	$admin_levels_educationsettings[6] = "Нет пользователи не могут создавать образование.";
	$admin_levels_educationsettings[7] = "Сохранить изменения";
	$admin_levels_educationsettings[8] = "Ваши изменения сохранены.";
	$admin_levels_educationsettings[9] = "Редактировать уровень пользователя:";
	$admin_levels_educationsettings[10] = "Вы в настоящее время редактируете эти пользовательские параметры настройки уровня. Помните, эти параметры настройки только относятся к пользователям, которые принадлежат этому пользовательскому уровню. Когда Вы закончены, Вы можете отредактировать <href ='admin_levels.php'> другие уровни здесь </a>.";

	break;
    
}

// ASSIGN ALL SMARTY VARIABLES
if (is_array(${"$page"})) {
  foreach (${"$page"} as $key=>$val) {
    $smarty->assign($page.$key, $val);
  }
}

