<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Комиссионка</title>";
?>

<meta name="description" content="Продажа и прокат б/у багажников и автобоксов THULE, Mont Blanc, Amos, Atera, Атлант, купить в Перми. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="комиссионка, б/у, комиссионные автобагажники, автобагажники, автомобильные багажники, багажники для автомобиля, багажные системы, багажник на крышу, автобагажники на крышу, автомобильные боксы, автобоксы, автобокс, бокс, бокс на крышу, автобокс на крышу, велобагажники, велокрепления, багажники для велосипедов, велокрепления на крышу, велокрепления на фаркопы, крепления для лыж, крепления для сноубордов, рейлинги, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, thule, туле, Yuago, ЯГО, Турино, Lux, Люкс, Атлант, Discovery, Amos, Амос, Mont Blanc, Монблан, Can, Voyager, Cosmo, Муравей, Атера, Atera, menabo"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
<div id="content">
<?php
$bagazhniki = [
		[
			'id' => '1',
			'name' => 'Багажник Д-1, состояние отличное, после использования, цвет черный.',
			'img1' => '<img class="img_main" src="/images/komissionka/d1-1.jpg" srcset="
			/images/komissionka/d1-1.jpg 2500w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Д-1">',
			'img2' => '<img class="img_main" src="/images/komissionka/d1-2.jpg" srcset="
			/images/komissionka/d1-2.jpg 2500w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Д-1">',
			'price' => 'Цена 2500 рублей',
		],
		[
			'id' => '2',
			'name' => 'Багажник на Renault Logan/Sandero, состояние удовлетворительное, после использования, цвет черный.',
			'img1' => '<img class="img_main" src="/images/komissionka/logan-1.jpg" srcset="
			/images/komissionka/logan-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="багажник для Renault Logan/Sandero">',
			'img2' => '<img class="img_main" src="/images/komissionka/logan-2.jpg" srcset="
			/images/komissionka/logan-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="багажник для Renault Logan/Sandero">',
			'price' => 'Цена 900 рублей',
		],
		[
			'id' => '3',
			'name' => 'Аэродинамические дуги для рейлингов, состояние хорошее, цвет черный.',
			'img1' => '<img class="img_main" src="/images/komissionka/aero-1.jpg" srcset="
			/images/komissionka/aero-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Аэродинамические дуги для рейлингов">',
			'img2' => '<img class="img_main" src="/images/komissionka/aero-2.jpg" srcset="
			/images/komissionka/aero-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Аэродинамические дуги для рейлингов">',
			'img3' => '<img class="img_main" src="/images/komissionka/aero-3.jpg" srcset="
			/images/komissionka/aero-3.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Аэродинамические дуги для рейлингов">',
			'price' => 'Цена 1500 рублей',
		],
		[
			'id' => '4',
			'name' => 'Багажник для Chevrolet Niva, состояние хорошее, цвет черный.',
			'img1' => '<img class="img_main" src="/images/komissionka/chevrolet-niva-1.jpg" srcset="
			/images/komissionka/chevrolet-niva-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Багажник для Chevrolet Niva">',
			'img2' => '<img class="img_main" src="/images/komissionka/chevrolet-niva-2.jpg" srcset="
			/images/komissionka/chevrolet-niva-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Багажник для Chevrolet Niva">',
			'price' => 'Цена 1500 рублей',
		],
		[
			'id' => '5',
			'name' => 'Опоры для багажника THULE, состояние хорошее, цвет черный.',
			'img1' => '<img class="img_main" src="/images/komissionka/thule-1.jpg" srcset="
			/images/komissionka/thule-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Опоры THULE">',
			'img2' => '<img class="img_main" src="/images/komissionka/thule-2.jpg" srcset="
			/images/komissionka/thule-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Опоры THULE">',
			'price' => 'Цена 7000 рублей',
		],
];
$farkops = [
		[
			'id' => '1',
			'name' => 'Фаркоп на Mitsubishi Lanser 10, 2007-2012, новый.',
			'img1' => '<img class="img_main" src="/images/komissionka/farkop-mitsubisi-1.jpg" srcset="
			/images/komissionka/farkop-mitsubisi-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Фаркоп для Mitsubishi Lanser">',
			'img2' => '<img class="img_main" src="/images/komissionka/farkop-mitsubisi-2.jpg" srcset="
			/images/komissionka/farkop-mitsubisi-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Фаркоп для Mitsubishi Lanser">',
			'img3' => '<img class="img_main" src="/images/komissionka/farkop-mitsubisi-3.jpg" srcset="
			/images/komissionka/farkop-mitsubisi-3.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Фаркоп для Mitsubishi Lanser">',
			'img4' => '<img class="img_main" src="/images/komissionka/farkop-mitsubisi-4.jpg" srcset="
			/images/komissionka/farkop-mitsubisi-4.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Фаркоп для Mitsubishi Lanser">',
			'price' => 'Цена 6000 рублей',
		],
];
$korzins = [
		[
			'id' => '1',
			'name' => 'Корзина для перевозки грузов. Крепится к водостокам. Подходит для большинства автомобилей семейства ВАЗ, Нива.',
			'img1' => '<img class="img_main" src="/images/komissionka/korzina-1.jpg" srcset="
			/images/komissionka/korzina-1.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Корзина для перевозки грузов">',
			'img2' => '<img class="img_main" src="/images/komissionka/korzina-2.jpg" srcset="
			/images/komissionka/korzina-2.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Корзина для перевозки грузов">',
			'img3' => '<img class="img_main" src="/images/komissionka/korzina-3.jpg" srcset="
			/images/komissionka/korzina-3.jpg 3000w" sizes="(max-width: 2000px) 150px, 300px, 350px" alt="Корзина для перевозки грузов">',
			'price' => 'Цена 2000 рублей',
		],
];

