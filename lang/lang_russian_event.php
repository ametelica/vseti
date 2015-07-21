<?
//############# Translated by Gooos for event v.2.2 #######################
//
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_event[1] = "События";
$header_event[2] = "Календарь";

// ASSIGN ALL SMARTY GENERAL EVENT VARIABLES
reset($header_event);
while(list($key, $val) = each($header_event)) {
  $smarty->assign("header_event".$key, $val);
}



// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$functions_event[1] = "Каждый";
$functions_event[2] = "Все зарегистрированные пользователи";
$functions_event[3] = "Только приглашённые пользователи, их друзья, и друзья их друзей";
$functions_event[4] = "Только приглашённые пользователи и их друзья";
$functions_event[5] = "Только приглашённые пользователи и друзья создателя события";
$functions_event[6] = "Только приглашённые пользователи";
$functions_event[7] = "Только создатель события";
$functions_event[8] = "Никто";
$functions_event[9] = "События";
$functions_event[10] = "Фото события: ";
$functions_event[11] = " приглашение на новое событие";

$class_event[1] = "У Вас не достаточно места для загрузки файла";



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_event":
	$admin_event[1] = "Общие настройки параметров событий";
	$admin_event[2] = "Эта страница содержит общие настройки параметров событий, которые затрагивают всю Вашу социальную сеть.";
	$admin_event[3] = "Ваши изменения были сохранены.";
	$admin_event[4] = "Тема";
	$admin_event[5] = "Сообщение";
	$admin_event[6] = "Приглашение на событие";
	$admin_event[7] = "Это письмо отправится для пользователей, когда они будут приглашены для участия в событиях. Чтобы узнать больше об электронных сообщениях системы, пожалуйста, посетите страницу <a href='admin_emails.php'>Системные сообщения</a>.";
	$admin_event[8] = "[username] - заменяется на имя пользователя получателя.<br>[eventname] - заменяется названием события.<br>[link] - заменяется на ссылку для входа.";
	$admin_event[9] = "Изменения сохранены";
	$admin_event[10] = "Общедоступность по умолчанию";
	$admin_event[11] = "Выберите, хотели ли бы Вы разрешить общественности (посетителям, которые не зарегистрированы) просмотр следующих разделов Вашей социальной сети. В некоторых случаях (например: профили, блоги и Альбомы), если Вы дали им возможность, пользователи смогут сделать свои страницы частным, даже если открыт широкий доступ здесь. Для получения дополнительных настроек, пожалуйста, посетите страницу <a href='admin_general.php'>Общие настройки</а>.";
	$admin_event[12] = "События";
	$admin_event[13] = "Да, общественность может просматривать события, кроме закрытых.";
	$admin_event[14] = "Нет, общественность не может просматривать события.";
	$admin_event[15] = "Новые комментарии в событиях";
	$admin_event[16] = "Это письмо отправится пользователям, когда будет размещен новый комментарий к событию, которое они создали. Чтобы узнать больше об электронных сообщениях системы, пожалуйста, посетите страницу <a href='admin_emails.php'>Системные сообщения</a>.";
	$admin_event[17] = "[username] - заменяется на имя пользователя получателя.<br>[commenter] - заменяется на имя пользователя, который разместил комментарий.<br>[eventname] - заменяется на имя события.<br>[link] - заменяется на ссылку данного события.";
	$admin_event[18] = "Новые комментарии к фото и медиафайлам в событиях";
	$admin_event[19] = "Это письмо отправится пользователям, когда будет размещен новый комментарий к одной из фотографий относительно события, которое они создали. Чтобы узнать больше об электронных сообщениях системы, пожалуйста, посетите страницу <a href='admin_emails.php'>Системные сообщения</a>.";
	$admin_event[20] = "[username] - заменяется на имя пользователя получателя.<br>[commenter] - заменяется на имя пользователя, который разместил комментарий.<br>[eventname] - заменяется на имя события.<br>[link] - заменяется на ссылку данного фото.";
	$admin_event[21] = "Категории событий";
	$admin_event[29] = "Вы можете разрешить пользователям классифицировать события по тематическим категориям - тематика, местоположение и т.д. Классификация событий облегчит пользователям поиск и присоединение к тем событиям, которые их интересуют. Если Вы хотите разрешить категории в событиях, то можете создать их (наряду с подкатегориями).";
	$admin_event[23] = "Добавить категорию";
	$admin_event[24] = "Добавить субкатегорию";



	$admin_event[28] = "Приглашение на событие";
	$admin_event[22] = "Это письмо отправится пользователям, когда кто - то просит участия в событии, которое они создали. Чтобы узнать больше об электронных сообщениях системы, пожалуйста, посетите страницу <a href='admin_emails.php'>Системные сообщения</a>.";
	$admin_event[30] = "[username] - заменяется на имя пользователя получателя.<br>[requester] - заменяется на имя пользователя, который обращается с просьбой на участие.<br>[eventname] - заменяется на имя события.<br>[link] - заменяется на ссылку для входа.";
	break;

