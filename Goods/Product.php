<?php
namespace Goods;
abstract class Product
{
    public $price;
}

interface HowMuchDoors
{
    public function EnoughDoors();
}

interface GetTV
{
    public function GetScreenSize();
}

interface GoodPen
{
    public function GoodChoice();
}

interface DontShoot
{
    public function DontShoot();
}

interface GetPhone
{
    public function GetPhone();
}