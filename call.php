<?php
//В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
$name = $_POST['name'];
$phone = $_POST['phone'];
//Первая функция преобразует все символы, которые пользователь попытается добавить в форму
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
//Вторая функция декодирует url, если пользователь попытается его добавить в форму
$name = urldecode($name);
$phone = urldecode($phone);
//Третьей функцией мы удалим пробелы с начала и конца строки, если таковые имеются
$name = trim($name);
$phone = trim($phone);


if (mail("autobagaz@yandex.ru", "Звонок с сайта!!!", "Имя:".$name.";
Телефон: ".$phone ,
"From: autobagaz@yandex.ru \r\n"))
 {     	echo "<center><b>Мы Вам обязательно перезвоним!</b><br><br><center>Через 3 секунды Вы будете перенаправлены на предыдущую страницу<br><br>Если этого не произошло, то нажмите на ссылку:<br><a href='/'>Вернуться назад</a>"; 
header('Refresh: 3; URL=/');
} 
else { 
    echo "<center>Произошла ошибка :(<br><a href='/'>Вернуться назад</a>";
}
include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>