case "admin_levels_eventsettings":
	$admin_levels_eventsettings[1] = "Настройки событий";
	$admin_levels_eventsettings[2] = "Если Вы включили, события, то Ваши пользователи смогут создавать события и приглашать пользователей. Используйте эту страницу, чтобы сформировать Ваши параметры событий.";
	$admin_levels_eventsettings[3] = "Включить события?";
	$admin_levels_eventsettings[4] = "Если Вы выбрали, \"ДА\", пользователи будут иметь возможность создавать события и приглашать пользователей. Заметим, что, если Вы измените \"ДА\"  на  \"НЕТ\", то пользователи потеряют все свои текущие участия в событиях, и сами события.";
	$admin_levels_eventsettings[5] = "Да, пользователи могут создавать события.";
	$admin_levels_eventsettings[6] = "Нет, пользователи не могут создавать события.";
	$admin_levels_eventsettings[7] = "Сохранить изменения";
	$admin_levels_eventsettings[8] = "Ваши изменения были сохранены.";
	$admin_levels_eventsettings[9] = "Фотография (иконка) события?";
	$admin_levels_eventsettings[10] = "Если эта функция включена, пользователи смогут загрузить небольшую фотографию (иконку) при создании или редактировании события. Фотография будет размещена рядом с именем события, на страницах пользователей, в поиске/просмотре результатов поиска и т.д..";
	$admin_levels_eventsettings[11] = "Да, пользователи могут загрузить картинку, когда они создают или редактируют события";
	$admin_levels_eventsettings[12] = "Нет, пользователи не могут загрузить картинку, когда они создают или редактируют события.";
	$admin_levels_eventsettings[13] = "Если Вы выбрали \"ДА\", то пожалуйста, введите максимальные размеры для фотографии события. Если Ваши пользователи загружают фотографии по размерам больше, чем Вы указали, то сервер масштабирует их автоматически, если на Вашем сервере установлена GD библиотека.";
	$admin_levels_eventsettings[14] = "Макс. ширина:";
	$admin_levels_eventsettings[15] = "(в пикселах, целое число от 1 до 9999)";
	$admin_levels_eventsettings[16] = "Mакс. высота:";
	$admin_levels_eventsettings[17] = "Какие типы файлов Вы хотите разрешить для загрузки пользователями фотографий (gif, jpg, jpeg, или png)? Отделяйте типы файлов запятыми, то есть <i> jpg, jpeg, gif, png</i>";
	$admin_levels_eventsettings[18] = "Разрешенные типы файлов:";
	$admin_levels_eventsettings[19] = "<b>Поиск - параметры конфиденциальности.</b><br>Если эта функция включена, создатели событий будут иметь возможность исключать их мероприятие из результатов поиска. В противном случае, все события будут включены в результаты поиска.";
	$admin_levels_eventsettings[20] = "Да, разрешить создателям событий, исключать их события из результатов поиска.";
	$admin_levels_eventsettings[21] = "Нет, включить все события в результаты поиска.";
	$admin_levels_eventsettings[22] = "Опции секретности события";
	$admin_levels_eventsettings[23] = "Редактирование уровней пользователя:";
	$admin_levels_eventsettings[24] = "Вы в настоящее время редактируете настройки данных пользовательских уровней. Помните, что эти настройки применяются только к пользователям, которые относятся к данному пользовательскому уровню. Когда Вы закончите, то можете редактировать <a href='admin_levels.php'>другие уровни</a>.";
	$admin_levels_eventsettings[25] = "<b>Секретность события</b><br>Сздатели событий могут выбрать любой из вариантов ниже, когда они решают, кто может видеть их события. Если Вы не измените опции, то каждый будет иметь возможность просматривать события.";
	$admin_levels_eventsettings[26] = "<b>Комментярии в событии</b><br>Сздатели событий могут выбрать любой из вариантов ниже, когда они решают, кто может оставлять комментарий в событии. Если Вы не измените опции, то каждый будет иметь возможность оставлять комментарий в событии.";
	$admin_levels_eventsettings[27] = "События только по приглашению?";
	$admin_levels_eventsettings[28] = "Вы хотите дать создателям события возможность принимать пользрвателей в событие только по приглашениям? Если установлено в \"ДА\", то создатели события смогут установить опцию - \"только приглашенный\". Это означает, что только приглашенные пользователи будут в состоянии ОТВЕТИТЬ НА ПРИГЛАШЕНИЕ к событию, а незваные пользователи будут должны просить приглашения.";
	$admin_levels_eventsettings[29] = "Да, события только по приглашению.";
	$admin_levels_eventsettings[30] = "Нет, события без приглашений.";
	$admin_levels_eventsettings[31] = "Разрешить пользовательские CSS стили?";
	$admin_levels_eventsettings[32] = "Если эта функция включена, пользователи смогут настраивать цвета и шрифты в своих событиях, изменяя их стиль CSS. ";
	$admin_levels_eventsettings[33] = "Да, разрешить пользовательские стили.";
	$admin_levels_eventsettings[34] = "Нет, не разрешать пользовательские стили.";
	$admin_levels_eventsettings[35] = "Разрешённые типы файлов";
	$admin_levels_eventsettings[36] = "Список следующих расширений файлов, которые пользователи могут загрузить. Отдельные расширений файлов разделяются запятыми, например: jpg, gif, jpeg, png, bmp";
	$admin_levels_eventsettings[37] = "Чтобы успешно загрузить файл, он должен иметь разрешённое расширение так же как и разрешённый тип MIME. Это препятствует пользователям маскировать злонамеренные файлы с поддельным расширением. Отдельные типы MIME разделяются запятыми, например: image/jpeg, image/gif, image/png, image/bmp";
	$admin_levels_eventsettings[38] = "Сколько свободного пространства необходимо иметь каждому пользователю, что-бы хранить свои файлы?";
	$admin_levels_eventsettings[39] = "Без лимита";
	$admin_levels_eventsettings[40] = "Введите максимальный размер для загружаемых файлов в КБ. Это должна быть величина между 1 и 204800.";
	$admin_levels_eventsettings[41] = "Введите ширину и высоту (в пикселях) картинок, загруженных в альбомы. Изображения с размерами вне этого диапазона будут уменьшены соответственно, если Вашем сервере установлена GD библиотека. Заметим, что необычное изображение типа TIFF, RAW, а другие не могут быть изменены.";
	$admin_levels_eventsettings[42] = "Макс. ширина:";
	$admin_levels_eventsettings[43] = "Макс. высота:";
	$admin_levels_eventsettings[44] = "(в пикселах, целое число от 1 до 9999)";



	$admin_levels_eventsettings[48] = "Ширина и высота фото, поле должно содержать целые числа от 1 до 999.";
	$admin_levels_eventsettings[49] = "Мксимальный размер файла, поле должно содержать целые числа от 1 до 204800.";
	$admin_levels_eventsettings[50] = "Максимальная ширина и высота, поле должно содержать целые числа от 1 до 9999.";
	break;

