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
$gallery = [
		[
		'id' => 1,
		'name' => 'Lada Xray',
		'img1' => '<img class="img_main" src="/images/gallery/20170303_1_xray.jpg" srcset="/images/gallery/20170303_1_xray.jpg 900w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170303_2_xray.jpg" srcset="/images/gallery/20170303_2_xray.jpg 600w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170303_3_xray.jpg" srcset="/images/gallery/20170303_3_xray.jpg 600w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170303_4_xray.jpg" srcset="/images/gallery/20170303_4_xray.jpg 600w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170303_5_xray.jpg" srcset="/images/gallery/20170303_5_xray.jpg 500w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img6' => '<img class="img_main" src="/images/gallery/20170303_6_xray.jpg" srcset="/images/gallery/20170303_6_xray.jpg 700w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		

];

foreach ($gallery as $photos): ?>
	<h3><?php echo $photos['name']; ?></h3>
	<div class="img_div">
		<?php echo $photos['img1']; ?>
		<?php echo $photos['img2']; ?>
		<?php echo $photos['img3']; ?> 
		<?php echo $photos['img4']; ?> 
		<?php echo $photos['img5']; ?> 
		<?php echo $photos['img6']; ?> 
		<?php echo $photos['img7']; ?>
		<?php echo $photos['img8']; ?> 
	</div>
<?php endforeach; ?>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>