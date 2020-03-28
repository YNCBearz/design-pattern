<?php

namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\PepperoniPizza;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class PizzaStore
{
    public function run()
    {
        $this->orderPizza('cheese');
        $this->orderPizza('pepperoni');
        $this->orderPizza('clam');
    }

    /**
     * @param string $type
     * @return Pizza
     */
    public function orderPizza($type)
    {
        $this->welcome();

        if ($type == 'cheese') {
            $pizza = new CheesePizza();
        } else if ($type == 'pepperoni') {
            $pizza = new PepperoniPizza();
        } else if ($type == 'clam') {
            $pizza = new ClamPizza();
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        $this->thankYouForComing();

        return $pizza;
    }

    private function welcome()
    {
        echo "歡迎光臨\n";
    }

    private function thankYouForComing()
    {
        echo "歡迎再度光臨\n";
        echo "------------------\n";
    }
}
