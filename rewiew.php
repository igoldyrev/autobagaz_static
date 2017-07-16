<?php
// Соединение с БД MySQL
$sql = mysql_connect('localhost', '9082410193', 'GfhjkmDatabase');
mysql_select_db('9082410193_zakaz', $sql);
mysql_query ("set_client='utf8'");//Следующие 2 строки решают проблему с кодировкой.
mysql_query ("SET NAMES utf8");

//В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
$name = $_POST['name'];
$rewiew = $_POST['rewiew'];
//Первая функция преобразует все символы, которые пользователь попытается добавить в форму
$name = htmlspecialchars($name);
$rewiew = htmlspecialchars($rewiew);
//Вторая функция декодирует url, если пользователь попытается его добавить в форму
$name = urldecode($name);
$rewiew = urldecode($rewiew);
//Третьей функцией мы удалим пробелы с начала и конца строки, если таковые имеются
$name = trim($name);
$rewiew = trim($rewiew);
//Заносим данные из формы в переменные
$name = $_REQUEST['name'];
$rewiew = $_REQUEST['rewiew'];
//Создаем запрос в базу данных
$sql_insert = "INSERT INTO rewiews (name, rewiew)" . 
"VALUES('{$name}', '{$rewiew}');";
mysql_query($sql_insert);

if (mail("autobagaz@yandex.ru", "Отзыв с сайта", "Имя:".$name.";
Текст отзыва: ".$rewiew ,
"From: autobagaz@yandex.ru \r\n"))
 {     	echo "<center><b>Спасибо за отзыв!</b><br><br><center>Через 3 секунды Вы будете перенаправлены на главную страницу<br><br>Если этого не произошло, то нажмите на ссылку:<br><a href='/'>Вернуться назад</a>"; 
header('Refresh: 3; URL=/');
} 
else { 
    echo "<center>Произошла ошибка :(<br><a href='/'>Вернуться на главную страницу</a>";
}
include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>