<?php

namespace App\TemplateMethodPattern\Beverage;

use App\TemplateMethodPattern\Beverage\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    /**
     * @var bool
     */
    protected $withSugar;

    public function __construct($withSugar = true)
    {
        $this->withSugar = $withSugar;
    }

    protected function brew()
    {
        echo "用沸水沖泡咖啡 \n";
    }

    protected function addCondiments()
    {
        echo "加糖 \n";
    }

    protected function customerWantsCondiments()
    {
        return $this->withSugar;
    }
}
