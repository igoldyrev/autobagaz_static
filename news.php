<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Новости</title>";
?>

<meta name="description" content="Продажа и прокат багажников и автобоксов THULE, Mont Blanc, Amos, Atera, Атлант в Перми. Пермь, ул. Спешилова 102, павильон 29.">
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
mysql_select_db('9082410193_news', $sql);


mysql_query ("set_client='utf8'");//Следующие 2 строки решают проблему с кодировкой.
mysql_query ("SET NAMES utf8");

// Количество новостей на странице
$on_page = 10;


// Получаем количество записей таблицы news
$query = "SELECT COUNT(*) FROM `news`";
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
$query = "SELECT `news_title`, `news_link`, `news_text`, `news_date` FROM `news` ORDER BY `news_date` DESC LIMIT $start_from, $on_page";
$res = mysql_query($query);


// Вывод результатов
echo '<table class="newslist"><tr><th>Дата</th><th>Заголовок</th></tr>';
while ($row = mysql_fetch_assoc($res))
{
    echo '<tr>';
    echo '<td width="100px" class="newslist">'.$row['news_date'].'</td>';
    echo '<td class="newslist"><a href="'.$row['news_link'].'">'.$row['news_title'].'</a></td>';
    echo '</tr>';
}
echo '</table>';


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
        echo '<a href="news.php?page='.$page.'">'.$page.'</a> &nbsp;';
    }
}
echo '</p>';
?>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>