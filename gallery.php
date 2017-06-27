<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Галерея работ</title>";
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
		[
		'id' => 2,
		'name' => 'BMW X5',
		'img1' => '<img class="img_main" src="/images/gallery/20170429_1_bmwx5.jpg" srcset="/images/gallery/20170429_1_bmwx5.jpg 900w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170429_2_bmwx5.jpg" srcset="/images/gallery/20170429_2_bmwx5.jpg 600w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170429_3_bmwx5.jpg" srcset="/images/gallery/20170429_3_bmwx5.jpg 600w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 3,
		'name' => 'Mazda MPV',
		'img1' => '<img class="img_main" src="/images/gallery/20170511_1_mpv.jpg" srcset="/images/gallery/20170511_1_mpv.jpg 700w" alt="Mazda MPV" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170511_2_mpv.jpg" srcset="/images/gallery/20170511_2_mpv.jpg 900w" alt="Mazda MPV" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170511_3_mpv.jpg" srcset="/images/gallery/20170511_3_mpv.jpg 900w" alt="Mazda MPV" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170511_4_mpv.jpg" srcset="/images/gallery/20170511_4_mpv.jpg 800w" alt="Mazda MPV" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 4,
		'name' => 'UAZ Patriot',
		'img1' => '<img class="img_main" src="/images/gallery/20170513_1_patriot.jpg" srcset="/images/gallery/20170513_1_patriot.jpg 500w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170513_2_patriot.jpg" srcset="/images/gallery/20170513_2_patriot.jpg 500w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170513_3_patriot.jpg" srcset="/images/gallery/20170513_3_patriot.jpg 600w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170513_4_patriot.jpg" srcset="/images/gallery/20170513_4_patriot.jpg 600w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170513_5_patriot.jpg" srcset="/images/gallery/20170513_5_patriot.jpg 600w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img6' => '<img class="img_main" src="/images/gallery/20170513_6_patriot.jpg" srcset="/images/gallery/20170513_6_patriot.jpg 500w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img7' => '<img class="img_main" src="/images/gallery/20170513_7_patriot.jpg" srcset="/images/gallery/20170513_7_patriot.jpg 600w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img8' => '<img class="img_main" src="/images/gallery/20170513_8_patriot.jpg" srcset="/images/gallery/20170513_8_patriot.jpg 600w" alt="UAZ Patriot" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 5,
		'name' => 'Volkswagen Jetta',
		'img1' => '<img class="img_main" src="/images/gallery/20170517_1_jetta.jpg" srcset="/images/gallery/20170517_1_jetta.jpg 600w" alt="Volkswagen Jetta" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170517_2_jetta.jpg" srcset="/images/gallery/20170517_2_jetta.jpg 700w" alt="Volkswagen Jetta" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170517_3_jetta.jpg" srcset="/images/gallery/20170517_3_jetta.jpg 600w" alt="Volkswagen Jetta" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 6,
		'name' => 'Nissan X-Trail',
		'img1' => '<img class="img_main" src="/images/gallery/20170517_1_xtrail.jpg" srcset="/images/gallery/20170517_1_xtrail.jpg 700w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170517_2_xtrail.jpg" srcset="/images/gallery/20170517_2_xtrail.jpg 600w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170517_3_xtrail.jpg" srcset="/images/gallery/20170517_3_xtrail.jpg 500w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170517_4_xtrail.jpg" srcset="/images/gallery/20170517_4_xtrail.jpg 700w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170517_5_xtrail.jpg" srcset="/images/gallery/20170517_5_xtrail.jpg 600w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img6' => '<img class="img_main" src="/images/gallery/20170517_6_xtrail.jpg" srcset="/images/gallery/20170517_6_xtrail.jpg 700w" alt="Nissan X-Trail" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 7,
		'name' => 'Lada 2111',
		'img1' => '<img class="img_main" src="/images/gallery/20170525_1_2111.jpg" srcset="/images/gallery/20170525_1_2111.jpg 900w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170525_2_2111.jpg" srcset="/images/gallery/20170525_2_2111.jpg 700w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170525_3_2111.jpg" srcset="/images/gallery/20170525_3_2111.jpg 700w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170525_4_2111.jpg" srcset="/images/gallery/20170525_4_2111.jpg 900w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170525_5_2111.jpg" srcset="/images/gallery/20170525_5_2111.jpg 700w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 8,
		'name' => 'Lada Largus',
		'img1' => '<img class="img_main" src="/images/gallery/20170525_1_lada.jpg" srcset="/images/gallery/20170525_1_lada.jpg 800w" alt="Lada Largus" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170525_2_lada.jpg" srcset="/images/gallery/20170525_2_lada.jpg 700w" alt="Lada Largus" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170525_3_lada.jpg" srcset="/images/gallery/20170525_3_lada.jpg 700w" alt="Lada Largus" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 9,
		'name' => 'Ford Focus 2',
		'img1' => '<img class="img_main" src="/images/gallery/20170528_1_ford.jpg" srcset="/images/gallery/20170528_1_ford.jpg 900w" alt="Ford Focus 2" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170528_2_ford.jpg" srcset="/images/gallery/20170528_2_ford.jpg 600w" alt="Ford Focus 2" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170528_3_ford.jpg" srcset="/images/gallery/20170528_3_ford.jpg 600w" alt="Ford Focus 2" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 10,
		'name' => 'Kia Seed',
		'img1' => '<img class="img_main" src="/images/gallery/20170602_1_seed.jpg" srcset="/images/gallery/20170602_1_seed.jpg 800w" alt="Kia Seed" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170602_2_seed.jpg" srcset="/images/gallery/20170602_2_seed.jpg 600w" alt="Kia Seed" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170602_3_seed.jpg" srcset="/images/gallery/20170602_3_seed.jpg 600w" alt="Kia Seed" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170602_4_seed.jpg" srcset="/images/gallery/20170602_4_seed.jpg 600w" alt="Kia Seed" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 11,
		'name' => 'Lada Xray',
		'img1' => '<img class="img_main" src="/images/gallery/20170602_1_xray.jpg" srcset="/images/gallery/20170602_1_xray.jpg 900w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170602_2_xray.jpg" srcset="/images/gallery/20170602_2_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170602_3_xray.jpg" srcset="/images/gallery/20170602_3_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170602_4_xray.jpg" srcset="/images/gallery/20170602_4_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170602_5_xray.jpg" srcset="/images/gallery/20170602_5_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img6' => '<img class="img_main" src="/images/gallery/20170602_6_xray.jpg" srcset="/images/gallery/20170602_6_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img7' => '<img class="img_main" src="/images/gallery/20170602_7_xray.jpg" srcset="/images/gallery/20170602_7_xray.jpg 800w" alt="Lada Xray" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 12,
		'name' => 'Niva Chevrolet',
		'img1' => '<img class="img_main" src="/images/gallery/20170611_1_niva.jpg" srcset="/images/gallery/20170611_1_niva.jpg 900w" alt="Niva Chevrolet" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170611_2_niva.jpg" srcset="/images/gallery/20170611_2_niva.jpg 800w" alt="Niva Chevrolet" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170611_3_niva.jpg" srcset="/images/gallery/20170611_3_niva.jpg 800w" alt="Niva Chevrolet" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170611_4_niva.jpg" srcset="/images/gallery/20170611_4_niva.jpg 800w" alt="Niva Chevrolet" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170611_5_niva.jpg" srcset="/images/gallery/20170611_5_niva.jpg 800w" alt="Niva Chevrolet" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 13,
		'name' => 'Kia Rio',
		'img1' => '<img class="img_main" src="/images/gallery/20170616_1_rio.jpg" srcset="/images/gallery/20170616_1_rio.jpg 800w" alt="Kia Rio" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170616_2_rio.jpg" srcset="/images/gallery/20170616_2_rio.jpg 600w" alt="Kia Rio" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170616_3_rio.jpg" srcset="/images/gallery/20170616_3_rio.jpg 600w" alt="Kia Rio" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 14,
		'name' => 'Lada 2107',
		'img1' => '<img class="img_main" src="/images/gallery/20170617_1_2107.jpg" srcset="/images/gallery/20170617_1_2107.jpg 900w" alt="Lada 2107" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170617_2_2107.jpg" srcset="/images/gallery/20170617_2_2107.jpg 700w" alt="Lada 2107" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170617_3_2107.jpg" srcset="/images/gallery/20170617_3_2107.jpg 700w" alt="Lada 2107" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 15,
		'name' => 'Mitsubisi Lancer',
		'img1' => '<img class="img_main" src="/images/gallery/20170617_1_lancer.jpg" srcset="/images/gallery/20170617_1_lancer.jpg 2000w" alt="Mitsubisi Lancer" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170617_2_lancer.jpg" srcset="/images/gallery/20170617_2_lancer.jpg 2000w" alt="Mitsubisi Lancer" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170617_3_lancer.jpg" srcset="/images/gallery/20170617_3_lancer.jpg 2000w" alt="Mitsubisi Lancer" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170617_4_lancer.jpg" srcset="/images/gallery/20170617_4_lancer.jpg 1500w" alt="Mitsubisi Lancer" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 16,
		'name' => 'Subaru Outback',
		'img1' => '<img class="img_main" src="/images/gallery/20170617_1_outback.jpg" srcset="/images/gallery/20170617_1_outback.jpg 600w" alt="Subaru Outback" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170617_2_outback.jpg" srcset="/images/gallery/20170617_2_outback.jpg 600w" alt="Subaru Outback" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 17,
		'name' => 'Lada 2111',
		'img1' => '<img class="img_main" src="/images/gallery/20170621_1_2111.jpg" srcset="/images/gallery/20170621_1_2111.jpg 2000w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170621_2_2111.jpg" srcset="/images/gallery/20170621_2_2111.jpg 2000w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170621_3_2111.jpg" srcset="/images/gallery/20170621_3_2111.jpg 2000w" alt="Lada 2111" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 18,
		'name' => 'Volkswagen Polo',
		'img1' => '<img class="img_main" src="/images/gallery/20170621_1_polo.jpg" srcset="/images/gallery/20170621_1_polo.jpg 2000w" alt="Volkswagen Polo" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170621_2_polo.jpg" srcset="/images/gallery/20170621_2_polo.jpg 2000w" alt="Volkswagen Polo" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170621_3_polo.jpg" srcset="/images/gallery/20170621_3_polo.jpg 2000w" alt="Volkswagen Polo" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img4' => '<img class="img_main" src="/images/gallery/20170621_4_polo.jpg" srcset="/images/gallery/20170621_4_polo.jpg 2000w" alt="Volkswagen Polo" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img5' => '<img class="img_main" src="/images/gallery/20170621_5_polo.jpg" srcset="/images/gallery/20170621_5_polo.jpg 2000w" alt="Volkswagen Polo" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 19,
		'name' => 'BMW X5',
		'img1' => '<img class="img_main" src="/images/gallery/20170621_1_x5.jpg" srcset="/images/gallery/20170621_1_x5.jpg 2000w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170621_2_x5.jpg" srcset="/images/gallery/20170621_2_x5.jpg 2000w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170621_3_x5.jpg" srcset="/images/gallery/20170621_3_x5.jpg 2000w" alt="BMW X5" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 20,
		'name' => 'Chevrolet Niva',
		'img1' => '<img class="img_main" src="/images/gallery/20170623_1_niva.jpg" srcset="/images/gallery/20170623_1_niva.jpg 2000w" alt="Chevrolet Niva" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170623_2_niva.jpg" srcset="/images/gallery/20170623_2_niva.jpg 2000w" alt="Chevrolet Niva" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170623_3_niva.jpg" srcset="/images/gallery/20170623_3_niva.jpg 2000w" alt="Chevrolet Niva" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
		[
		'id' => 21,
		'name' => 'Lifan X50',
		'img1' => '<img class="img_main" src="/images/gallery/20170623_1_x50.jpg" srcset="/images/gallery/20170623_1_x50.jpg 2000w" alt="Lifan X50" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img2' => '<img class="img_main" src="/images/gallery/20170623_2_x50.jpg" srcset="/images/gallery/20170623_2_x50.jpg 2000w" alt="Lifan X50" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		'img3' => '<img class="img_main" src="/images/gallery/20170623_3_x50.jpg" srcset="/images/gallery/20170623_3_x50.jpg 2000w" alt="Lifan X50" sizes="(max-width: 2000px) 150px, 300px, 350px">',
		],
];

echo "<h1>Галерея работ</h1>";
echo "<p>В этом разделе приведены фотографии наших клиентов, которые когда-либо приобретали у нас багажник или автобокс. Как Вы видите, у нас действительно есть выбор практически на любой автомобиль!</p>"
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