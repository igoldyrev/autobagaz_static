<?php 
$goods = [
	[
		'id' => 1,
		'name' => 'Велокрепление для одного велосипеда',
		'img' => '<img class="good_img" src="/images/goods/velo-krysha.jpg" alt="Велокрепление на крышу для одного велосипеда">',
		'price' => '1500 рублей',
		'strike_price' => '2000 рублей',
	],
	[
		'id' => 2,
		'name' => 'Велокрепление на фаркоп',
		'img' => '<img class="good_img" src="/images/goods/velo-farkop.jpg" alt="Велокрепление на фаркоп для трех велосипедов">',
		'price' => '3800 рублей',
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
    <button class="good_button">
    Купить сейчас
  </button>
	</div>
  </div>
</div>
<?php endforeach ?>
</div>
