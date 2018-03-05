<?php


//В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
$name = $_POST['1'];

//Заносим данные из формы в переменные
$name = $_REQUEST['1'];

echo $name;

include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>