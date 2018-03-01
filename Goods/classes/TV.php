<?php
namespace Goods\classes;
use Goods\Product;
class TV extends Product implements GetTV
{
    public $mark;
    public $ScreenSize;
    public $display;
    public $resolution;

    public function GetScreenSize()
    {
        return $this->ScreenSize;
    }
}