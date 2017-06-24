<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Галерея</title>";
?>

<meta name="description" content="Галерея клиентов магазина autobagaz.ru Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="автобагажники, автомобильные багажники, багажники для автомобиля, прокат, прокат багажников, прокат боксов, багажные системы, багажник на крышу, автобагажники на крышу, автомобильные боксы, автобоксы, автобокс, бокс, бокс на крышу, автобокс на крышу, велобагажники, велокрепления, багажники для велосипедов, велокрепления на крышу, велокрепления на фаркопы, крепления для лыж, крепления для сноубордов, рейлинги, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, thule, туле, Yuago, ЯГО, Турино, Lux, Люкс, Атлант, Discovery, Amos, Амос, Mont Blanc, Монблан, Can, Voyager, Cosmo, Муравей, Атера, Atera, menabo"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
<div id="content">
<?php

// Соединение с БД MySQL
$sql = mysql_connect('localhost', '9082410193', 'GfhjkmDatabase');
mysql_select_db('9082410193_gallery', $sql);


mysql_query ("set_client='utf8'");//Следующие 2 строки решают проблему с кодировкой.
mysql_query ("SET NAMES utf8");

// Количество новостей на странице
$on_page = 10;


// Получаем количество записей таблицы news
$query = "SELECT COUNT(*) FROM `photos`";
$res = mysql_query($query);
$count_records = mysql_fetch_row($res);
$count_records = $count_records[0];


// Получаем количество страниц
// Делим количество записей на количество новостей на странице
// и округляем в большую сторону
$num_pages = ceil($count_records / $on_page);


// Текущая страница из GET-параметра page
// Если параметр не определен, то текущая страница равна 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Если текущая страница меньше единицы, то страница равна 1
if ($current_page < 1)
{
    $current_page = 1;
}
// Если текущая страница больше общего количества страница, то
// текущая страница равна количеству страниц
elseif ($current_page > $num_pages)
{
    $current_page = $num_pages;
}


// Начать получение данных от числа (текущая страница - 1) * количество записей на странице
$start_from = ($current_page - 1) * $on_page;


// Формат оператора LIMIT <ЗАПИСЬ ОТ>, <КОЛИЧЕСТВО ЗАПИСЕЙ>
$query = "SELECT `id`, `name`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img_alt` FROM `photos` ORDER BY `id` DESC LIMIT $start_from, $on_page";
$res = mysql_query($query);


// Вывод результатов
while ($row = mysql_fetch_assoc($res))
{
    echo '<h2>'.$row['name'].'</h2>';
    echo '<div class="img_div">';
    echo '<img class="img_main" src="'.$row['img1'].'" srcset="'.$row['img1'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
    echo '<img class="img_main" src="'.$row['img2'].'" srcset="'.$row['img2'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img3'].'" srcset="'.$row['img3'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img4'].'" srcset="'.$row['img4'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img5'].'" srcset="'.$row['img5'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img6'].'" srcset="'.$row['img6'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img7'].'" srcset="'.$row['img7'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img8'].'" srcset="'.$row['img8'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img9'].'" srcset="'.$row['img9'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '<img class="img_main" src="'.$row['img10'].'" srcset="'.$row['img10'].' 200w" alt="'.$row['img_alt'].'" sizes="(max-width: 2000px) 150px, 300px, 350px">';
	echo '</div>';
}

// Вывод списка страниц
echo '<p>';
for ($page = 1; $page <= $num_pages; $page++)
{
    if ($page == $current_page)
    {
        echo '<strong>'.$page.'</strong> &nbsp;';
    }
    else
    {
        echo '<a href="gallery.php?page='.$page.'">'.$page.'</a> &nbsp;';
    }
}
echo '</p>';
?>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>