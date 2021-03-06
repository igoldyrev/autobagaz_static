<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Оставить заявку</title>";
?>

<meta name="description" content="Заказ и продажа багажников и автобоксов THULE, Mont Blanc, Amos, Atera, Атлант, купить в Перми. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="оставить заказ, заказ, заказать багажник, заказать бокс, автобагажники, автомобильные боксы, велобагажники, велокрепления на крышу, велокрепления на фаркопы, крепления для лыж, крепления для сноубордов, рейлинги, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, thule, туле, Yuago, ЯГО, Турино, Lux, Люкс, Атлант, Discovery, Amos, Амос, Mont Blanc, Монблан, Can, Voyager, Cosmo, Муравей, Атера, Atera, menabo"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
<div id="content">
<h1 align="center">Оставить заявку</h1>
<p>Пользуясь этой формой вы можете отправить заявку, если выбрали модель багажника в каталоге, либо если не смогли это сделать. Укажите Ваши пожелания относительно багажника и не забудьте указать данные Вашего автомобиля и контактные данные. Мы свяжемся с вами в ближайшее время и поможем с выбором.</p>
<form action="/scripts/zakaz.php" method="post">
<span class="label_top">Ваше имя:</span>
<div class="better-placeholder">
  <input type="text" name="name" required="required" pattern="[А-Яа-яЁё]{2,}" class="better-placeholder__input" placeholder="Введите Ваше имя">
  <label for="name" class="better-placeholder__label">Введите Ваше имя</label>
</div><br>
<span class="label_top">Ваш телефон:</span>
<div class="better-placeholder">
  <input type="text" name="phone" class="better-placeholder__input" required="required" pattern="[0-9]{10,11}" placeholder="Введите номер телефона">
  <label for="phone" class="better-placeholder__label">Введите номер телефона</label>
</div><br>
<span class="label_top">Марка машины:</span>
<div class="better-placeholder">
  <input type="text" name="auto" class="better-placeholder__input" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$" placeholder="Введите марку автомобиля">
  <label for="auto" class="better-placeholder__label">Введите марку автомобиля</label>
</div><br>
<span class="label_top">Тип кузова:</span>
<div class="better-placeholder">
  <select class="better-placeholder__select" size="1" name="kuzov">
    <option selected="selected" value="none">Не указано</option>
    <option value="sedan">Седан</option>
    <option value="xetchbek">Хэтчбек</option>
    <option value="universal">Универсал</option>
  </select>
</div><br>
<span class="label_top">Год выпуска:</span>
<div class="better-placeholder">
  <input type="text" name="year" class="better-placeholder__input" pattern="[0-9]{,4}" placeholder="Введите год выпуска автомобиля">
  <label for="year" class="better-placeholder__label">Введите год выпуска автомобиля</label>
</div><br>
<span class="label_top">Текст заявки</span>
<div class="better-placeholder">
<textarea name="text" class="better-placeholder__input" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$" placeholder="Введите текст заявки"></textarea>
  <label for="text" class="better-placeholder__label">Введите текст заявки</label>
</div><br>
<div align="center">
<input class="input__button" type="submit" value="Оставить заявку">
</div>
</form>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>