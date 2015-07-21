<?

// FUNCTION VARIABLES

$functions_phototagger[1] = ' Запрос(ов) фото отметок';
$functions_phototagger[2] = 'Никто не отмечен на этой фотографии';
$functions_phototagger[3] = 'На этой фотографии:';
$functions_phototagger[4] = 'удалить';
$functions_phototagger[5] = 'отменить запрос на отметку';
// this is how the link looks like, so you can play with language order
// $functions_phototagger[6] <a href="./login.php"> $functions_phototagger[7] </a> $functions_phototagger[8]
$functions_phototagger[6] = 'Пожалуйста ';
$functions_phototagger[7] = 'зайдите';
$functions_phototagger[8] = 'сначало';
$functions_phototagger[9] = 'Этот пользователь уже отмечен на фотографии';
$functions_phototagger[10] = 'и ждет подтверждения владельца фотографии';
$functions_phototagger[11] = 'отмечен на фотографии.';
$functions_phototagger[12] = 'Вы теперь отмечены на этой фотографии.';
$functions_phototagger[13] = 'отмечен на фотографии.';
$functions_phototagger[14] = 'Запрос на подтверждение отметки был послан владельцу фотографии.';
$functions_phototagger[15] = 'Отметить еще или нажмите "Готово" если закончили отмечать.';
$functions_phototagger[16] = 'Я';
$functions_phototagger[17] = 'фото';

// ACTIONS (used only during installation)
$action_phototagger[1] = "Когда кто-то отмечает меня на фотографии.";
$action_phototagger[2] = "был отмечен на фотографии.";


// ASSIGN GLOBAL SMARTY VARIABLES

$phototagger_global[1] = 'Запросы фото отметок';

reset($phototagger_global);
while(list($key, $val) = each($phototagger_global)) {
  $smarty->assign("phototagger_global".$key, $val);
}



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_phototagger":
	$admin_phototagger[1] = "Общие настройки Фото Отметок ";
	$admin_phototagger[2] = "Эта страничка содержит общие настройки Фото Отметок.";
	$admin_phototagger[3] = "Изменения сохранены.";
	$admin_phototagger[4] = "Сохранить";
	$admin_phototagger[5] = "Установки публичного доступа";
	$admin_phototagger[6] = "Выберите может ли неавторизированный пользователь видеть отметки на фотографиях.";
	$admin_phototagger[7] = "Да, неавторизированные пользователи могут видеть отметки на фотографиях, если эти фотографии не закрыты приватностью.";
	$admin_phototagger[8] = "Нет, неавторизированные пользователи не могут видеть отметки на фотографиях.";
	break;

  case "album_file":
    $album_file[500] = "Нажмите на область, где изображен человек, и он будет подписан на фотографии.Вы можете добавлять любое количество друзей на фотографию.";
    $album_file[501] = "Отметить на фото";
    $album_file[502] = "Введите текст или имя";
    $album_file[503] = "";
    $album_file[504] = "Добавить";
    $album_file[505] = "Отменить";
    $album_file[506] = "Готово";

    break;
  
  case "photo_search":
    $photo_search[1] = "Фотографии";
    $photo_search[2] = "отмеченные";
    $photo_search[3] = "";
    $photo_search[4] = "добавленные мной - ";
    $photo_search[5] = "добавленные другими";
    $photo_search[6] = "еще не отмечен ни на одной фотографии.";
    $photo_search[7] = "Добавленные";
    $photo_search[8] = "фотографии";
    $photo_search[9] = "";
    $photo_search[10] = "Показать все";
    $photo_search[11] = "Добавленные другими";
    
	$photo_search[13] = "Предыдущая страница";
	$photo_search[14] = "просмотр фотографии";
	$photo_search[15] = "просмотр фотографий";
	$photo_search[16] = "из";
	$photo_search[17] = "Следующая страница";
    
    break;
  
  case "user_media_tagrequests":
	$user_media_tagrequests[1] = "Мои Альбомы";
	$user_media_tagrequests[2] = "Настройки Альбома";
	$user_media_tagrequests[3] = "Альбомы моих друзей";
    $user_media_tagrequests[4] = "Запросы отметок";
    $user_media_tagrequests[5] = "Здесь можно подтвердить или отклонить отметки которые ваши друзья добавили на ваши фотографии.";
    $user_media_tagrequests[6] = "Нет запросов на фото отметки";
    $user_media_tagrequests[7] = "Вы подтвердили эту отметку.";
    $user_media_tagrequests[8] = "Вы отклонили эту отметку.";
    $user_media_tagrequests[9] = "Произошла ошибка, пожалуйста попробуйте позже.";
    $user_media_tagrequests[10] = "Подтвердить";
    $user_media_tagrequests[11] = "Отклонить";
    
	$user_media_tagrequests[13] = "Предыдущая страница";
	$user_media_tagrequests[14] = "просмотр запроса";
	$user_media_tagrequests[15] = "просмотр запросов";
	$user_media_tagrequests[16] = "из";
	$user_media_tagrequests[17] = "Следующая страница";

    $user_media_tagrequests[18] = "попросил отметить";
    $user_media_tagrequests[19] = "Вас";
    $user_media_tagrequests[20] = "Себя";
    $user_media_tagrequests[21] = "на этой фотографии";
    $user_media_tagrequests[22] = "Подтвердить или отклонить?";
    
    /*
    $user_media_tagrequests[] = "";
    */
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