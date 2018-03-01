<?php
namespace Goods\classes;
use Goods\Product;
class phone extends Product implements GetPhone
{
    public $name;
    public $category;
    public function getPhone()
    {
        echo $this->name . ' ' . $this->category . '' . $this->price;
    }

}