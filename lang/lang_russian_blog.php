<?

//############# Translated by Gooos for blog v.2.5 #######################
//
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_blog[1] = "Заметки";
$header_blog[2] = "Записи";
$header_blog[3] = "все";
$header_blog[4] = "Без названия";
$header_blog[5] = "Добавлено";

// ASSIGN ALL SMARTY GENERAL BLOG VARIABLES
reset($header_blog);
while(list($key, $val) = each($header_blog)) {
  $smarty->assign("header_blog".$key, $val);
}

// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$functions_blog[1] = "Написал ";
$functions_blog[2] = "записи";
$functions_blog[3] = "Без названия";

// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_blog":
	$admin_blog[1] = "Общие настройки";
	$admin_blog[2] = "Эта страница содержит общие настройки блога, которые отразятся на всей социальной сети.";
	$admin_blog[3] = "Ваши изменения были сохранены.";
	$admin_blog[4] = "Тема";
	$admin_blog[5] = "Сообщение";
	$admin_blog[6] = "Новые комментарии к записям в блоге";
	$admin_blog[7] = "Это письмо отправится пользователю, когда будет размещен новый комментарий к одной из записей в блоге. Узнать больше о системных почтовых сообщениях можно на странице <a href='admin_emails.php'>Почтовые сообщения системы</a>.";
	$admin_blog[8] = "[username] - заменяется на имя пользователя получателя.<br>[commenter] - заменяется на имя пользователя, который разместил комментарий.<br>[link] - заменяется на ссылку для входа в блог.";
	$admin_blog[9] = "Сохранить изменения";
	$admin_blog[10] = "Настройки просмотра по умолчанию";
	$admin_blog[11] = "Выберите, хотели ли бы Вы разрешить общественности (посетителям, которые не зарегистрированы) просмотр следующих разделов Вашей социальной сети. В некоторых случаях (например: профили, блоги и Альбомы), если Вы дали им возможность, пользователи смогут сделать свои страницы частным, даже если открыт широкий доступ здесь. Для получения дополнительных настроек, пожалуйста, посетите страницу <a href='admin_general.php'>Главные настройки</a>.";
	$admin_blog[12] = "Блог";
	$admin_blog[13] = "Да, общественность может просматривать блоги, даже если они приватные.";
	$admin_blog[14] = "Нет, общественность не можете просматривать блоги.";
	$admin_blog[16] = "Если Вы хотите предоставить возможность пользователям сортировать свои записи в блоге по категориям, то создайте необходимые категории в поле ниже. Эта функция очень полезна для упорядочения всех записей в блогах всеми пользователями. Если Вы не создадите категории, то пользователи не смогут сортировать свои записи!.";
	$admin_blog[17] = "Добавить Категорию";
	break;

  case "admin_levels_blogsettings":
	$admin_levels_blogsettings[1] = "Параметры блога";
	$admin_levels_blogsettings[2] = "Если у Вас есть возможность позволить пользователям иметь блоги, то Вы можете скорректировать их подробности на этой странице.";
	$admin_levels_blogsettings[3] = "Записей на страницу";
	$admin_levels_blogsettings[4] = "Сколько записей в блоге будет показано на одной странице? (Введите число от 1 до 999)";
	$admin_levels_blogsettings[5] = "записей на страницу";
	$admin_levels_blogsettings[6] = "Сохранить изменения";
	$admin_levels_blogsettings[7] = "Ваши изменения были сохранены.";
	$admin_levels_blogsettings[8] = "Поле должно содержать целое число от 1 до 999.";
	$admin_levels_blogsettings[9] = "Разрешить блоги?";
	$admin_levels_blogsettings[10] = "Хотите, чтобы у пользователей были блоги? Если установлено значение нет, все остальные настройки на этой странице, не будут применяться.";
	$admin_levels_blogsettings[11] = "Да, разрешить блоги.";
	$admin_levels_blogsettings[12] = "Нет, не разрешать блоги.";
	$admin_levels_blogsettings[13] = "Разрешить пользовательские CSS стили?";
	$admin_levels_blogsettings[14] = "Если эта функция включена, пользователи смогут настраивать цвета и шрифты в своих блогах, изменяя их стиль CSS.";
	$admin_levels_blogsettings[15] = "Да, разрешить пользовательские стили.";
	$admin_levels_blogsettings[16] = "Нет, не разрешать пользовательские стили.";


	
	$admin_levels_blogsettings[20] = "<b>Приватные опции для поиска</b><br>Если эта функция включена, пользователи будут иметь возможность исключать их записи в блогах из результатов поиска. В противном случае, все записи в блоге будут включены в результаты поиска.";
	$admin_levels_blogsettings[21] = "Да, разрешить пользователям исключать их записи в блогах из результатов поиска.";
	$admin_levels_blogsettings[22] = "Нет, все записи в блогах будут выводится в результатах поиска.";
	$admin_levels_blogsettings[26] = "Блог - параметры конфиденциальности";
	$admin_levels_blogsettings[27] = "<b>Секретность блога</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может видеть их записи в блоге. Эти параметры отображаются на пользовательских страницах \"Добавить запись\" и \"Изменить запись\". Если Вы не измените опции, то каждый будет иметь возможность просматривать блоги.";
	$admin_levels_blogsettings[28] = "<b>Комментарии к блогу</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может оставлять комментарии на их записи в блоге. Если Вы не измените опции, то каждый будет иметь возможность оставлять комментарии.";
	$admin_levels_blogsettings[29] = "Редактирование уровней пользователя:";
	$admin_levels_blogsettings[30] = "Вы в настоящее время редактируете настройки данных пользовательских уровней. Помните, что эти настройки применяются только к пользователям, которые относятся к данному пользовательскому уровню. Когда Вы закончите, то можете редактировать <a href='admin_levels.php'>другие уровни</a>.";
	break;

  case "admin_viewblogs":
	$admin_viewblogs[1] = "Просмотр записей";
	$admin_viewblogs[2] = "На этой странице приведены все записи в блогах, оставленные пользователями. Вы можете использовать эту страницу, чтобы отслеживать эти записи и удалять оскорбительные материалы при необходимости. Ввод критериев в поля фильтра поможет Вам найти конкретные записи в блоге. Если поля фильтра оставить пустыми, то будут показаны все записи в Вашей социальной сети.";
	$admin_viewblogs[3] = "Название";
	$admin_viewblogs[4] = "Владелец";
	$admin_viewblogs[5] = "Фильтр";
	$admin_viewblogs[6] = "ID";
	$admin_viewblogs[7] = "Просмотры";
	$admin_viewblogs[8] = "Дата";
	$admin_viewblogs[9] = "Опции";
	$admin_viewblogs[10] = "view";
	$admin_viewblogs[11] = "удалить";
	$admin_viewblogs[12] = "Найдены записи";
	$admin_viewblogs[13] = "Страница:";
	$admin_viewblogs[14] = "Удалить запись";
	$admin_viewblogs[15] = "Вы действительно хотите удалить эту запись?";
	$admin_viewblogs[16] = "Отмена";
	$admin_viewblogs[17] = "Записи не найдены.";
	$admin_viewblogs[18] = "Без названия";
	$admin_viewblogs[19] = "Удалить выбранное";
	break;

  case "blog":
	$blog[1] = "Пользователь, которого Вы ищете, не существует!";
	$blog[2] = " - Заметки";
	$blog[3] = "не размещены какие-либо записи.";
	$blog[4] = "Без имени";
	$blog[5] = "комментарии";
	$blog[6] = "написать комментарий";
	$blog[7] = "Предыдущая страница";
	$blog[8] = "просмотр записей";
	$blog[9] = "из";
	$blog[10] = "просмотр записей";
	$blog[11] = "Следующая страница";
	$blog[12] = "Произошла ошибка";
	$blog[13] = "Вы должны войти в систему, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$blog[14] = "Назад";
	break;

  case "blog_category":
	$blog_category[1] = "Все записи";
	$blog_category[2] = "Без названия";
	$blog_category[3] = "комментарии";
	$blog_category[4] = "написать комментарий";

	$blog_category[6] = "Предыдущая страница";
	$blog_category[7] = "просмотр записей";
	$blog_category[8] = "из";
	$blog_category[9] = "просмотр записей";
	$blog_category[10] = "Следующая страница";
	break;

  case "blog_entry":
	$blog_entry[1] = "У Вас нет разрешения для просмотра этого файла.";
	$blog_entry[2] = " - записи:";
	$blog_entry[3] = " ";
	$blog_entry[4] = "заметка";
	$blog_entry[5] = "Без имени";
	$blog_entry[6] = "написать комментарий";
	$blog_entry[7] = "Подано под:";
	$blog_entry[8] = "комментарии";
	$blog_entry[9] = "Комментирует";
	$blog_entry[10] = "|";
	$blog_entry[11] = "Аноним";
	$blog_entry[12] = "Пользователь, которого Вы ищете, не существует.";
	$blog_entry[13] = "Произошла ошибка";
	$blog_entry[14] = "Напишите что-нибудь...";
	$blog_entry[15] = "Добавление...";
	$blog_entry[16] = "Пожалуйста напишите сообщение.";
	$blog_entry[17] = "Вы ввели неверный код безопасности.";
	$blog_entry[18] = "Добавить комментарий";
	$blog_entry[19] = "Введите цифры, которые Вы видите на этом изображении, в поле справа. Это помогает защитить наш сайт от спама.";
	$blog_entry[20] = "сообщение";
	$blog_entry[21] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$blog_entry[22] = "Назад";
	$blog_entry[23] = "Вы должны войти в систему, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$blog_entry[24] = "Назад к заметке ";
	$blog_entry[25] = " Заметки";
	$blog_entry[26] = "Пожаловаться на непристойное содержание";
	break;

  case "user_blog":
	$user_blog[1] = "Просмотр записей";
	$user_blog[2] = "Настройки ";
	$user_blog[3] = "Мои записи";
	$user_blog[4] = "Ваши заметки - это место, где Вы можете поделиться своими личными мыслями и новостями с другими людьми. Воспользуйтесь этой страницей для создания новой записи, поиска, редактирования и управления существующими записями заметок.";
	$user_blog[5] = "Создать новую запись";
	$user_blog[6] = "Поиск записей";
	$user_blog[7] = "Ссылка на мои заметки:";
	$user_blog[8] = "Поиск записей в:";
	$user_blog[9] = "Предыдущая страница";
	$user_blog[10] = "просмотр записей";
	$user_blog[11] = "из";
	$user_blog[12] = "просмотр записей";
	$user_blog[13] = "Следующая страница";
	$user_blog[14] = "Никаких записей не было найдено.";
	$user_blog[15] = "У Вас нет никаких записей.";
	$user_blog[16] = "Нажмите здесь";
	$user_blog[17] = "написать.";
	$user_blog[18] = "Дата";
	$user_blog[19] = "Название";
	$user_blog[20] = "Комментарии";
	$user_blog[21] = "Без названия";
	$user_blog[22] = "комментарии";
	$user_blog[23] = "редактировать";
	$user_blog[24] = "удалить";
	$user_blog[25] = "Удалить Выбранное";
	$user_blog[26] = "Поиск";
	$user_blog[27] = "Опции";
	break;

  case "user_blog_comments":
	$user_blog_comments[1] = "Просмотр записей";
	$user_blog_comments[2] = "Настройки";
	$user_blog_comments[3] = "Комментарии в заметках";
	$user_blog_comments[4] = "Для удаления комментариев, отметьте их галочкой и затем нажмите кнопку \"Удалить отмеченное\" в конце списка комментариев.";
	$user_blog_comments[5] = "назад к записи";
	$user_blog_comments[6] = "к списку записей";
	$user_blog_comments[7] = "Предыдущая страница";
	$user_blog_comments[8] = "просмотр комментариев";
	$user_blog_comments[9] = "из";
	$user_blog_comments[10] = "просмотр комметариев";
	$user_blog_comments[11] = "Следующая страница";
	$user_blog_comments[12] = "Нет комментариев для этой записи.";
	$user_blog_comments[13] = "Аноним";
	$user_blog_comments[14] = "Удалить отмеченное";
	$user_blog_comments[15] = "выбрать все комментарии";
	$user_blog_comments[16] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_blog_deleteentry":
	$user_blog_deleteentry[1] = "Просмотр записей";
	$user_blog_deleteentry[2] = "Настройки";
	$user_blog_deleteentry[3] = "Удалить запись?";
	$user_blog_deleteentry[4] = "Вы действительно хотите удалить эту запись? Запись будет удалена из заметок безвозвратно!";
	$user_blog_deleteentry[5] = "Удалить запись";
	$user_blog_deleteentry[6] = "Отмена";
	break;

  case "user_blog_editentry":
	$user_blog_editentry[1] = "Просмотр записей";
	$user_blog_editentry[2] = "Настройки";
	$user_blog_editentry[3] = "Редактировать запись";
	$user_blog_editentry[4] = "Внесите желаемые изменения в эту запись, а затем нажмите кнопку \"Отправить\" для сохранения изменений.";
	$user_blog_editentry[5] = "Название:";
	$user_blog_editentry[6] = "Категория:";
	$user_blog_editentry[7] = "Комментарии:";
	$user_blog_editentry[8] = "Показать настройки защиты";
	$user_blog_editentry[9] = "Скрыть настройки защиты";
	$user_blog_editentry[10] = "Включить эту запись  в результаты поиска?";
	$user_blog_editentry[11] = "Да, включить эту запись  в результаты поиска.";
	$user_blog_editentry[12] = "Нет не включать эту запись  в результаты поиска.";
	$user_blog_editentry[13] = "Кто может просматривать эту запись?";
	$user_blog_editentry[14] = "Кто может оставлять комментарии к этой записи?";
	$user_blog_editentry[15] = "Отправить";
	$user_blog_editentry[16] = "Предпросмотр";
	$user_blog_editentry[17] = "Отмена";
	break;

  case "user_blog_flash":
	$user_blog_flash[1] = "Загрузить Flash с компьютера";
	$user_blog_flash[2] = "Новый альбом:";
	$user_blog_flash[3] = "Загрузить";
	$user_blog_flash[4] = "или с другого сайта";
	$user_blog_flash[5] = "Flash URL";
	$user_blog_flash[6] = "Ширина";
	$user_blog_flash[7] = "Высота";
	$user_blog_flash[8] = "Предпросмотр";
	$user_blog_flash[9] = "Вставить Flash";
	$user_blog_flash[10] = "Отмена";
	$user_blog_flash[11] = "Загрузка файлов не разрешена.";
	$user_blog_flash[12] = "Вставить Flash";
	$user_blog_flash[13] = "Загрузить Flash"; // This is the name of the album to which flash files will be uploaded through the WYSIWYG blog entry editor.
	$user_blog_flash[14] = "Ваш Flash файл успешно загружен.";
	break;

  case "user_blog_image":
	$user_blog_image[1] = "Загрузки файла не допускаются.";
	$user_blog_image[2] = "Создать альбом и загрузить изображение"; // USED IN JAVASCRIPT, NO QUOTES OR SPECIAL CHARS ALLOWED
	$user_blog_image[3] = "Загрузить изображение"; // USED IN JAVASCRIPT, NO QUOTES OR SPECIAL CHARS ALLOWED
	$user_blog_image[4] = "Вариант 1: Загрузить изображение со своего компьютера.";
	$user_blog_image[5] = "Загрузить изображение";
	$user_blog_image[6] = "Сохранить в альбоме:";
	$user_blog_image[7] = "Создать Новый Альбом";
	$user_blog_image[8] = "Имя нового альбома:";
	$user_blog_image[9] = "Загрузить изображение";
	$user_blog_image[10] = "Вариант 2: Вставить ссылку на изображение.";
	$user_blog_image[11] = "URL изображения";
	$user_blog_image[12] = "Ширина";
	$user_blog_image[13] = "Высота";
	$user_blog_image[14] = "Рамка";
	$user_blog_image[15] = "Предпросмотр";
	$user_blog_image[16] = "Вставить изображение";
	$user_blog_image[17] = "Отмена";
	$user_blog_image[18] = "Вставить изображение";
	$user_blog_image[19] = "Загрузить изображение"; // This is the name of the album to which images will be uploaded through the WYSIWYG blog entry editor.
	$user_blog_image[20] = "Ваше изображение загружено успешно.";
	break;

  case "user_blog_link":
	$user_blog_link[1] = "Вставить ссылку";
	$user_blog_link[2] = "Имя";
	$user_blog_link[3] = "URL";
	$user_blog_link[4] = "Добавить";
	$user_blog_link[5] = "Отмена";
	break;

  case "user_blog_newentry":
	$user_blog_newentry[1] = "Просмотр записей";
	$user_blog_newentry[2] = "Настройки";
	$user_blog_newentry[3] = "Новая запись";
	$user_blog_newentry[4] = "Напишите новую запись ниже, а затем выберите \"Отправить\" для публикации в заметках.";
	$user_blog_newentry[5] = "Название:";
	$user_blog_newentry[6] = "Категория:";
	$user_blog_newentry[7] = "Показать настройки";
	$user_blog_newentry[8] = "Скрыть настройки";
	$user_blog_newentry[9] = "Включить эту запись  в результаты поиска?";
	$user_blog_newentry[10] = "Да, включить эту запись в результаты поиска.";
	$user_blog_newentry[11] = "Нет не включать эту запись  в результаты поиска.";
	$user_blog_newentry[12] = "Кто может просматривать эту запись?";
	$user_blog_newentry[13] = "Кто может оставлять комментарии к этой записи?";
	$user_blog_newentry[14] = "Отправить";
	$user_blog_newentry[15] = "Предпросмотр";
	$user_blog_newentry[16] = "Отмена";
	break;

  case "user_blog_preview":
	$user_blog_preview[1] = "Без названия";
	break;

  case "user_blog_settings":
	$user_blog_settings[1] = "Ваши изменения были сохранены.";
	$user_blog_settings[2] = "Просмотр записей";
	$user_blog_settings[3] = "Настройки";
	$user_blog_settings[4] = "Стиль";
	$user_blog_settings[5] = "Вы можете изменить цвет, шрифт и стиль , добавив свой CSS-код. Содержимое в поле должно быть заключено в теги &lt;style&gt;.";
	$user_blog_settings[6] = "Сохранить изменения";
	$user_blog_settings[7] = "Настройки";
	$user_blog_settings[8] = "Изменение настроек заметок.";
	$user_blog_settings[9] = "Уведомления заметок";
	$user_blog_settings[10] = "Вы хотите получать уведомления по электронной почте, когда кто-то публикует комментарий к заметке?";
	$user_blog_settings[11] = "Да, уведомить меня, когда кто-то написал комментарий к моей заметке.";
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