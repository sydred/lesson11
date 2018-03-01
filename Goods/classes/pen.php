<?php
namespace Goods\classes;
use Goods\Product;
class BallpointPen extends Product implements GoodPen

{
    public $mark;
    public $color;
    public function GoodChoice()
    {
        return $this->mark . 'Хороший выбор!';
    }
}