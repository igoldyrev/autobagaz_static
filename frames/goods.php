<input type="radio" id="sale-1__close" class="sale__control sale__control_close" name="sale-1">
<input type="radio" id="sale-1__open" class="sale__control sale__control_open" name="sale-1">
<label for="sale-1__close" class="sale__close-overlay"></label>
<div class="sale">
  <label for="sale-1__close" class="sale__close">X</label>
  <div class="sale__header">
    <h3>В этом окне Вы сможете заказать нужный вам товар</h3>
  </div>
  <div class="sale__body">
    <form action="/scripts/sale.php" method="post">
<span class="label_top">Ваше имя:</span>
<div class="better-placeholder">
  <input type="text" name="name" required="required" pattern="[А-Яа-яЁё]{2,}" class="better-placeholder__sale" placeholder="Введите Ваше имя">
  <label for="name" class="better-placeholder__label_sale">Введите Ваше имя</label>
</div><br>
<span class="label_top">Ваш телефон:</span>
<div class="better-placeholder">
  <input type="text" name="phone" class="better-placeholder__sale" pattern="[0-9]{10,11}" required="required" placeholder="Введите номер телефона">
  <label for="phone" class="better-placeholder__label_sale">Введите номер телефона</label>
</div><br>
<div align="center">
<input class="input__button_sale" type="submit" value="Отправить">
</div>
</form>
  </div>
</div>

<?php 
$goods = [
	[
		'id' => 1,
		'name' => 'Велокрепление для одного велосипеда',
		'img' => '<img class="good_img" src="/images/goods/velo-krysha.jpg" alt="Велокрепление на крышу для одного велосипеда">',
		'price' => '1500 рублей ',
		'strike_price' => '2000 рублей',
	],
	[
		'id' => 2,
		'name' => 'Велокрепление на фаркоп',
		'img' => '<img class="good_img" src="/images/goods/velo-farkop.jpg" alt="Велокрепление на фаркоп для трех велосипедов">',
		'price' => '3800 рублей ',
		'strike_price' => '4500 рублей',
	],
];
echo "<h2>Скидки на товары</h2>"; ?>
<div class="goods">
	<?php foreach ($goods as $good): ?>
	<div class="good">
	<?php echo $good['img']; ?>
	<div class="description">
	<h3><?php echo $good['name']; ?></h3>
	<div class="price">
		<span class="good_price"><?php echo $good['price']; ?></span><span class="strike_price"><?php echo $good['strike_price']; ?></span>
  </div>
  <div class="button">
    <form action="scripts/sale.php" method="post">
	<input type="hidden" name="1" value="11111">
	<a href="scripts/sale.php">Click</a>
	</form>
	</div>
  </div>
</div>
<?php endforeach ?>
</div>
