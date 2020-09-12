<?php

namespace App\TemplateMethodPattern\Beverage;

abstract class CaffeineBeverage
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    protected function boilWater()
    {
        echo "把水煮沸 \n";
    }

    protected function pourInCup()
    {
        echo "倒進杯子中 \n";
    }

    protected function customerWantsCondiments()
    {
        return true;
    }

    abstract protected function brew();

    abstract protected function addCondiments();
}
