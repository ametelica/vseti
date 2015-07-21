<?php

// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_employment[1] = "Работа";
$header_employment[2] = "Управление работой";
$header_employment[3] = "Янв,Фев,Март,Апр,Май,Июнь,Июль,Авг,Сент,Окт,Ноя,Дек"; // drop down attended month
$header_employment[4] = "Работодатель:";
$header_employment[5] = "Должность:";
$header_employment[6] = "Описание работы:";
$header_employment[7] = "Место";
$header_employment[8] = "Период работы:";
$header_employment[9] = "сегодняшний день";
$header_employment[10] = "по";
$header_employment[11] = "Место работы:";

// ASSIGN ALL SMARTY GENERAL VARIABLES
foreach ($header_employment as $key=>$val) {
  $smarty->assign("header_employment".$key, $val);
}


// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "user_employment":
    $user_employment[1] = "Моя карьера";
    $user_employment[2] = "Вы можете управлять этой анкетой используя форму ниже.";
    $user_employment[3] = "Вы уверены?";
    $user_employment[4] = "Добавьте новую карьеру (имя не обязательно)";
    $user_employment[5] = "Удалить";
    $user_employment[6] = "Место работы:";
    $user_employment[7] = "Должность:";
    $user_employment[8] = "Описание работы:";
    $user_employment[9] = "Место:";
    $user_employment[10] = "Время/Период работы:";
    $user_employment[11] = "Работаю в настоящее время.";
    $user_employment[12] = "по";
    $user_employment[13] = "Сохранить изменения";
    $user_employment[14] = "Изменения сохранены.";
    $user_employment[15] = "Месяц:";
    $user_employment[16] = "Год:";
    $user_employment[17] = "сегодняшний день";
    break;
	
case "admin_levels_employmentsettings":
	$admin_levels_employmentsettings[1] = "Employment Settings";
	$admin_levels_employmentsettings[2] = "If you have enabled employments, your users will have the option of creating employments. Use this page to configure your employment settings.";
	$admin_levels_employmentsettings[3] = "Allow Employments?";
	$admin_levels_employmentsettings[4] = "If you have selected YES, your users will have the option of creating employments. Note that if you switch this from YES to NO, users will lose any current employments they have.";
	$admin_levels_employmentsettings[5] = "Yes, users can create employments.";
	$admin_levels_employmentsettings[6] = "No, users cannot create employments.";
	$admin_levels_employmentsettings[7] = "Save Changes";
	$admin_levels_employmentsettings[8] = "Your changes have been saved.";
	$admin_levels_employmentsettings[9] = "Editing User Level:";
	$admin_levels_employmentsettings[10] = "You are currently editing this user level's settings. Remember, these settings only apply to the users that belong to this user level. When you're finished, you can edit the <a href='admin_levels.php'>other levels here</a>.";

	break;
}

// ASSIGN ALL SMARTY VARIABLES
if (is_array(${"$page"})) {
  foreach (${"$page"} as $key=>$val) {
    $smarty->assign($page.$key, $val);
  }
}