case "admin_viewevents":
	$admin_viewevents[1] = "Просмотреть события";
	$admin_viewevents[2] = "На этой странице перечислены все события, которые пользователи создали в Вашей социальной сети. Вы можете использовать эту страницу, чтобы контролировать эти события и удалять оскорбительные или нежелательные материалы в случае необходимости. Ввод критериев в поле фильтра поможет Вам найти определенные события. Если оставить поле фильтра пустым то, будут показаны все события в Вашей социальной сети.";
	$admin_viewevents[3] = "Заголовок";
	$admin_viewevents[4] = "Создатель";
	$admin_viewevents[5] = "Фильтр";
	$admin_viewevents[6] = "ID";
	$admin_viewevents[7] = "Заголовок";
	$admin_viewevents[8] = "Создатель";

	$admin_viewevents[10] = "Дата события";
	$admin_viewevents[11] = "Опции";
	$admin_viewevents[12] = "просмотр";
	$admin_viewevents[13] = "удалить";
	$admin_viewevents[14] = "Найденные события";
	$admin_viewevents[15] = "Страница:";
	$admin_viewevents[16] = "Удалить события";
	$admin_viewevents[17] = "Вы уверены, что хотите удалить это событие?";
	$admin_viewevents[18] = "Отмена";
	$admin_viewevents[19] = "События не найдены.";
	$admin_viewevents[20] = "Удалить выбранное";
	break;

  case "event":
	$event[1] = "Вы не имеете разрешения просматривать это событие.";
	$event[2] = "Приглашённые гости";
	$event[3] = "Запросить приглашение";
	$event[4] = "Перейти к этому событию";
	$event[5] = "Статистика события";
	$event[6] = "Создатель события:";
	$event[7] = "Просмотров:";
	$event[8] = "раз(а)";
	$event[9] = "Приглашено:";
	$event[10] = "гостя(ей)";
	$event[11] = "Фотографии:";
	$event[12] = "фото";
	$event[13] = "Последнее обновление:";
	$event[14] = "Информация события";
	$event[15] = "Имя cобытия:";
	$event[16] = "Описание:";
	$event[17] = "Категория:";
	$event[18] = "Подтвержденные гости";
	$event[19] = "просмотр всех подверждённых гостей";
	$event[20] = "Время/Дата:";
	$event[21] = "Фотографии";
	$event[22] = "просмотр всех фотографий";
	$event[23] = "Комментарии";
	$event[24] = "Отправить комментарий";
	$event[25] = "просмотреть все комментарии";
	$event[26] = "Анонимный";
	$event[27] = "сообщение";
	$event[28] = "Произошла ошибка";
	$event[29] = "Обзор фотографий";
	$event[30] = "Вы должны войти для просмотра этой страницы. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$event[31] = "Напишите что-нибудь...";
	$event[32] = "Добавление...";
	$event[33] = "Пожалуйста введите сообщение.";
	$event[34] = "Вы ввели неправильный секретный код.";
	$event[35] = " | ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$event[36] = "Введите цифры, которые Вы видите на этом изображении, в поле справа. Это помогает защитить наш сайт от спама.";
	$event[37] = "Приватное событие";
	$event[38] = "Пожаловаться на событие";
	$event[39] = "Назад";
	$event[40] = "ответить";
	$event[41] = "Событие которое Вы ищете, было удалено или не существует.";
	$event[42] = "Другие гости";
	$event[43] = "Может быть придут";
	$event[44] = "Не придут";
	$event[45] = "В ожидание ответа";
	$event[46] = "до";
	$event[47] = "RSVP к этому событию";
	$event[48] = "Изменить Ваш RSVP";
	$event[49] = "Отменить событие";
	$event[50] = "Удалить из моих событий";
	$event[51] = " | ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$event[52] = "Ожидание приглашения...";
	$event[53] = "Отменить запрос приглашения";
	$event[54] = "Принимающая сторона:";
	$event[55] = "Расположение:";
	break;

  case "event_album":
	$event_album[1] = "Вы не имеете разрешения смотреть этот альбом.";
	$event_album[2] = " - Фото";
	$event_album[3] = "Произошла ошибка";
	$event_album[4] = "Вы должны войти на сайт, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы Войти.";
	$event_album[5] = "Предыдущая страница";
	$event_album[6] = "просмотр фото";
	$event_album[7] = "из";
	$event_album[8] = "просмотр фото";
	$event_album[9] = "Следующая страница";
	$event_album[10] = "Назад";
	break;

  case "event_album_file":
	$event_album_file[1] = "У вас нет разрешения смотреть этот файл.";
	$event_album_file[2] = " - Фото";
	$event_album_file[3] = "Без имени";
	$event_album_file[4] = "фотографии";
	$event_album_file[5] = "загрузить audio";
	$event_album_file[6] = "загрузить video";
	$event_album_file[7] = "загрузить этот файл";
	$event_album_file[8] = "Вернуться к";
	$event_album_file[9] = " - Альбом";
	$event_album_file[10] = "Комментарий";
	$event_album_file[11] = "Сообщить о непристойном содержании";
	$event_album_file[12] = "Комментарии";
	$event_album_file[13] = "на";
	$event_album_file[14] = "Аноним";
	$event_album_file[15] = "Произошла ошибка";
	$event_album_file[16] = "By";
	$event_album_file[17] = "Вы должны войти чтобы посмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы Войти.";
	$event_album_file[18] = "Напишите что-нибудь...";
	$event_album_file[19] = "Добавление...";
	$event_album_file[20] = "Пожалуйста введите сообщение.";
	$event_album_file[21] = "Вы ввели неправильный секретный код.";
	$event_album_file[22] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$event_album_file[23] = "сообщение";
	$event_album_file[24] = "Введите цифры, которые Вы видите на этом изображении, в поле справа. Это помогает защитить наш сайт от спама.";
	$event_album_file[25] = "Назад";
	break;

  case "event_comments":
	$event_comments[1] = "сообщение";
	$event_comments[2] = " | ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$event_comments[3] = "Комментарии о";

	$event_comments[5] = "Вернуться к";

	$event_comments[7] = "Предыдущая страница";
	$event_comments[8] = "просмотр комментариев";
	$event_comments[9] = "из";
	$event_comments[10] = "просмотр комментариев";
	$event_comments[11] = "Следующая страница";
	$event_comments[12] = "Анонимный";

	$event_comments[14] = "Напишите что-нибудь...";
	$event_comments[15] = "Добавление...";
	$event_comments[16] = "Пожалуйста введите сообщение.";
	$event_comments[17] = "Вы ввели неправильный секретный код.";
	$event_comments[18] = "Написать комментарий";
	$event_comments[19] = "Введите цифры, которые Вы видите на этом изображении, в поле справа. Это помогает защитить наш сайт от спама.";
	$event_comments[20] = "Произошла ошибка";

	$event_comments[22] = "Вы должны войти чтобы посмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы Войти.";
	$event_comments[23] = "Назад";
	break;

  case "event_members":
	$event_members[1] = "Гостевой лист для события ";
	$event_members[2] = "Следующие люди были приглашены на событие ";
	$event_members[3] = "Предыдущая страница";
	$event_members[4] = "просмотр гостей";
	$event_members[5] = "из";
	$event_members[6] = "просмотр гостей";
	$event_members[7] = "Следующая страница";
	$event_members[8] = "Пользователь:";
	$event_members[9] = "Обновлено:";
	$event_members[10] = "Последнее посещение:";
	$event_members[11] = "Просмотр профиля";
	$event_members[12] = "Добавить в друзья";
	$event_members[13] = "Отправить сообщение";
	$event_members[14] = "Произошла ошибка";
	$event_members[15] = "Вы должны войти чтобы посмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы Войти.";
	$event_members[16] = "Назад";
	$event_members[17] = "Просмотр гостей:";
	$event_members[18] = "Все приглашенные";
	$event_members[19] = "Приду обязательно";
	$event_members[20] = "Может быть приду";
	$event_members[21] = "Нет не приду";
	$event_members[22] = "Ожидание ответа";
	$event_members[23] = "Подтвердить";
	$event_members[24] = "Гостей не найдено.";
	$event_members[25] = "RSVP:";
	break;

  case "profile_event_calendar":
	$profile_event_calendar[1] = " - события на";
	$profile_event_calendar[2] = "закрыть";
	$profile_event_calendar[3] = "Когда:";
	$profile_event_calendar[4] = "до";
	$profile_event_calendar[5] = "Просмотр события";
	$profile_event_calendar[6] = "Принимающая сторона:";
	$profile_event_calendar[7] = "RSVP:";
	$profile_event_calendar[8] = "Приду обязательно";
	$profile_event_calendar[9] = "Может быть приду";
	$profile_event_calendar[10] = "Нет не приду";
	$profile_event_calendar[11] = "Ожидание ответа";
	$profile_event_calendar[12] = " - RSVP:";
	$profile_event_calendar[13] = " | ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_event":
	$user_event[1] = "Мои cобытия";
	$user_event[2] = "закрыть";
	$user_event[3] = "Обзор cобытий";
	$user_event[4] = "Мои cобытия";
	$user_event[5] = "Здесь отображены все cобытия, созданные Вами, а так же те сбытия, куда Вы были приглашены другими участниками.<br>Для обзора cобытий, перейдите на ";
	$user_event[6] = "Страницу обзора cобытий";
	$user_event[7] = "Создать новое cобытие";
	$user_event[8] = "У вас нет cобытий в этом месяце.";
	$user_event[9] = "Оказал приём:";
	$user_event[10] = "Категория:";
	$user_event[11] = "Где:";
	$user_event[12] = "RSVP";
	$user_event[13] = "Редактировать событие";
	$user_event[14] = "Отменить событие";
	$user_event[15] = "Настройки событий";
	$user_event[16] = "Когда:";
	$user_event[17] = "Ваш RSVP:";
	$user_event[18] = "Ожидание ответа";
	$user_event[19] = "Приду обязательно";
	$user_event[20] = "Может быть приду";
	$user_event[21] = "Нет не приду";
	$user_event[22] = "Удалить событие";
	$user_event[23] = "до";
	$user_event[24] = "Понедельник";
	$user_event[25] = "Вторник";
	$user_event[26] = "Среда";
	$user_event[27] = "Четверг";
	$user_event[28] = "Пятница";
	$user_event[29] = "Суббота";
	$user_event[30] = "Воскресенье";
	$user_event[31] = "Просмотр события";
	$user_event[32] = "событие(я) ожидающие Вашего ответа.";
	$user_event[33] = "RSVP к событию";
	$user_event[34] = "Событие(я) ожидающие Вашего ответа";
	$user_event[35] = "Принимающая сторона:";
	$user_event[36] = " с ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_event_add":
	$user_event_add[1] = "Пожалуйста введите название вашего события.";
	$user_event_add[2] = "Детали события";
	$user_event_add[3] = "Пожалуйста заполните все требуемые поля.";
	$user_event_add[4] = "в";
	$user_event_add[5] = "Мои события";

	$user_event_add[7] = "Просмотр события";
	$user_event_add[8] = "Создать новое событие";
	$user_event_add[9] = "Пожалуйста напишите краткую информацию для Вашего нового Ссобытия. После того, как создадите событие, Вы можете начинать приглашать других пользователей.";
	$user_event_add[10] = "Имя события*";
	$user_event_add[11] = "Описание события";
	$user_event_add[12] = "Категория события";
	$user_event_add[13] = "Настройки события";
	$user_event_add[14] = "Только по приглашениям";
	$user_event_add[15] = "Пользователи могут сообщать о RSVP могут без приглашения. (RSVP - \"пожалуйста, сообщите, сможете ли вы прийти\". )";
	$user_event_add[16] = "Пользователи должны быть приглашены прежде, чем они могут отправить RSVP.";
	$user_event_add[17] = "Когда люди просматривают это событие, им нужно автоматически сразу отправлять сообщение RSVP, или они должны сначала запросить приглашение?";
	$user_event_add[18] = "Включать это событие в Поиск/Обзор?";
	$user_event_add[19] = "Да, включить это событие в Поиск/Обзор результатов.";
	$user_event_add[20] = "Нет, не включать это событие в Поиск/Обзор результатов.";
	$user_event_add[21] = "Кто может видеть это событие?";
	$user_event_add[22] = "Вы можете решить кто может видеть это событие.";
	$user_event_add[23] = "Разрешить комментарии?";
	$user_event_add[24] = "Вы можете решить, кто может оставлять комментарии в этом событии.";
	$user_event_add[25] = "Добавить событие";
	$user_event_add[26] = "Отменить";
	$user_event_add[27] = "Настройки событий";
	$user_event_add[28] = "Начало*";
	$user_event_add[29] = "Окончание*";
	$user_event_add[30] = "Недопустимое время окончания - проверьте окончание вашего события, событие не может заканчиваться раньше начала.";
	$user_event_add[31] = "Недопустимое время начала - проверьте начало вашего события, оно должно быть в будущем.";
	$user_event_add[32] = "Принимающая сторона:";
	$user_event_add[33] = "Расположение:";
	break;

  case "user_event_browse":
	$user_event_browse[1] = "Мои события";
	$user_event_browse[2] = "Предстоящие события";
	$user_event_browse[3] = "Обзор событий";
	$user_event_browse[4] = "Обзор предстоящих событий";
	$user_event_browse[5] = "Поиск события которое Вас интересует. Выберите категорию ниже, или ищите событие с Вашими ключевыми словами на <a href='search.php'>странице поиска</a>. <br> RSVP в переводе с Французкого \"Пожалуйста, сообщите, сможете ли Вы прийти\".";
	$user_event_browse[6] = "Категория Событий";
	$user_event_browse[7] = "События";
	$user_event_browse[8] = "событие";
	$user_event_browse[9] = "Другое";
	$user_event_browse[10] = "Не найдено предстоящих событий в данной категории.";
	$user_event_browse[11] = "Когда:";
	$user_event_browse[12] = "Все события";
	$user_event_browse[13] = "Принимающая сторона:";
	$user_event_browse[14] = "Просмотреть событие";
	$user_event_browse[15] = "RSVP к событию";
	$user_event_browse[16] = "Предыдущая страница";
	$user_event_browse[17] = "просмотр событий";
	$user_event_browse[18] = "из";
	$user_event_browse[19] = "просмотр событиий";
	$user_event_browse[20] = "Следующая страница";
	$user_event_browse[21] = "Настройки событий";
	$user_event_browse[22] = " с ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$user_event_browse[23] = "до";
	break;

  case "user_event_edit":
	$user_event_edit[1] = "Размер Фотографий должен быть не более 4MB";
	$user_event_edit[2] = "Фотографии должны иметь одно из следующих расширений:";
	$user_event_edit[3] = "Фотографии должны быть меньше или соответствовать размерам:";
	$user_event_edit[4] = "pixels";
	$user_event_edit[5] = "Ваша фотография не загружена. Пожалуйста повторите попытку. Если ошибка повторится, обратитесь в службу поддержки.";
	$user_event_edit[6] = "Пожалуйста заполните все необходимые поля.";

	$user_event_edit[8] = "Пожалуйста введите имя Вашего события.";
	$user_event_edit[9] = "Ваши изменения были сохранены.";
	$user_event_edit[10] = "Детали события";
	$user_event_edit[11] = "Приглашения";
	$user_event_edit[12] = "в";
	$user_event_edit[13] = "Фотографии";
	$user_event_edit[14] = "Комментарии";
	$user_event_edit[15] = "Стили события";
	$user_event_edit[16] = "Отменить событие";
	$user_event_edit[17] = "Редактировать событие:";
	$user_event_edit[18] = "Все параметры событий отображаются ниже и могут быть изменены.";
	$user_event_edit[19] = "Ваше событие успешно создано! Вы можете добавить фотографию и редактировать детали события ниже.";
	$user_event_edit[20] = "Обложка события";
	$user_event_edit[21] = "Текущая обложка";
	$user_event_edit[22] = "удалить фото";
	$user_event_edit[23] = "Загрузить фото для обложки";
	$user_event_edit[24] = "Загрузить";
	$user_event_edit[25] = "Изображения должны быть менее чем 4Мб и иметь одно из следующих расширений:";
	$user_event_edit[26] = "Детали события";
	$user_event_edit[27] = "Имя события*";
	$user_event_edit[28] = "Описание события";
	$user_event_edit[29] = "Категория события";
	$user_event_edit[30] = "Настройки событий";
	$user_event_edit[31] = "Только приглашения";
	$user_event_edit[32] = "Пользователи могут сообщать о RSVP без приглашения. (RSVP - \"пожалуйста, сообщите, сможете ли вы прийти\". )";
	$user_event_edit[33] = "Пользователи должны быть приглашены прежде, чем они могут сообщить о RSVP.";
	$user_event_edit[34] = "Когда люди хотят посетить это событие, им нужно разрешить сообщать о RSVP сразу? или они должны запросить приглашение? Одобрение / отрицание запросов приглашения может управляться через ";
	$user_event_edit[35] = "Примечание: если Вы отметите \" Только по Приглашениям \" любые запросы приглашения будут автоматически одобрены.";
	$user_event_edit[36] = "Включить событие в результаты поиска?";
	$user_event_edit[37] = "Да, включить событие в результаты поиска.";
	$user_event_edit[38] = "Нет, исключить событие из результатов поиска..";
	$user_event_edit[39] = "Кто может видеть это событие?";
	$user_event_edit[40] = "Вы можете решить, кому видеть это событие.";
	$user_event_edit[41] = "Кто может писать комментарии?";
	$user_event_edit[42] = "Вы можете решить, кому писать комментарии.";
	$user_event_edit[43] = "Сохранить изменения";
	$user_event_edit[44] = "страница приглашений";
	$user_event_edit[45] = "Отмена";
	$user_event_edit[46] = "&#171; к Моим событиям";
	$user_event_edit[47] = "Начало*";
	$user_event_edit[48] = "Конец*";
	$user_event_edit[49] = "Недопустимое время окончания - проверьте окончание вашего события, событие не может заканчиваться раньше начала.";
	$user_event_edit[50] = "Недопустимое время начала - проверьте начало вашего события, оно должно быть в будущем.";
	$user_event_edit[51] = "Принимающая сторона:";
	$user_event_edit[52] = "Расположение:";
	break;

  case "user_event_edit_comments":
	$user_event_edit_comments[1] = "Детали события";
	$user_event_edit_comments[2] = "Приглашения";

	$user_event_edit_comments[4] = "Фотографии";
	$user_event_edit_comments[5] = "Комментарии";
	$user_event_edit_comments[6] = "Стили события";
	$user_event_edit_comments[7] = "Отменить событие";
	$user_event_edit_comments[8] = "Вернуться к событиям";
	$user_event_edit_comments[9] = "Комментарии событий:";
	$user_event_edit_comments[10] = "Комментарии написанные для этого события. Для того чтобы удалить комментарий, выберите его и нажмите кнопку \"Удалить выбранное\".";
	$user_event_edit_comments[11] = "Предыдущая страница";
	$user_event_edit_comments[12] = "просмотр комментариев";
	$user_event_edit_comments[13] = "из";
	$user_event_edit_comments[14] = "просмотр комментариев";
	$user_event_edit_comments[15] = "Следующая страница";
	$user_event_edit_comments[16] = "Нет комментариев для данного события.";
	$user_event_edit_comments[17] = "Анонимный";
	$user_event_edit_comments[18] = "Удалить выделенное";
	$user_event_edit_comments[19] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$user_event_edit_comments[20] = "выбрать все комментарии";
	break;

  case "user_event_edit_delete":
	$user_event_edit_delete[1] = "Детали события";
	$user_event_edit_delete[2] = "Приглашения";

	$user_event_edit_delete[4] = "Фотографии";
	$user_event_edit_delete[5] = "Комментарии";
	$user_event_edit_delete[6] = "Стили события";
	$user_event_edit_delete[7] = "Отменить событие";
	$user_event_edit_delete[8] = "Вернуться к событиям";
	$user_event_edit_delete[9] = "Отменить событие:";
	$user_event_edit_delete[10] = "Вы уверены, что Вы хотите отменить это событие? Все его содержание будет удалено, и все члены будут уведомлены, что событие было отменено.";
	$user_event_edit_delete[11] = "Отменить событие";
	$user_event_edit_delete[12] = "Нет, не отменять";
	break;

  case "user_event_edit_files":
	$user_event_edit_files[1] = "Ваши изменения сохранены.";
	$user_event_edit_files[2] = "Детали события";
	$user_event_edit_files[3] = "Приглашения";

	$user_event_edit_files[5] = "Фотографии";
	$user_event_edit_files[6] = "Комментарии";
	$user_event_edit_files[7] = "Стиль события";
	$user_event_edit_files[8] = "Отменить событие";
	$user_event_edit_files[9] = "Вернуться к событиям";
	$user_event_edit_files[10] = "Фото события:";
	$user_event_edit_files[11] = "Управление фотографиями и новыми файлами в этом событии.<br>Всего файлов в этом альбоме: ";
	$user_event_edit_files[12] = "Добавить новое фото";
	$user_event_edit_files[13] = "Название";
	$user_event_edit_files[14] = "комментарий";
	$user_event_edit_files[15] = "Подпись";
	$user_event_edit_files[16] = "Удалить Фото";
	$user_event_edit_files[17] = "Сохранить Изменения";
	break;

  case "user_event_edit_files_comments":
	$user_event_edit_files_comments[1] = "Детали события";
	$user_event_edit_files_comments[2] = "Приглашения";

	$user_event_edit_files_comments[4] = "Фотографии";
	$user_event_edit_files_comments[5] = "Комментарии";
	$user_event_edit_files_comments[6] = "Стиль события";
	$user_event_edit_files_comments[7] = "Отменить событие";
	$user_event_edit_files_comments[8] = "Вернуться к событиям";
	$user_event_edit_files_comments[9] = "Комментарии к фото";
	$user_event_edit_files_comments[10] = "Для того чтобы удалить комментарий, выберите его и нажмите кнопку \"Удалить выбранное\".";
	$user_event_edit_files_comments[11] = "Предыдущая страница";
	$user_event_edit_files_comments[12] = "просмотр комментариев";
	$user_event_edit_files_comments[13] = "из";
	$user_event_edit_files_comments[14] = "просмотр комментариев";
	$user_event_edit_files_comments[15] = "Следующая страница";
	$user_event_edit_files_comments[16] = "Нет ни одного комментария к этому фото.";
	$user_event_edit_files_comments[17] = "Аноним";
	$user_event_edit_files_comments[18] = "Удалить выбранное";
	$user_event_edit_files_comments[19] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$user_event_edit_files_comments[20] = "выбрать все комментарии";
	$user_event_edit_files_comments[21] = "Назад к фото";
	break;

  case "user_event_edit_files_upload":
	$user_event_edit_files_upload[1] = "Детали события";
	$user_event_edit_files_upload[2] = "Приглашение";

	$user_event_edit_files_upload[4] = "Фотографии";
	$user_event_edit_files_upload[5] = "Комментарии";
	$user_event_edit_files_upload[6] = "Стиль события";
	$user_event_edit_files_upload[7] = "Отменить событие";
	$user_event_edit_files_upload[8] = "Вернуться к Событиям";
	$user_event_edit_files_upload[9] = "Загрузить фотографии:";
	$user_event_edit_files_upload[10] = "Чтобы загрузить фотографии с Вашего компьютера, щелкните кнопку \"Обзор\", выберите их на Вашем компьютере, затем нажмите \"Загрузить фотографии\".";
	$user_event_edit_files_upload[11] = "Вернуться к фотографиям";
	$user_event_edit_files_upload[12] = "У Вас есть";
	$user_event_edit_files_upload[13] = "свободного места.";
	$user_event_edit_files_upload[14] = "Вы можете загружать файлы следующих типов:";
	$user_event_edit_files_upload[15] = "Вы можете загружать файлы размером до ";
	$user_event_edit_files_upload[16] = "Файл 1:";
	$user_event_edit_files_upload[17] = "Файл 2:";
	$user_event_edit_files_upload[18] = "Файл 3:";
	$user_event_edit_files_upload[19] = "Файл 4:";
	$user_event_edit_files_upload[20] = "Файл 5:";
	$user_event_edit_files_upload[21] = "Загрузить фотографии";
	$user_event_edit_files_upload[22] = "ЗАГРУЗКА"; // USED IN JAVASCRIPT, NO QUOTES OR SPECIAL CHARACTERS ALLOWED
	$user_event_edit_files_upload[23] = "загружен успешно.";
	break;

  case "user_event_edit_members":
	$user_event_edit_members[1] = "Детали события";
	$user_event_edit_members[2] = "Приглашения";
	$user_event_edit_members[3] = "пользователь(и) успешно приглашен(ы) посетить это событие.";
	$user_event_edit_members[4] = "Фотографии";
	$user_event_edit_members[5] = "Комментарии";
	$user_event_edit_members[6] = "Стиль события";
	$user_event_edit_members[7] = "Отменить событие";
	$user_event_edit_members[8] = "Вернуться к событиям";
	$user_event_edit_members[9] = "Обзор гостей:";
	$user_event_edit_members[10] = "Используйте эту страницу, чтобы перечислять/искать гостей событий, одобрять/отклонять просьбы о приглашениях (если это доступно), и приглашать дополнительных пользователей на Ваше событие.";
	$user_event_edit_members[11] = "Отправить приглашение";
	$user_event_edit_members[12] = "Чтобы пригласить кого-то посетить это событие, введите имя пользователя в поле ниже.";
	$user_event_edit_members[13] = "Поиск";
	$user_event_edit_members[14] = "Сортировать по:";
	$user_event_edit_members[15] = "Недавно присоединенный";
	$user_event_edit_members[16] = "Недавно вошедший";
	$user_event_edit_members[17] = "Имя пользователя:";
	$user_event_edit_members[18] = "Приглашение";
	$user_event_edit_members[19] = "Предыдущая страница";
	$user_event_edit_members[20] = "просмотр гостей";
	$user_event_edit_members[21] = "из";
	$user_event_edit_members[22] = "просмотр гостей";
	$user_event_edit_members[23] = "Следующая Страница";
	$user_event_edit_members[24] = "Последнее обновление:";
	$user_event_edit_members[25] = "Последний вход:";
	$user_event_edit_members[26] = "Все приглашенные";
	$user_event_edit_members[27] = "Приду обязательно";
	$user_event_edit_members[28] = "Может быть приду";
	$user_event_edit_members[29] = "Нет не приду";
	$user_event_edit_members[30] = "Ожидание ответа";
	$user_event_edit_members[31] = "Добавить еще пользователя";
	$user_event_edit_members[32] = "Удалить из приглашенных";
	$user_event_edit_members[33] = "Отправить сообщение";
	$user_event_edit_members[34] = "Поиск:";
	$user_event_edit_members[35] = "Пользователи требующие приглашения";
	$user_event_edit_members[36] = "Следующие люди хотят посетить это Событие и просят приглашение";
	$user_event_edit_members[37] = "приглашение";
	$user_event_edit_members[38] = "отклонить";
	$user_event_edit_members[39] = "Просьба 1 человека о приглашении отклонена.";
	$user_event_edit_members[40] = "Просьба 1 человека о приглашении одобрена.";
	$user_event_edit_members[41] = "RSVP:";
	$user_event_edit_members[42] = "1 человек был удален из приглашенных.";
	break;

  case "user_event_edit_style":
	$user_event_edit_style[1] = "Ваши изменения были сохранены.";
	$user_event_edit_style[2] = "Детали события";
	$user_event_edit_style[3] = "Приглашения";

	$user_event_edit_style[5] = "Фотографии";
	$user_event_edit_style[6] = "Комментарии";
	$user_event_edit_style[7] = "Стиль события";
	$user_event_edit_style[8] = "Отменить событие";
	$user_event_edit_style[9] = "Вернуться к Событиям";
	$user_event_edit_style[10] = "Настройте событие:";
	$user_event_edit_style[11] = "Вы можете изменять цвета, шрифты и стиль Вашего события, добавив CSS-код на странице ниже. Содержимое текстовой области ниже, должно быть заключено &lt;style&gt; теги.";
	$user_event_edit_style[12] = "Сохранить изменения";
	break;

  case "user_event_rsvp":
	$user_event_rsvp[1] = "RSVP";
	$user_event_rsvp[2] = "Вы уже просили приглашение на это событие.";
	$user_event_rsvp[3] = "Ваш ответ для этого События был сохранен.";
	$user_event_rsvp[4] = "Мои события";
	$user_event_rsvp[5] = "RSVP к ";
	$user_event_rsvp[6] = "Обзор событий";
	$user_event_rsvp[7] = "Запрос приглашения";
	$user_event_rsvp[8] = "Этот событие - только по приглашениям. Чтобы запросить приглашение, щелкните кнопку \"Запрос приглашения\" ниже.";
	$user_event_rsvp[9] = "Запрос приглашения";
	$user_event_rsvp[10] = "Отмена";
	$user_event_rsvp[11] = "Возврат";
	$user_event_rsvp[12] = "Вы уже порсили приглашение на это событие. Создатель события возможно скоро, подтвердит или отклонит Ваш запрос";
	$user_event_rsvp[13] = "Настройки событий";
	$user_event_rsvp[14] = "Ответ на приглашение события, пожалуйста выберите свой ответ RSVP ниже. <br> RSVP в переводе с Французкого \"Пожалуйста, сообщите, сможете ли вы прийти\".";
	$user_event_rsvp[15] = "Вы посетите это событие?";
	$user_event_rsvp[16] = "Да, я обязательно приду на это событие.";
	$user_event_rsvp[17] = "Может быть приду на это событие.";
	$user_event_rsvp[18] = "Нет, я не приду на это событие.";
	$user_event_rsvp[19] = "Пожалуйста выберите опцию ответа RSVP.";
	break;

  case "user_event_remove":
	$user_event_remove[1] = "Мои события";
	$user_event_remove[2] = "Отменить запрос";
	$user_event_remove[3] = "Обзор событий";
	$user_event_remove[4] = "Удалить";
	$user_event_remove[5] = "Вы действительно хотите удалить это событие?";
	$user_event_remove[6] = "<b>Имейте в виду, что Вы создатель этого события. Если Вы удалите это события, то все атрибуты события будут тоже удалены.</b>";
	$user_event_remove[7] = "Отменить пригласительный запрос на ";
	$user_event_remove[8] = "Вы уверены, что хотите отменить Ваш запрос на получение приглашения на это событие?";
	$user_event_remove[9] = "Удалить событие";
	$user_event_remove[10] = "Отмена";
	$user_event_remove[11] = "Настройки событий";
	$user_event_remove[12] = "Не отменять запрос";
	break;

  case "user_event_settings":
	$user_event_settings[1] = "Мои события";

	$user_event_settings[3] = "Обзор событий";
	$user_event_settings[4] = "Параметры событий";
	$user_event_settings[5] = "Параметры событий";
	$user_event_settings[6] = "Здесь Вы сможете отредактировать настройки отправки уведомлений на Ваш Email.";
	$user_event_settings[7] = "Ваши изменения сохранены.";
	$user_event_settings[8] = "Сохранить изменения";
	$user_event_settings[9] = "Уведомления событий";
	$user_event_settings[10] = "Проставьте галочки рядом с уведомлениями, которые бы Вы хотели получить по Email.";
	$user_event_settings[11] = "Оповестить меня, когда кто - то приглашает меня к событию.";
	$user_event_settings[12] = "Оповестить меня, когда кто - то оставляет комментарий в моем событии.";
	$user_event_settings[13] = "Оповестить меня, когда кто - то оставляет комментарий в моем событии к фотографиям.";
	$user_event_settings[14] = "Оповестить меня, когда кто - то запрашивает приглашение на моё событие.";
	$user_event_settings[15] = "Оповестить меня, когда кто - то отменяет событие на которое я был приглашен.";
	break;

}

// ASSIGN ALL SMARTY VARIABLES
if(is_array(${"$page"})) {
  reset(${"$page"});
  while(list($key, $val) = each(${"$page"})) {
    $smarty->assign($page.$key, $val);
  }
}
?>