<?
//############# Translated by Gooos for classifieds v.2 #######################
//
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_classified[1] = "Объявления";
$header_classified[2] = "Объявления";
$header_classified[3] = "посмотреть все";
$header_classified[4] = "Без названия";
$header_classified[5] = "Добавлено";

// ASSIGN ALL SMARTY GENERAL classified VARIABLES
reset($header_classified);
while(list($key, $val) = each($header_classified)) {
  $smarty->assign("header_classified".$key, $val);
}



// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$functions_classified[1] = "Добавлено ";
$functions_classified[2] = "список объявлений";
$functions_classified[3] = "Без названия";

$class_classified[1] = "Пожалуйста проверьте, что Вы заполнили все необходимые поля.";
$class_classified[2] = "Пожалуйста проверьте, что Вы заполнили поля в надлежащем формате.";
$class_classified[3] = "месяц";
$class_classified[4] = "день";
$class_classified[5] = "год";



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_classified":
	$admin_classified[1] = "Параметры объявлений";
	$admin_classified[2] = "Эта страница содержит общие настройки объявлений, которые затрагивают всю Вашу социальную сеть.";
	$admin_classified[3] = "Ваши изменения сохранены.";
	$admin_classified[4] = "Тема";
	$admin_classified[5] = "Сообщение";
	$admin_classified[6] = "Новые комментарии к объявлениям";
	$admin_classified[7] = "Это письмо отправится пользователю, когда будет размещен новый комментарий к одному из объявлений. Узнать больше о системных почтовых сообщениях можно на странице <a href='admin_emails.php'>Почтовые сообщения системы</a>.";
	$admin_classified[8] = "[username] - заменяется на имя пользователя получателя.<br>[commenter] - заменяется на имя пользователя, который разместил комментарий.<br>[link] - заменяется на ссылку на списрк объявлений.";
	$admin_classified[9] = "Сохранить изменения";
	$admin_classified[10] = "Настройки просмотра по умолчанию";
	$admin_classified[11] = "Выберите, хотели ли бы Вы разрешить общественности (посетителям, которые не зарегистрированы) просмотр объявлений Вашей социальной сети. В некоторых случаях (например, профили, блоги и Альбомы), если Вы дали им возможность, пользователи смогут сделать свои страницы частным, даже если открыт широкий доступ здесь. Для получения дополнительных настроек, пожалуйста, посетите страницу <a href='admin_general.php'>Главные настройки</a>.";
	$admin_classified[12] = "Объявления";
	$admin_classified[13] = "Да, общественность может просматривать объявления, даже если они приватные.";
	$admin_classified[14] = "Нет, общественность не может просматривать объявления.";
	$admin_classified[15] = "Вы уверены, что хотите удалить эту категорию? ПРИМЕЧАНИЕ: Если Вы удалите главную категорию, то все подкатегории и поля будут также удалены.";
	$admin_classified[16] = "Добавить поле";
	$admin_classified[17] = "Категории объявлений";
	$admin_classified[18] = "Добавить категорию";
	$admin_classified[19] = "Добавить подкатегорию";
	$admin_classified[20] = "Примечание: У Вас нет категорий объявлений для управления. Нажмите \"Добавить категорию\" и создайте хотя бы одну.";
	$admin_classified[21] = "Объявления - категории/поля";
	$admin_classified[22] = "Вы можете позволить пользователям классифицировать их списки объявлений. Классификация списков облегчит пользователям поиск объявлений, которые их интересуют. Если Вы разрешили классификацию категорий, то Вы можете создавать их (наряду с подкатегориями) ниже. Кроме того, Вы можете создать специализированные поля для списка категорий, нажав \"Добавить поле\" ниже.";
	$admin_classified[23] = "Добавить категорию";
	$admin_classified[24] = "Добавить подкатегорию";
	$admin_classified[25] = "Поле заголовка:";
	$admin_classified[26] = "Категория:";
	$admin_classified[27] = "Тип поля:";
	$admin_classified[28] = "Встроенный CSS стиль:";
	$admin_classified[29] = "Поле описания:";
	$admin_classified[30] = "Сообщение об ошибке пользователю:";
	$admin_classified[31] = "Обязательное требование:";
	$admin_classified[32] = "HTML теги:";
	$admin_classified[33] = "По умолчанию, пользователь не может использовать HTML теги в этом области профиля. Если Вы хотите разрешить конкретные теги, то можете ввести их выше (через запятую). Пример: <i>b, img, a, embed, font<i>";
	$admin_classified[34] = "Максимальная длина поля:";
	$admin_classified[35] = "Ссылка поля на:";
	$admin_classified[36] = "Если Вы хотите, чтобы это поле имело ссылку на другой URL, введите ссылку выше. Заметим, что это переопределит \"Searchable/Linked\" настроенные выше. Использование [field_value] представит пользователям ввод в это поле. Примеры: <i>Регулярные ссылки (в случае ввода пользователем URL - он должен начинаться с \"http://\"):</i> <strong>[field_value]</strong><br><i>Эл. почта (если пользователь вводит адрес эл. почты):</i> <strong>mailto:[field_value]</strong><br><i>AIM Link (if user's input is an AIM screenname):</i> <strong>aim:goim?screenname=[field_value]</strong>";
	$admin_classified[37] = "Regex Validation:";
	$admin_classified[38] = "Если Вы хотите заставить пользователя ввести данные в определенном формате, введите соответствующее регулярное выражение выше. Тогда preg_match (), будет применяться, когда пользователь вводит данные. Это необязательное дополнение, - если Вы не понимаете или нет необходимости в регулярных выражениях, оставьте поле пустым.";
	$admin_classified[39] = "Опции:";
	$admin_classified[40] = "Ярлык";
	$admin_classified[41] = "Зависимость?";
	$admin_classified[42] = "Зависимое поле ярлыка";
	$admin_classified[43] = "Нет зависимого поля";
	$admin_classified[44] = "Да, имеет зависимое поле";
	$admin_classified[45] = "Добавить новые опции";
	$admin_classified[46] = "Добавить поле";
	$admin_classified[47] = "Ред. поле";
	$admin_classified[48] = "Отмена";
	$admin_classified[49] = "Text Field";
	$admin_classified[50] = "Multi-line Text Area";
	$admin_classified[51] = "Pull-down Select Box";
	$admin_classified[52] = "Radio Buttons";
	$admin_classified[53] = "Date Field";
	$admin_classified[54] = "Обязательно";
	$admin_classified[55] = "Не обязательно";
	$admin_classified[56] = "Вы должны указать по крайней мере одну опцию.";
	$admin_classified[57] = "Вы должны указать тип поля.";
	$admin_classified[58] = "Необходимо ввести название для этого поля.";
	$admin_classified[59] = "Зависимое поле";
	$admin_classified[60] = "Удалить поле";
	$admin_classified[61] = "Вы действительно хотите удалить это поле?";
	$admin_classified[62] = "Подкатегории";
	$admin_classified[63] = "Поиск полей";
	$admin_classified[64] = "Тип поиска:";
	$admin_classified[65] = "Не показывать поле поиска";
	$admin_classified[66] = "Точное значение поиска";
	$admin_classified[67] = "Диапазон поиска";
	$admin_classified[68] = "Если Вы хотите, чтобы пользователи могли искать записи на основе этого поля, выберите \"Точное значение поиска\" или \"Диапазон поиска\". Если Вы выберете \"Точное значение поиска\", то результаты будут соответствовать точному значению поиска, введенному пользователем. Если Вы выберете \"Диапазон поиска\", пользователи смогут ввести минимальное и максимальное значение для поиска. Это полезно для числовых значений, таких, как \"цены\", \"площади\" и \"возраст\". Имейте в виду, что \"Диапазон поиска\" не работает на сегодняшний день.";
	break;

  case "admin_levels_classifiedsettings":
	$admin_levels_classifiedsettings[1] = "Параметры объявлений";
	$admin_levels_classifiedsettings[2] = "Если у Вас есть возможность позволить пользователям иметь объявления, то Вы можете скорректировать их подробности на этой странице.";
	$admin_levels_classifiedsettings[3] = "Объявлений на страницу";
	$admin_levels_classifiedsettings[4] = "Сколько объявлений будет показано на одной странице? (Введите число от 1 до 999)";
	$admin_levels_classifiedsettings[5] = "объявлений на страницу";
	$admin_levels_classifiedsettings[6] = "Сохранить изменения";
	$admin_levels_classifiedsettings[7] = "Ваши изменения сохранены.";
	$admin_levels_classifiedsettings[8] = "Поле должно содержать целое число от 1 до 999.";
	$admin_levels_classifiedsettings[9] = "Разрешить объявления?";
	$admin_levels_classifiedsettings[10] = "Хотите, чтобы у пользователей были объявления? Если установлено значение нет, все остальные настройки на этой странице, не будут применяться.";
	$admin_levels_classifiedsettings[11] = "Да, разрешить объявления.";
	$admin_levels_classifiedsettings[12] = "Нет, не разрешать объявления.";
	$admin_levels_classifiedsettings[13] = "Фото ширина и высота должны быть целые числа от 1 до 999.";
	$admin_levels_classifiedsettings[14] = "Максимальный размер файла, поле должно содержать целое число от 1 до 204800.";
	$admin_levels_classifiedsettings[15] = "Максимальная ширина и высота, поля должны содержать целые числа между 1 и 9999.";




	$admin_levels_classifiedsettings[20] = "<b>Приватные опции для поиска</b><br>Если эта функция включена, пользователи будут иметь возможность исключать их объявления из результатов поиска. В противном случае, все объявления будут включены в результаты поиска.";
	$admin_levels_classifiedsettings[21] = "Да, разрешить пользователям исключать их объявления из результатов поиска.";
	$admin_levels_classifiedsettings[22] = "Нет, все объявления будут выводится в результатах поиска.";
	$admin_levels_classifiedsettings[26] = "Объявления - параметры конфиденциальности";
	$admin_levels_classifiedsettings[27] = "<b>Секретность объявления</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может видеть их объявления. Эти параметры отображаются на пользовательских страницах \"Добавить объявления\" и \"Изменить объявления\". Если Вы не измените опции, то каждый будет иметь возможность просматривать объявления.";
	$admin_levels_classifiedsettings[28] = "<b>Комментарии к объявлениям</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может оставлять комментарии на их объявления. Если Вы не измените опции, то каждый будет иметь возможность оставлять комментарии.";
	$admin_levels_classifiedsettings[29] = "Редактирование уровней пользователя:";
	$admin_levels_classifiedsettings[30] = "Вы в настоящее время редактируете настройки данных пользовательских уровней. Помните, что эти настройки применяются только к пользователям, которые относятся к данному пользовательскому уровню. Когда Вы закончите, то можете редактировать <a href='admin_levels.php'>другие уровни</a>.";
	$admin_levels_classifiedsettings[31] = "Разрешить фото в объявлении?";
	$admin_levels_classifiedsettings[32] = "Если эта функция включена, пользователи смогут загрузить небольшую фотографию (иконку) при создании или редактировании объявления. Она будет отображаться рядом с именем в объявлении, в результатах поиска/просмотра и т.д.";
	$admin_levels_classifiedsettings[33] = "Да, пользователь может загрузить иконку-изображение.";
	$admin_levels_classifiedsettings[34] = "Нет, пользователь не может загрузить иконку-изображение.";
	$admin_levels_classifiedsettings[35] = "Если Вы выбрали Да, то пожалуйста, введите максимальные размеры для фотографий. Если Ваши пользователям загружают фотографии, которые больше, чем эти размеры, сервер масштабирует их автоматически. Эта функция требует, чтобы ваши PHP сервер был скомпилирован с поддержкой GD библиотеки.";
	$admin_levels_classifiedsettings[36] = "Макс. ширина:";
	$admin_levels_classifiedsettings[37] = "(в пикселах, целое число от 1 до 999)";
	$admin_levels_classifiedsettings[38] = "Макс. высота:";
	$admin_levels_classifiedsettings[39] = "Список следующих расширений файлов, которые пользователи могут загрузить. Отдельные расширения файлов разделяются запятыми, например: jpg, gif, jpeg, png, bmp";
	$admin_levels_classifiedsettings[40] = "Разрешённые типы файлов:";
	$admin_levels_classifiedsettings[41] = "Файлы объявлений";
	$admin_levels_classifiedsettings[42] = "Список следующих расширений файлов, которые пользователи могут загрузить. Отдельные расширения файлов разделяются запятыми, например: jpg, gif, jpeg, png, bmp";
	$admin_levels_classifiedsettings[43] = "Чтобы успешно загрузить файл, он должен иметь разрешённое расширение так же как и разрешённый тип MIME. Это препятствует пользователям маскировать злонамеренные файлы с поддельным расширением. Отдельные типы MIME разделяются запятыми, например: image/jpeg, image/gif, image/png, image/bmp";
	$admin_levels_classifiedsettings[44] = "Сколько свободного пространства необходимо иметь каждому пользователю, что-бы хранить свои файлы?";
	$admin_levels_classifiedsettings[45] = "Без лимита";
	$admin_levels_classifiedsettings[46] = "Введите максимальный размер для загружаемых файлов в КБ. Это должна быть величина между 1 и 204800.";
	$admin_levels_classifiedsettings[47] = "Введите ширину и высоту (в пикселях) картинок, загруженных в альбомы. Изображения с размерами вне этого диапазона будут уменьшены соответственно, если Вашем сервере установлена GD библиотека. Заметим, что необычное изображение типа TIFF, RAW, и другие не могут быть изменены.";
	$admin_levels_classifiedsettings[48] = "Макс. ширина:";
	$admin_levels_classifiedsettings[49] = "Макс. высота:";
	$admin_levels_classifiedsettings[50] = "(в пикселах, целое число от 1 до 9999)";
	break;

  case "admin_viewclassifieds":
	$admin_viewclassifieds[1] = "Просмотр списка объявлений";
	$admin_viewclassifieds[2] = "Эта страница содержит список всех объявлений пользователей, которые были созданы в Вашей социальной сети. Вы можете использовать эту страницу, чтобы отслеживать эти объявления и удалять оскорбительные или нежелательные материалы, если это необходимо. Ввод критериев в области фильтра поможет Вам найти конкретные объявления. Если оставить поля фильтра пустыми, то будут будут показаны все объявления социальной сети.";
	$admin_viewclassifieds[3] = "Название";
	$admin_viewclassifieds[4] = "Создатель";
	$admin_viewclassifieds[5] = "Фильтр";
	$admin_viewclassifieds[6] = "ID";
	$admin_viewclassifieds[7] = "Просмотры";
	$admin_viewclassifieds[8] = "Дата";
	$admin_viewclassifieds[9] = "Опции";
	$admin_viewclassifieds[10] = "просмотр";
	$admin_viewclassifieds[11] = "удалить";
	$admin_viewclassifieds[12] = "Найдено в списке объявлений";
	$admin_viewclassifieds[13] = "Страница:";
	$admin_viewclassifieds[14] = "Удалить список объявлений";
	$admin_viewclassifieds[15] = "Вы действительно хотите удалить этот список объявлений?";
	$admin_viewclassifieds[16] = "Отмена";
	$admin_viewclassifieds[17] = "Записей не обнаружено.";
	$admin_viewclassifieds[18] = "Без названия";
	$admin_viewclassifieds[19] = "Удалить отмеченное";
	break;

  case "classifieds":
	$classifieds[1] = "Пользователь, которого Вы ищете, не существует!";
	$classifieds[2] = "Объявления";
	$classifieds[3] = "не написал никаких объявлений.";
	$classifieds[4] = "Без названия";
	$classifieds[5] = "комментариев";
	$classifieds[6] = "добавить комментарий";
	$classifieds[7] = "Предыдущая страница";
	$classifieds[8] = "посмотреть объявление";
	$classifieds[9] = "из";
	$classifieds[10] = "посмотреть объявления";
	$classifieds[11] = "Следующая страница";
	$classifieds[12] = "Произошла ошибка";
	$classifieds[13] = "Вы должны войти, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$classifieds[14] = "Вернуться";
	$classifieds[15] = "Добавить";
	$classifieds[16] = "в";
	$classifieds[17] = "Категория:";
	$classifieds[18] = "просмотров";
	break;

  case "classified_category":
	$classified_category[1] = "Все объявления ";
	$classified_category[2] = "Без названия";
	$classified_category[3] = "комментариев";
	$classified_category[4] = "добавить комментарий";

	$classified_category[6] = "Предыдущая страница";
	$classified_category[7] = "посмотреть объявление";
	$classified_category[8] = "из";
	$classified_category[9] = "посмотреть объявления";
	$classified_category[10] = "Следующая страница";
	break;

  case "classified":
	$classified[1] = "У Вас нет прав для просмотра этого файла.";
	$classified[2] = " - объявления:";
	$classified[3] = "";
	$classified[4] = "Категории объявлений";
	$classified[5] = "Без названия";
	$classified[6] = "добавить комментарий";
	$classified[7] = "Категория:";
	$classified[8] = "Комментариев";
	$classified[9] = "Комментарий от";
	$classified[10] = "в";
	$classified[11] = "Анонимный";
	$classified[12] = "Пользователь, которого Вы ищете, не существует.";
	$classified[13] = "Произошла ошибка";
	$classified[14] = "Напишите что-нибудь...";
	$classified[15] = "Добавление...";
	$classified[16] = "Пожалуйста напишите сообщение.";
	$classified[17] = "Вы ввели неверный код безопасности.";
	$classified[18] = "Добавить комментарий";
	$classified[19] = "Введите цифры, которые Вы видите на этом изображении, в поле слева. Это помогает защитить наш сайт от спама.";
	$classified[20] = "сообщение";
	$classified[21] = "Отправить личное сообщение";
	$classified[22] = "Вернуться";
	$classified[23] = "Вы должны войти, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$classified[24] = "Назак к ";
	$classified[25] = "объявлениям ";
	$classified[26] = "Сообщить о не пристойном содержании";
	$classified[27] = "Добавить";
	$classified[28] = "в";
	$classified[29] = "просмотров";
	$classified[30] = " | ";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_classified":
	$user_classified[1] = "Показать мои объявления";
	$user_classified[2] = "Настройки объявлений";
	$user_classified[3] = "Список моих объявлений";
	$user_classified[4] = "Список объявлений - отличный способ предложить что-нибудь для продажи, покупки, обмена, поиска вакансии или просто встречаете новых людей.";
	$user_classified[5] = "Добавить новое объявление";
	$user_classified[6] = "Поиск в списках";
	$user_classified[7] = "Обзор всех объявлений";
	$user_classified[8] = "Поиск в моих списках:";
	$user_classified[9] = "Предыдущая страница";
	$user_classified[10] = "посмотреть объявление";
	$user_classified[11] = "из";
	$user_classified[12] = "посмотреть объявления";
	$user_classified[13] = "Следующая страница";
	$user_classified[14] = "Никаких объявлений не было найдено";
	$user_classified[15] = "У Вас нет никаких объявлений.";
	$user_classified[16] = "Нажмите здесь";
	$user_classified[17] = "чтобы добавить.";
	$user_classified[18] = "Дата";
	$user_classified[19] = "Заголовок";
	$user_classified[20] = "Комментариев";
	$user_classified[21] = "Без названия";
	$user_classified[22] = "комментариев";
	$user_classified[23] = "ред. объявление";
	$user_classified[24] = "удалить";
	$user_classified[25] = "Удалить выбраное";
	$user_classified[26] = "Поиск";
	$user_classified[27] = "Опции";
	$user_classified[28] = "ред. фото";
	$user_classified[29] = "Добавлено";
	$user_classified[30] = "просмотров";
	break;

  case "user_classified_browse":
	$user_classified_browse[1] = "Показать мои объявления";
	$user_classified_browse[2] = "Настройки объявлений";
	$user_classified_browse[3] = "Обзор всех объявлений";
	$user_classified_browse[4] = "Обзор объявлений по категориям (все категории)";
	$user_classified_browse[5] = "Добро пожаловать! Обзор всех объявлений, добавляйте объявления о продаже, или другие требуемые объявления";
	$user_classified_browse[6] = "Предыдущая страница";
	$user_classified_browse[7] = "показать список";
	$user_classified_browse[8] = "из";
	$user_classified_browse[9] = "показать списки";
	$user_classified_browse[10] = "Следующая страница";
	$user_classified_browse[11] = "Без названия";
	$user_classified_browse[12] = "комментариев";
	$user_classified_browse[13] = "просмотров";
	$user_classified_browse[14] = "Добавлено";
	$user_classified_browse[15] = "Все списки";
	$user_classified_browse[16] = "Найти";
	$user_classified_browse[17] = "списки";
	$user_classified_browse[18] = "Обзор объявлений из категории";
	$user_classified_browse[19] = "Поиск во всех объявлениях";
	$user_classified_browse[20] = "(Направление)";
	break;

  case "user_classified_delete":
	$user_classified_delete[1] = "Показать мои объявления";
	$user_classified_delete[2] = "Настройки объявлений";
	$user_classified_delete[3] = "Удалить список объявлений?";
	$user_classified_delete[4] = "Вы уверены, что Вы хотите удалить этот список объявлений? Это будет удалено из всех Ваших категорий безвозвратно!";
	$user_classified_delete[5] = "Удалить объявление";
	$user_classified_delete[6] = "Отмена";
	$user_classified_delete[7] = "Обзор всех объявлений";
	break;

  case "user_classified_edit":
	$user_classified_edit[1] = "Показать мои объявления";
	$user_classified_edit[2] = "Настройки объявлений";
	$user_classified_edit[3] = "Редактировать категории объявлений";
	$user_classified_edit[4] = "Редактируйте детали этих категорий для объявлений.";
	$user_classified_edit[5] = "Заголовок:";
	$user_classified_edit[6] = "Категория:";
	$user_classified_edit[7] = "Обзор всех объявлений";
	$user_classified_edit[8] = "Показать доп. настройки";
	$user_classified_edit[10] = "Добавить это объявление в результаты поиска?";
	$user_classified_edit[11] = "Да, добавить это объявление в результаты поиска.";
	$user_classified_edit[12] = "Нет, не добавлять это объявление в результаты поиска.";
	$user_classified_edit[13] = "Кто может видеть это объявление?";
	$user_classified_edit[14] = "Кто может оставлять комментарии к этому объявлению?";
	$user_classified_edit[15] = "Редактировать объявление";
	$user_classified_edit[16] = "Пожалуйста введите заголовок и описание для этого объявления.";
	$user_classified_edit[17] = "Отмена";

	$user_classified_edit[18] = "Описание:";
	break;


  case "user_classified_edit_media":
	$user_classified_edit_media[1] = "Показать мои объявления";
	$user_classified_edit_media[2] = "Настройки объявлений";
	$user_classified_edit_media[3] = "Редактировать фото для объявления";
	$user_classified_edit_media[4] = "Воспользуйтесь этой страницей для смены фото к Вашим объявлениям.";
	$user_classified_edit_media[5] = "Обзор всех объявлений";
	$user_classified_edit_media[6] = "Ваше объявление добавлено! Вы хотите добавить фотографии?";
	$user_classified_edit_media[7] = "Маленькое фото";
	$user_classified_edit_media[8] = "Загрузить";
	$user_classified_edit_media[9] = "Заменить эту фотографию:";
	$user_classified_edit_media[10] = "удалить фото"; // USED IN JAVASCRIPT, ESCAPE ANY DOUBLE QUOTES
	$user_classified_edit_media[11] = "Большие фото";
	$user_classified_edit_media[12] = "удалить фото";
	$user_classified_edit_media[13] = "Удаление фото...";
	$user_classified_edit_media[14] = "Добавьте фотографию:";
	$user_classified_edit_media[15] = "Назад к объявлениям";
	$user_classified_edit_media[16] = "Ваш файл не загружен. Пожалуйста загружайте файлы изображений.";
	$user_classified_edit_media[17] = "Добавить фото сейчас";
	$user_classified_edit_media[18] = "Возможно позже";
	break;

  case "user_classified_new":
	$user_classified_new[1] = "Показать мои объявления";
	$user_classified_new[2] = "Настройки объявлений";
	$user_classified_new[3] = "Добавление нового объявления";
	$user_classified_new[4] = "Напишите свое объявление, нажмите \"Добавить объявление\" чтобы опубликовать его.";
	$user_classified_new[5] = "Заголовок:";
	$user_classified_new[6] = "Категория:";
	$user_classified_new[7] = "Показать доп. настройки";
	$user_classified_new[8] = "Обзор всех объявлений";
	$user_classified_new[9] = "Добавить это объявление в результаты поиска?";
	$user_classified_new[10] = "Да, добавить это объявление в результаты поиска.";
	$user_classified_new[11] = "Нет, не добавлять это объявление в результаты поиска.";
	$user_classified_new[12] = "Кто может видеть это объявление?";
	$user_classified_new[13] = "Кто может оставлять комментарии к этому объявлению?";
	$user_classified_new[14] = "Добавить объявление";
	$user_classified_new[15] = "Пожалуйста введите заголовок и описание для этого объявления.";
	$user_classified_new[16] = "Отмена";
	$user_classified_new[17] = "Описание:";
	break;

  case "user_classified_preview":
	$user_classified_preview[1] = "Без названия";
	break;

  case "user_classified_settings":
	$user_classified_settings[1] = "Ваши изменения сохранены.";
	$user_classified_settings[2] = "Показать мои объявления";
	$user_classified_settings[3] = "Настройки объявлений";


	$user_classified_settings[6] = "Сохранить изменения";
	$user_classified_settings[7] = "Редактировать настройки";
	$user_classified_settings[8] = "Редактирование настроек Ваших объявлений";
	$user_classified_settings[9] = "Уведомления о комментариях";
	$user_classified_settings[10] = "Вы хотете получать уведомления, когда кто-нибудь оставляет комментарии к Вашим объявлениям?";
	$user_classified_settings[11] = "Да, я хочу получать уведомления.";
	$user_classified_settings[12] = "Нет доступных настроек для Вашего списка объявлений.";
	$user_classified_settings[13] = "Обзор всех объявлений";
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