<?

// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_viewpages":
	$admin_viewpages[1] = "Список страниц";
	$admin_viewpages[2] = "This page lists all of the page that you have created so far.<br><br><b>Instruction:</b> to link to these pages, replace \"page-permanent-key\" or \"page-id\" with corresponding page you want to create a link. You can use any of the following tags in template:<br>
	{\$url->url_create('page', 'page-permanent-key')}
	<br>{\$url->url_create('page', 'page-id')}";
	$admin_viewpages[3] = "Добавить страницу";

	$admin_viewpages[4] = "ID";
	$admin_viewpages[5] = "Название";
	$admin_viewpages[6] = "Ключ";
	$admin_viewpages[7] = "Разрешения";
	$admin_viewpages[8] = "Статус";
	$admin_viewpages[9] = "Последнее обновление";
	
	$admin_viewpages[10] = "Удалить страницу";
	$admin_viewpages[11] = "Вы уверены, что хотите удалить эту страницу?";
	$admin_viewpages[12] = "Удалить страницу";
	$admin_viewpages[13] = "Отмена";
	$admin_viewpages[14] = "Данная страница была удалена.";

	$admin_viewpages[15] = "Настройки";
	$admin_viewpages[16] = "приватный";
	$admin_viewpages[17] = "публичный";
	$admin_viewpages[18] = "выкл.";
	$admin_viewpages[19] = "вкл.";
	$admin_viewpages[20] = "посмотреть";	
	$admin_viewpages[21] = "редактировать";
	$admin_viewpages[22] = "удалить";
	break;
	
  case "admin_viewpages_add":
  	$admin_viewpages_add[1] = "Добавить страницу";
  	$admin_viewpages_add[2] = "Чтобы создать новую страницу, заполните данную форму.";
  	$admin_viewpages_add[3] = "Добавить страницу";
  	$admin_viewpages_add[4] = "Отменить";
  	$admin_viewpages_add[5] = "Настройки страницы";
  	$admin_viewpages_add[6] = "Пожалуйста, введите название страницы";
  	$admin_viewpages_add[7] = "Разрешения";
  	$admin_viewpages_add[8] = "Да, общественность может просматривать эту страницу.";
  	$admin_viewpages_add[9] = "Нет, общественность не можете просматривать эту страницу.";
  	$admin_viewpages_add[10] = "Статус";
  	$admin_viewpages_add[11] = "Включить страницу";
  	$admin_viewpages_add[12] = "Выключить страницу";
  	$admin_viewpages_add[13] = "Контент";
	  $admin_viewpages_add[14] = "The HTML and Smarty code for this page is displayed below. After making your desired changes to the template, be sure to click the \"Save Changes\" button. For help with Smarty, see the <a href='http://smarty.php.net' target='_blank'>official website</a> and <a href='http://smarty.php.net/crashcourse.php' target='_blank'>crash course</a>.";  	
  	$admin_viewpages_add[15] = "Пожалуйста, убедитесь, что Вы правильно заполнили все поля.";
	  break;
  
  case "admin_viewpages_edit":
  	$admin_viewpages_edit[1] = "Редактировать страницу";
  	$admin_viewpages_edit[2] = "Чтобы редактировать страницу, заполните данную форму.";
  	$admin_viewpages_edit[3] = "Сохранить";
  	$admin_viewpages_edit[4] = "Отменить";
  	$admin_viewpages_edit[5] = "Настройки страницы";
  	$admin_viewpages_edit[6] = "Пожалуйста, введите название страницы";
  	$admin_viewpages_edit[7] = "Разрешения";
  	$admin_viewpages_edit[8] = "Да, общественность может просматривать эту страницу.";
  	$admin_viewpages_edit[9] = "Нет, общественность не можете просматривать эту страницу.";
  	$admin_viewpages_edit[10] = "Статус";
  	$admin_viewpages_edit[11] = "Включить страницу";
  	$admin_viewpages_edit[12] = "Выключить страницу";
  	$admin_viewpages_edit[13] = "Контент";
	  $admin_viewpages_edit[14] = "The HTML and Smarty code for this page is displayed below. After making your desired changes to the template, be sure to click the \"Save Changes\" button. For help with Smarty, see the <a href='http://smarty.php.net' target='_blank'>official website</a> and <a href='http://smarty.php.net/crashcourse.php' target='_blank'>crash course</a>.";  	
  	$admin_viewpages_edit[15] = "Пожалуйста, убедитесь, что Вы правильно заполнили все поля.";
  	$admin_viewpages_edit[16] = "Данный ключ используется другой страницей";
  	$admin_viewpages_edit[17] = "Пожалуйста, введите ключ для этой страницы";
  	break;	
	
  case "content":
  	$content[1] = "Произошла ошибка!";
  	$content[2] = "Вернуться";
  	$content[3] = "Вы должны авторизоваться, чтобы посмотреть данную страницу. Нажмите <a href='login.php'>здесь</a> для авторизации.";
  	$content[4] = "Страница временно закрыта. Приносим извинения за неудобства.";
  	$content[5] = "Страница не существует.";
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