<?
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_poll[1] = "Опросы";
$header_poll[2] = "смотреть все";
$header_poll[3] = "Без названия";
$header_poll[4] = "зайчик(ов)";

// ASSIGN ALL SMARTY GENERAL poll VARIABLES
reset($header_poll);
while(list($key, $val) = each($header_poll)) {
  $smarty->assign("header_poll".$key, $val);
}


// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$functions_poll[1] = "опросы";
$functions_poll[2] = "Создан ";
$functions_poll[3] = "Без названия";



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_poll":
	$admin_poll[1] = "Poll Settings";
	$admin_poll[2] = "Allowing users to create polls adds some extra interactivity and fun to your social network.<br>For more poll-related settings, see the <a href='admin_levels.php'>user levels</a> area.";
	$admin_poll[3] = "Your changes have been saved.";
	$admin_poll[4] = "Public Permission Defaults";
	$admin_poll[5] = "Select whether or not you want to let the public (visitors that are not logged-in) view polls on your social network. If you have given them the option, your users will be able to make their polls private even though you have made them publically viewable here. For more permissions settings, please visit the General Settings page.";
	$admin_poll[6] = "Yes, public visitors can view polls if allowed by the poll creators.";
	$admin_poll[7] = "No, public visitors can never view polls.";
	$admin_poll[8] = "Save Changes";
	break;

  case "admin_levels_pollsettings":
	$admin_levels_pollsettings[1] = "Poll Settings";
	$admin_levels_pollsettings[2] = "If you have allowed users to have create polls, you can adjust their details from this page.";
	$admin_levels_pollsettings[3] = "Polls Per Page";
	$admin_levels_pollsettings[4] = "How many polls will be shown per page? (Enter a number between 1 and 999)";
	$admin_levels_pollsettings[5] = "polls per page";
	$admin_levels_pollsettings[6] = "Save Changes";
	$admin_levels_pollsettings[7] = "Your changes have been saved.";
	$admin_levels_pollsettings[8] = "Your polls per page field must contain an integer between 1 and 999.";
	$admin_levels_pollsettings[9] = "Allow polls?";
	$admin_levels_pollsettings[10] = "Do you want to let users create polls? If set to no, all other settings on this page will not apply.";
	$admin_levels_pollsettings[11] = "Yes, allow users to create polls.";
	$admin_levels_pollsettings[12] = "No, do not allow users to create polls.";
	$admin_levels_pollsettings[13] = "<b>Search Privacy Options</b><br>If you enable this feature, users will be able to exclude their polls from search results. Otherwise, all polls will be included in search results.";
	$admin_levels_pollsettings[14] = "Yes, allow users to exclude their polls from search results.";
	$admin_levels_pollsettings[15] = "No, force all polls to be included in search results.";
	$admin_levels_pollsettings[16] = "Poll Privacy Options";
	$admin_levels_pollsettings[17] = "<b>Poll Privacy</b><br>Your users can choose from any of the options checked below when they decide who can see their polls. These options appear on your users' \"create poll\" and \"edit poll\" pages. If you do not check any options, everyone will be allowed to view polls.";
	$admin_levels_pollsettings[18] = "<b>Poll Comment Options</b><br>Your users can choose from any of the options checked below when they decide who can post comments on their polls. If you do not check any options, everyone will be allowed to post comments on polls.";
	$admin_levels_pollsettings[19] = "Editing User Level:";
	$admin_levels_pollsettings[20] = "You are currently editing this user level's settings. Remember, these settings only apply to the users that belong to this user level. When you're finished, you can edit the <a href='admin_levels.php'>other levels here</a>.";
	break;

