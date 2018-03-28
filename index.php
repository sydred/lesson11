<?php
spl_autoload_register(
    function($className) {
		    $path = rtrim(__DIR__, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR ;
        $fullPath = $path . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
		    if (file_exists($fullPath)) {
			      require $fullPath;
		    }
	  }
);
// Класс Автомобиль
echo '<h4>Автомобиль</h4>';
$Comaro = new Products\Category\Car('автомобиль', 50000);
$Comaro->setMake('VAZ');
$Comaro->setModel('2101');
$Comaro->setColor('красный');
$Mustang = new Products\Category\Car('автомобиль', 110000);
$Mustang->setMake('NIVA');
$Mustang->setModel('2104');
$Mustang->setColor('белый');
$Comaro->printFullDescription();
echo '<br/>';
$Mustang->printFullDescription();
echo '<br/>';
echo '<br/>';
// Класс Телевизор
echo '<h4>Телевизор</h4>';
$samsung = new Products\Category\TV('телевизор', 32750);
$samsung->setMake('Samsung');
$samsung->setModel('UE40K');
$samsung->setSize(40);
$Sony = new Products\Category\TV('телевизор', 28590);
$Sony->setMake('LG');
$Sony->setModel('LG 43UH');
$Sony->setSize(43);
$samsung->printFullDescription();
echo '<br/>';
$Sony->printFullDescription();
echo '<br/>';
echo '<br/>';
// Класс Шариковая ручка
echo '<h4>Шариковая ручка</h4>';
$PenBenu = new Products\Category\Pen('шариковая ручка', 3499);
$PenBenu->setInk('синяя');
$PenBenu->setMake('Mont Blanc');
$PenEtra = new Products\Category\Pen('шариковая ручка', 1899);
$PenEtra->setInk('черная');
$PenEtra->setMake('Giorgio Fedon');
$PenBenu->printFullDescription();
echo '<br/>';
$PenBenu->printFullDescription();
echo '<br/>';
echo '<br/>';
// Класс Утка
echo '<h4>Утка</h4>';

$duckRassia = new Products\Category\Duck('утка', '2500');
$duckRassia->setSpecies('Русская утка');
$duckRassia->setMake('Россия');
$duckRassia->setName('Дональд');
$duckPekin = new Products\Category\Duck('утка', '1000');
$duckPekin->setSpecies('Пекинская утка');
$duckPekin->setMake('Пекин');
$duckPekin->setName('Сунь Юн');

$duckRassia->printFullDescription();
echo '<br/>';
$duckPekin->printFullDescription();
echo '<br/>';
echo '<br/>';
echo 'Количество созданных объектов: '.Products\Product::$staticProperty;
echo '<br/>';
echo '<br/>';
// Корзина
$basket = new Products\Basket();
$basket[] = $Comaro;
$samsung->setPrice(NULL);

$basket[] = $samsung;
$basket[] = $PenBenu;
$basket['утка'] = $duckRassia;

echo "<h2>В корзине товаров на общую сумму: {$basket->getPriceProductsBasket()} руб.</h2>";
// Заказ
$order = new Products\Order($basket);
$order->getInfoOrder();