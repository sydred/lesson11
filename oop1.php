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

//машина
$carChevrolet = new Goods\classes\Car();
$carChevrolet->mark = 'Chevrolet';
$carChevrolet->model = 'Comaro';
$carChevrolet->color = 'yellow';
$carChevrolet->price = '3000$';
$carChevrolet->doors = '3';

$carFord = new Goods\classes\car();
$carFord->mark = 'Ford';
$carFord->model = 'Mustang gt';
$carFord->color = 'grey';
$carFord->price = '29500$';
$carFord->doors = '3';



//телевизор
$TvSamsung = new Goods\classes\TV();
$TvSamsung->mark = 'Samsung';
$TvSamsung->ScreenSize = '40"';
$TvSamsung->display = 'LED';
$TvSamsung->resolution = 'Full HD';

$TvSony = new Goods\classes\TV();
$TvSony->mark = 'Sony';
$TvSony->ScreenSize = '49"';
$TvSony->display = 'LED';
$TvSony->resolution = '4K ULTRA HD';


//ручка
$PenBenu = new Goods\classes\BallpointPen();
$PenBenu->mark = 'Benu';
$PenBenu->color = 'black';

$PenEtra = new Goods\classes\BallpointPen();
$PenEtra->mark = 'Etra';
$PenEtra->color = 'blue';


//утка
$duckPekin = new Goods\classes\Duck();
$duckPekin->breed = 'Пекинская утка';
$duckPekin->dwelling = 'Китай';

$duckRussia = new Goods\classes\Duck();
$duckRussia->breed = 'Русская утка';
$duckRussia->dwelling = 'Россия';


// Товар
$goodsApple = new Goods\classes\Goods();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 38000;

$goodsSamsung = new Goods\classes\Goods();
$goodsSamsung->name = 'Samsung S8';
$goodsSamsung->category = 'Телефон';
$goodsSamsung->price = 28000;

$order = new Goods\Order($basket);
$order->getInfoOrder();
?>

/*/ 1. Пространство имен - это способ задавать свою область видимости, благодаря чему можно
фильтровать несколько одинаковых названий.
    2.EXCEPTION - функция добавления исключений на ошибки, чтобы программа не выдавала
фатальную ошибку.