echo "<h1>Комиссионка</h1>";
echo "<p>В этом разделе мы продаем б/у багажники, автобоксы и аксессуары в рабочем состоянии. Часть багажников - использовались в прокате, часть - были оставлены на реализацию нашими клиентами. В течении 2-х недель вы можете вернуть багажник, если он вам не подойдет или окажется неисправен.</p>";
echo "<p>Если у вас есть ненужный багажник - мы его купим.</p>";
echo "<h2>Автомобильные багажники</h2>";
?>
<p><?php echo $bagazhniki[0][name]; ?> </p>
		<div class="img_div"> <?php
			echo $bagazhniki[0][img1];
			echo $bagazhniki[0][img2];
			echo $bagazhniki[0][img3];
			echo $bagazhniki[0][img4];
			echo $bagazhniki[0][img5];
			echo '</div>'; ?>
		<p><b><?php echo $bagazhniki[0][price]; ?></b></p>
<p><?php echo $bagazhniki[1][name]; ?> </p>
		<div class="img_div"> <?php
			echo $bagazhniki[1][img1];
			echo $bagazhniki[1][img2];
			echo $bagazhniki[1][img3];
			echo $bagazhniki[1][img4];
			echo $bagazhniki[1][img5];
			echo '</div>'; ?>
		<p><b><?php echo $bagazhniki[1][price]; ?></b></p>
<p><?php echo $bagazhniki[2][name]; ?> </p>
		<div class="img_div"> <?php
			echo $bagazhniki[2][img1];
			echo $bagazhniki[2][img2];
			echo $bagazhniki[2][img3];
			echo $bagazhniki[2][img4];
			echo $bagazhniki[2][img5];
			echo '</div>'; ?>
		<p><b><?php echo $bagazhniki[2][price]; ?></b></p>
<p><?php echo $bagazhniki[3][name]; ?> </p>
		<div class="img_div"> <?php
			echo $bagazhniki[3][img1];
			echo $bagazhniki[3][img2];
			echo $bagazhniki[3][img3];
			echo $bagazhniki[3][img4];
			echo $bagazhniki[3][img5];
			echo '</div>'; ?>
		<p><b><?php echo $bagazhniki[3][price]; ?></b></p>
<p><?php echo $bagazhniki[4][name]; ?> </p>
		<div class="img_div"> <?php
			echo $bagazhniki[4][img1];
			echo $bagazhniki[4][img2];
			echo $bagazhniki[4][img3];
			echo $bagazhniki[4][img4];
			echo $bagazhniki[4][img5];
			echo '</div>'; ?>
		<p><b><?php echo $bagazhniki[4][price]; ?></b></p>
<?php echo "<h2>Фаркопы</h2>"; ?>
<p><?php echo $farkops[0][name];?> </p>
		<div class="img_div"> <?php
			echo $farkops[0][img1];
			echo $farkops[0][img2];
			echo $farkops[0][img3];
			echo $farkops[0][img4];
			echo '</div>'; ?>
		<p><b><?php echo $farkops[0][price];?> </b></p>
<?php echo "<h2>Корзины</h2>"; ?>
<p><?php echo $korzins[0][name];?> </p>
		<div class="img_div"> <?php
			echo $korzins[0][img1];
			echo $korzins[0][img2];
			echo $korzins[0][img3];
			echo '</div>'; ?>
		<p><b><?php echo $korzins[0][price];?> </b></p>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>