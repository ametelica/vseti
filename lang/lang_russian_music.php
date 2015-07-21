<?
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_music[1] = 'Музыка';
$header_music[2] = 'смотреть все';
$header_music[3] = 'Без названия';
$header_music[4] = 'зайчика';
$header_music[5] = ' Музыка';
 
// ASSIGN ALL SMARTY GENERAL poll VARIABLES
reset($header_music);
while(list($key, $val) = each($header_music)) {
  $smarty->assign('header_music'.$key, $val);
}


// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$functions_music[1] = 'опросы';
$functions_music[2] = 'Создан ';
$functions_music[3] = 'Опрос без названия';



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case 'user_music_edit':
	$user_music_edit[1] = 'Мой Плейлист';
	$user_music_edit[2] = 'Это песни, которые Вы загрузили в свой список воспроизведения. Люди могут прослушивать их из Вашего профиля';
	$user_music_edit[3] = 'Введите новое название песни, затем нажмите Обновить Песню, чтобы сделать изменения';
	$user_music_edit[4] = 'Редактировать Музыку';
	$user_music_edit[5] = 'Настройки Музыки';
	$user_music_edit[6] = 'Трэк #';
	$user_music_edit[7] = 'Название песни';
	$user_music_edit[8] = 'Размер';
	$user_music_edit[9] = 'Опции';
	$user_music_edit[10] = 'на верх';
	$user_music_edit[11] = 'изменить';
	$user_music_edit[12] = 'удалить';
	$user_music_edit[13] = 'Загрузить Новые Песни';
	$user_music_edit[14] = 'У Вас нет никакой музыки';
	break;

  case 'user_music_upload':
	$user_music_upload[1] = 'Загрузить Новую Музыку';
	$user_music_upload[2] = 'Найдите музыкальные файлы на Вашем компьютере и загрузите их в Ваш список воспроизведения.';
	$user_music_upload[3] = 'Назад к Списку';
	$user_music_upload[4] = 'Вы можете загружать файлы размером до';
	$user_music_upload[5] = 'Вы можете загружать файлы следующих типов:';
	$user_music_upload[6] = 'У Вас';
	$user_music_upload[7] = 'MБ оставшегося свободного места';
	$user_music_upload[8] = 'Файл: ';
	$user_music_upload[9] = 'Файл 2 ';
	$user_music_upload[10] = 'Файл 3 ';
	$user_music_upload[11] = 'Файл 4 ';
	$user_music_upload[12] = 'Файл 5 ';
	$user_music_upload[13] = 'Назад к Списку';
	$user_music_upload[14] = 'Файл ';
	$user_music_upload[15] = ' был успешно загружен';
	$user_music_upload[16] = ' невозможно загрузить, пожалуйста, попробуйте еще раз позднее';
	$user_music_upload[17] = "Вам, возможно, предлогали загрузить или установаить Java Applet. Если так, то нажмите 'Да' или 'OK' для разрешения.";
	$user_music_upload[18] = "Если файловый загрузчик не появится через 10-15 секунд, <a href=\"#\" onclick=\"javascript:showBasic(); return false;\">нажмите сюда</a> для использования основного файлового загрузчика";
	$user_music_upload[19] = "<img src='images/icons/music_working.gif' style='vertical-align:middle'>&nbsp;Пожалуйста, подождите пока загрузиться апплет";
	$user_music_upload[20] = "&nbsp;Ваша песня загружается, пожалуйста не закрывайте эту страницу. Вас уведомят, когда завешится загрузка.";
	$user_music_upload[21] = 'Загрузить Песню';
	break;
	
  case "music_upload":
        $music_upload[1] = "Музыка не разрешена для этого пользователя";
        $music_upload[2] = "Файл ";
        $music_upload[3] = " был загружен успешно";
        $music_upload[4] = "невозможно загрузить, пожалуйста попробуйте еще раз позже";
        $music_upload[5] = "Неизвестная ошибка, пожалуйста попробуйте еще раз позже";
        break;
  
  case "user_music_upload_frame":
	$user_music_upload_frame[1] = "Загрузить аудио";
	$user_music_upload_frame[2] = "Добавить аудио";
	$user_music_upload_frame[3] = "Очистить список";
	$user_music_upload_frame[4] = "Обший прогресс";
	$user_music_upload_frame[5] = "Загрузка файла";
	$user_music_upload_frame[6] = "Выберите запись для загрузки";
	$user_music_upload_frame[7] = "Загрузка завершена";
        break;

  case "user_music_delete":
	$user_music_delete[1] = "Удалить запись?";
	$user_music_delete[2] = "Вы уверены что хотите удалить эту запись?";
	$user_music_delete[3] = "Удалить запись";
	$user_music_delete[4] = "Отмена";
	$user_music_delete[5] = "Редактировать аудио";
	$user_music_delete[6] = "Настройки";
	break;
	
  case 'user_music_settings':
	$user_music_settings[1] = 'Изменение Настроек Музыки';
	$user_music_settings[2] = 'Измените музыкальный плейер в Вашем профиле с помощью этих настроек.';
	$user_music_settings[3] = 'Добавить Музыку';
	$user_music_settings[4] = 'Изменить Музыку';
	$user_music_settings[5] = 'Настройки Музыки';
	$user_music_settings[6] = 'Скины';
	$user_music_settings[7] = 'Предварительный Просмотр';
	$user_music_settings[8] = 'Название Скина';
	$user_music_settings[9] = 'Воспроизводить музыку в профиле автоматически?';
	$user_music_settings[10] = 'Да, запускать музыку автоматически, когда люди посещают мой профиль.';
	$user_music_settings[11] = 'Нет, посетители должны нажать кнопку воспроизведения для прослушивания.';
	$user_music_settings[12] = 'Воспроизводить музыку в профилях других пользователей автоматически?';
	$user_music_settings[13] = 'Да, запускать музыку автоматически, когда я посещаю профили других пользователей.';
	$user_music_settings[14] = 'Нет, отключить автоматический запуск музыки, когда я посещаю профили других пользователей.';
	$user_music_settings[15] = 'Сохранить Изменения';
	break;
  
  case 'admin_viewmusic':
  	$admin_viewmusic[1] = 'Отобразить музыку пользователя';
  	$admin_viewmusic[2] = 'Эта страница отображает всю музыку, которую загрузили Ваши пользователи. Вы можете использовать эту страницу для отображения пользовательской музыки или для её удаления. Вводя критерии в фильтрационные поля вы поможете себе искать специальную музыку. Оставляя фильтрационные поля пустыми вы увидите всю музыку Вашего сайта.';
  	$admin_viewmusic[3] = 'ID';
  	$admin_viewmusic[4] = 'Заголовок';
  	$admin_viewmusic[5] = 'Владелец';
  	$admin_viewmusic[6] = 'Дата';
  	$admin_viewmusic[7] = 'Опции';
  	$admin_viewmusic[8] = 'удалить';
  	$admin_viewmusic[9] = 'превью';
  	$admin_viewmusic[10] = 'Всего трэков';
  	$admin_viewmusic[11] = 'Страницы';
  	$admin_viewmusic[12] = 'Здесь нет музыкальных дорожек';
  	$admin_viewmusic[13] = 'Фильтр';
  	$admin_viewmusic[14] = 'Удалить выбранные';
  	$admin_viewmusic[15] = 'Удалить песню';
  	$admin_viewmusic[16] = 'Вы уверены, что хотите удалить выбранные песни?';
  	$admin_viewmusic[17] = 'Отмена';
  	break;

  case 'admin_levels_musicsettings':
  	$admin_levels_musicsettings[1] = 'Настройки музыки';
  	$admin_levels_musicsettings[2] = 'Если вы разрешили пользователям добавлять песни на страницы их профилей, то здесь Вы можете уточнить настройки.';
  	$admin_levels_musicsettings[3] = 'Разрешить музыку?';
  	$admin_levels_musicsettings[4] = 'Хотите ли вы разрешить пользователям добавлять музыку на страницы их профилей?';
  	$admin_levels_musicsettings[5] = 'Да, разрешить музыку';
  	$admin_levels_musicsettings[6] = 'Нет, не добавлять музыку';
  	$admin_levels_musicsettings[7] = 'Максимальное количество файлов';
  	$admin_levels_musicsettings[8] = 'Введите максимальное количество музыкальных файлов. Это поле должно содержать цифры от 1 до 999.';
  	$admin_levels_musicsettings[9] = 'разрешённые песни';
  	$admin_levels_musicsettings[10] = 'Разрешённые расширения файлов';
  	$admin_levels_musicsettings[11] = 'Список расширений файлов, доступных для загрузки пользователями. Разделять файловые расширения запятыми , например: mp3, wma';
  	$admin_levels_musicsettings[12] = 'Разрешенные MIME типы';
  	$admin_levels_musicsettings[13] = 'Для успешной загрузки файла, файл должен иметь разрешённые расширения, а также разрешённые MIME типы. Это предотвращает загрузку замаскированных злокачествееных файлов с подделанными расширениями. Разделяйте MIME типы запятыми, например: image/jpeg, image/gif, image/png, image/bmp';
  	$admin_levels_musicsettings[14] = 'Разрешённое пространство для хранения';
  	$admin_levels_musicsettings[15] = 'Какой объем для хранения своих файлов будет иметь каждый пользователь?';
  	$admin_levels_musicsettings[16] = 'Максимальный размер файла';
  	$admin_levels_musicsettings[17] = 'Введите максимальный размер файла для загрузки в KB. Это должно быть число между 1 и 204800.';
  	$admin_levels_musicsettings[18] = 'Сохранить изменения';
  	$admin_levels_musicsettings[19] = 'Изменить ранг пользователя';
  	$admin_levels_musicsettings[20] = "Вы успешно изменили пользовательские настройки. Помните, они применимы только к юзерам, которые принадлежат этому рангу. Когда вы закончите вы можете <a href='admin_levels.php'>редактировать иные пользовательские настройк здесь</a>.";
  	$admin_levels_musicsettings[21] = 'Ваши изменения быль сохранены';
  	$admin_levels_musicsettings[22] = 'Поле Максимальный размер файла должно содержать значения между 1 и 204800.';
  	$admin_levels_albumsettings[23] = 'Поле Максимальное количество песен должно содержать значения между 1 и 999.';
  	$admin_levels_musicsettings[24] = 'Разрешить скины?';
  	$admin_levels_musicsettings[25] = 'Могут ли пользователи сами выбирать скин оформления?';
  	$admin_levels_musicsettings[26] = 'Да, разрешить скины';
  	$admin_levels_musicsettings[27] = 'Нет, не разрешать скины';
  	$admin_levels_musicsettings[28] = 'Скин по умолчанию:';
  	$admin_levels_musicsettings[29] = "превью";
  	break;
}
// ASSIGN ALL SMARTY VARIABLES
if(!empty(${"$page"}) and is_array(${"$page"})) {
  reset(${"$page"});
  while(list($key, $val) = each(${"$page"})) {
    $smarty->assign($page.$key, $val);
  }
}
?>
