<?php
namespace App\DecoratePattern\Coffee;

abstract class Beverage
{
    public $description = '未知飲料';

    public function getDescription()
    {
        return $this->description;
    }

    abstract function cost(): int;
}