case "admin_viewpolls":
	$admin_viewpolls[1] = "View Polls";
	$admin_viewpolls[2] = "This page lists all of the polls that users have created on your social network. You can use this page to monitor these polls and delete offensive or unwanted material if necessary. Entering criteria into the filter fields will help you find specific polls. Leaving the filter fields blank will show all the polls on your social network.";
	$admin_viewpolls[3] = "Title";
	$admin_viewpolls[4] = "Creator";
	$admin_viewpolls[5] = "Filter";
	$admin_viewpolls[6] = "ID";
	$admin_viewpolls[7] = "Title";
	$admin_viewpolls[8] = "Creator";
	$admin_viewpolls[9] = "Delete this poll?";
	$admin_viewpolls[10] = "Created";
	$admin_viewpolls[11] = "Options";
	$admin_viewpolls[12] = "view";
	$admin_viewpolls[13] = "delete";
	$admin_viewpolls[14] = "polls found";
	$admin_viewpolls[15] = "Page:";
	$admin_viewpolls[16] = "Delete poll";
	$admin_viewpolls[17] = "Are you sure you want to delete this poll?";
	$admin_viewpolls[18] = "Cancel";
	$admin_viewpolls[19] = "No polls were found.";
	$admin_viewpolls[20] = "Delete Selected";
	$admin_viewpolls[21] = "Are you sure you want to delete this poll?";
	$admin_viewpolls[22] = "Delete Poll";
	$admin_viewpolls[23] = "Cancel";
	$admin_viewpolls[24] = "Votes";
	break;

  case "poll":
	$poll[1] = "У вас нет разрешения для просмотра.";
	$poll[2] = "Создан в";
	$poll[3] = "зайчик(ов),";
	$poll[4] = "комментариев,";
	$poll[5] = "просмотр(ов)";
	$poll[6] = "добавить комментарий";
	$poll[7] = "смотреть результаты";
	$poll[8] = "Комментарии";
	$poll[9] = "Комментарий от";
	$poll[10] = "в";
	$poll[11] = "Аноним";
	$poll[12] = "Пользователь не существует.";
	$poll[13] = "Произошла ошибка";
	$poll[14] = "Напишите...";
	$poll[15] = "Добавление...";
	$poll[16] = "Пожалуйста, введите сообщение.";
	$poll[17] = "Вы ввели неправильный код безопасности.";
	$poll[18] = "Добавить комментарий";
	$poll[19] = "Введите числа в правое поле. Это защитит наш сайт от спама.";
	$poll[20] = "сообщение";
	$poll[21] = "\\в"; // USED IN A DATE FUNCTION, ADD SLASHES TO ESCAPE CHARACTERS
	$poll[22] = "Вернуться";
	$poll[23] = "Вы должны авторизоваться для просмотра этой страницы. <a href='login.php'>Нажмите здесь</a> для входа.";
	$poll[24] = "голосовать";
	$poll[25] = "или";
	$poll[26] = "Назад к";
	$poll[27] = "Добавлен";
	$poll[28] = "в";
	$poll[29] = "просмотр(ов)";
	$poll[30] = " опросы";
	$poll[31] = "";
	$poll[32] = "опросы";
	$poll[33] = "Послать Сообщение";
	$poll[34] = "Сообщить о недостойном содержании";
	$poll[35] = "зайчиков"; // USED IN JAVASCRIPT, DONT USE SLASHES, QUOTES OR APOSTROPHES
	$poll[36] = "назад к ответам"; // USED IN JAVASCRIPT, DONT USE SLASHES, QUOTES OR APOSTROPHES
  break;

  case "polls":
	$polls[1] = "Пожалуйста, Авторизуйтесь";
	$polls[2] = "Вы должны авторизоваться. <a href='login.php'>Нажмите здесь</a>, чтобы войти.";
	$polls[3] = "Вернуться";
	$polls[4] = "Произошла ошибка";
	$polls[5] = "Страница не существует.";
	$polls[6] = "Приватная Страница";
	$polls[7] = "Страница, которую вы пытаетесь просмотреть является приватной.";
	$polls[8] = "опросы";
	$polls[9] = "Последняя Страница";
	$polls[10] = "страниц";
	$polls[11] = "из";
	$polls[12] = "страниц";
	$polls[13] = "Следующая Страница";
	$polls[14] = "Аноним";
	$polls[15] = "";
	$polls[16] = "Напишите...";
	$polls[17] = "Добавление...";
	$polls[18] = "Добавить Комментарий";
	$polls[19] = "\\в"; // USED IN TIME FUNCTION, ESCAPE CHARS
	$polls[20] = "сообщение";
	$polls[21] = "Созданно в";
	$polls[22] = "зайчиков,";
	$polls[23] = "комментариев";
	$polls[24] = "смотреть результаты";
	$polls[25] = "или";
	$polls[26] = "голосовать";
	$polls[27] = "зайчиков"; // USED IN JAVASCRIPT, DONT USE SLASHES, QUOTES OR APOSTROPHES
	$polls[28] = "назад к ответам"; // USED IN JAVASCRIPT, DONT USE SLASHES, QUOTES OR APOSTROPHES
	break;

  case "poll_vote":
	$poll_vote[1] = "Произошла ошибка.";
	$poll_vote[2] = "Вы должны быть зарегистрированным пользователем, чтобы проголосовать в этом опросе.";
	$poll_vote[3] = "Пожалуйста выберите ответ.";
	$poll_vote[4] = "Вы уже голосовали в этом опросе.";
	$poll_vote[5] = "Извините, этот опрос был закрыт для голосования.";
	break;

  case "user_poll":
	$user_poll[1] = "Мои Опросы";
	$user_poll[2] = "Поиск Других Опросов";
	$user_poll[3] = "Мои Опросы";
	$user_poll[4] = "Любые ваши опросы будут собраны здесь.";
	$user_poll[5] = "Создать Новый Опрос";
	$user_poll[6] = "Название Опроса";
	$user_poll[7] = "Найти в мои опросах:";
	$user_poll[8] = "Найти";
	$user_poll[9] = "Последняя Страница";
	$user_poll[10] = "страниц";
	$user_poll[11] = "из";
	$user_poll[12] = "страниц";
	$user_poll[13] = "Следующая Страница";
	$user_poll[14] = "Найти Мои Опросы";
	$user_poll[15] = "Создан";
	$user_poll[16] = "Ответов";
	$user_poll[17] = "зайчиков,";
	$user_poll[18] = "комментариев,";
	$user_poll[19] = "просмотров";
	$user_poll[20] = "редатировать опрос";
	$user_poll[21] = "удалить";
	$user_poll[22] = "По вашему запросу опросов не найдено.";
	$user_poll[23] = "У вас пока нет опросов. <a href='user_poll_new.php'>Нажмите здесь</a>, чтобы создать!";
	$user_poll[24] = "Без названия";
	$user_poll[25] = "открыть опрос";
	$user_poll[26] = "закрыть опрос";
	break;

  case "user_poll_browse":
	$user_poll_browse[1] = "Мои Опросы";
	$user_poll_browse[2] = "Поиск Других Опросов";
	$user_poll_browse[3] = "Поиск Опросов";
	$user_poll_browse[4] = "Поиск опросов созданных другими пользователями.";
	$user_poll_browse[5] = "Новые";
	$user_poll_browse[6] = "С зайчиками";
	$user_poll_browse[7] = "Поиск опроса:";
	$user_poll_browse[8] = "Найти";
	$user_poll_browse[9] = "Последняя Страница";
	$user_poll_browse[10] = "страниц";
	$user_poll_browse[11] = "из";
	$user_poll_browse[12] = "страниц";
	$user_poll_browse[13] = "Следующая Страница";
	$user_poll_browse[14] = "зайчиков";
	$user_poll_browse[15] = "Добавил";
	$user_poll_browse[16] = "комментариев,";
	$user_poll_browse[17] = "просмотров";
	$user_poll_browse[18] = "Без названия";
	$user_poll_browse[19] = "По вашему запросу опросов не найдено.";
	$user_poll_browse[20] = "Опросов не найдено. <a href='user_poll_new.php'>Нажмите здесь</a>, чтобы создать!";
	break;

  case "user_poll_delete":
	$user_poll_delete[1] = "Мои Опросы";
	$user_poll_delete[2] = "Поиск Других Опросов";
	$user_poll_delete[3] = "Ошибка";
	$user_poll_delete[4] = "Опрос не найден.";
	$user_poll_delete[5] = "Вернуться";
	$user_poll_delete[6] = "Удалить Опрос";
	$user_poll_delete[7] = "Вы действительно хотите удалить этот опрос?";
	$user_poll_delete[8] = "Удалить Опрос";
	$user_poll_delete[9] = "Отмена";
	break;

  case "user_poll_edit":
	$user_poll_edit[1] = "Мои Опросы";
	$user_poll_edit[2] = "Поиск Других Опросов";
	$user_poll_edit[3] = "Редактировать Опрос";
	$user_poll_edit[4] = "Изменение деталей опроса.";
	$user_poll_edit[5] = "Название:";
	$user_poll_edit[6] = "Описание:";
	$user_poll_edit[7] = "Изменить";
	$user_poll_edit[8] = "Показать Настройки Безопасности";
	$user_poll_edit[9] = "Пожалуйста, введите название для нового опроса";
	$user_poll_edit[10] = "Включить этот опрос в результаты поиска?";
	$user_poll_edit[11] = "Да, включать этот опрос в результаты поиска.";
	$user_poll_edit[12] = "Нет, исключить этот опрос из результатов поиска.";
	$user_poll_edit[13] = "Кто может просматривать опрос?";
	$user_poll_edit[14] = "Кто может комментировать опрос?";
	$user_poll_edit[15] = "Отмена";
	$user_poll_edit[16] = "Этот опрос открыт для голосования.";
	$user_poll_edit[17] = "Этот опрос закрыт для голосования. Никто не может проголосовать, пока он не будет открыт.";
	break;

  case "user_poll_new":
	$user_poll_new[1] = "Мои Опросы";
	$user_poll_new[2] = "Поиск Других Опросов";
	$user_poll_new[3] = "Создать Новый Опрос";
	$user_poll_new[4] = "Введите название и описание. Если вы задаёте вопрос, то вы дожны ввести его в названии опроса.";
	$user_poll_new[5] = "Вы не можете задать более 20 вопросов."; // USED IN JAVASCRIPT, DONT USE ANY SLASHES OR QUOTES
	$user_poll_new[6] = "Ответы"; // USED IN JAVASCRIPT, DONT USE ANY SLASHES OR QUOTES
	$user_poll_new[7] = "Показать Настройки Безопасности";
	$user_poll_new[8] = "Пожалуйста, введите название для нового опроса.";
	$user_poll_new[9] = "Включить этот опрос в результаты поиска?";
	$user_poll_new[10] = "Да, включать этот опрос в результаты поиска.";
	$user_poll_new[11] = "Нет, исключить этот опрос из результатов поиска.";
	$user_poll_new[12] = "Кто может просматривать опрос?";
	$user_poll_new[13] = "Кто может комментировать опрос?";
	$user_poll_new[14] = "Пожалуйста, введите минимум 2 возможных ответа в опросе.";
	$user_poll_new[15] = "Пожалуйста, создайте опрос до 20 возможных ответов.";
	$user_poll_new[16] = "Название:";
	$user_poll_new[17] = "Описание:";
	$user_poll_new[18] = "Ответ:";
	$user_poll_new[19] = "Ответ";
	$user_poll_new[20] = "Добавить ответ";
	$user_poll_new[21] = "Создать Опрос";
	$user_poll_new[22] = "Отмена";
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