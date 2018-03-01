<?php
namespace Goods\classes;
use Goods\Product;
class Duck extends Product implements DontShoot
{
    public $breed;
    public $dwelling;
    public function DontShoot()
    {
        return $this->breed . 'Не стреляйте!';
    }
}