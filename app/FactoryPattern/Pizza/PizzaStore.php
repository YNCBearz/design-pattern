<?php

namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\SimplePizzaFactory;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class PizzaStore
{
    private $factory;

    public function __construct()
    {
        $this->factory = new SimplePizzaFactory();
    }

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

        $pizza = $this->factory->createPizza($type);

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
