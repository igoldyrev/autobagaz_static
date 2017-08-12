<?php
// Соединение с БД MySQL
$sql = mysql_connect('localhost', '9082410193', 'GfhjkmDatabase');
mysql_select_db('9082410193_zakaz', $sql);
mysql_query ("set_client='utf8'");//Следующие 2 строки решают проблему с кодировкой.
mysql_query ("SET NAMES utf8");

//В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
$name = $_POST['name'];
$phone = $_POST['phone'];
$auto = $_POST['auto'];
$kuzov = $_POST['kuzov'];
$year = $_POST['year'];
$text = $_POST['text'];
//Первая функция преобразует все символы, которые пользователь попытается добавить в форму
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$auto = htmlspecialchars($auto);
$kuzov = htmlspecialchars($kuzov);
$year = htmlspecialchars($year);
$text = htmlspecialchars($text);
//Вторая функция декодирует url, если пользователь попытается его добавить в форму
$name = urldecode($name);
$phone = urldecode($phone);
$auto = urldecode($auto);
$kuzov = urldecode($kuzov);
$year = urldecode($year);
$text = urldecode($text);
//Третьей функцией мы удалим пробелы с начала и конца строки, если таковые имеются
$name = trim($name);
$phone = trim($phone);
$auto = trim($auto);
$kuzov = trim($kuzov);
$year = trim($year);
$text = trim($text);
//Заносим данные из формы в переменные
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$auto = $_REQUEST['auto'];
$kuzov = $_REQUEST['kuzov'];
$year = $_REQUEST['year'];
$text = $_REQUEST['text'];
//Создаем запрос в базу данных
$sql_insert = "INSERT INTO zakaz (name, phone, auto, kuzov, year, text)" . 
"VALUES('{$name}', '{$phone}', '{$auto}', '{$kuzov}', '{$year}', '{$text}');";
mysql_query($sql_insert);

$sql_users = "INSERT INTO users (name, phone)" . 
"VALUES('{$name}', '{$phone}');";
mysql_query($sql_users);

if (mail("autobagaz@yandex.ru", "Заказ с сайта", "Имя:".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";
Тип кузова: ".$kuzov.";
Год выпуска: ".$year.";
Текст заявки: ".$text ,"From: autobagaz@yandex.ru \r\n"))
 {     	echo "<center><b>Ваш заказ успешно отправлен!</b><br><br><center>Через 3 секунды Вы будете перенаправлены на предыдущую страницу<br><br>Если этого не произошло, то нажмите на ссылку:<br><a href='zayavka'>Вернуться назад</a>"; 
header('Refresh: 3; URL=/zayavka');
} 
else { 
    echo "<center>При отправке заказа возникли проблемы :(<br><a href='/zayavka'>Вернуться назад</a>";
}
include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>