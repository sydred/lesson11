<?php
namespace Goods\classes;
use Goods\Product;
class Car extends Product implements HowMuchDoors
{
    public $mark;
    public $model;
    public $color;
    public $doors;

    public function EnoughDoors()
    {
    if ($doors<5)
    {
        return "Машина не для всей семьи";
    }
    }
}