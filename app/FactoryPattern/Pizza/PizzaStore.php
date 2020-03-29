<?php

namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\SimplePizzaFactory;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class PizzaStore
{
    private $factory;
    private $pizza;

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
     */
    public function orderPizza($type)
    {
        $this->welcome();

        $this->pizza = $this->createPizza($type);

        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();

        $this->thankYouForComing();
    }

    /**
     * @param string $type
     * @return \App\FactoryPattern\Pizza\Contracts\AbstractPizza
     */
    protected function createPizza($type): Pizza
    {
        $pizza = $this->factory->createPizza($type);
        return $pizza;
    }

    protected function welcome()
    {
        echo "歡迎光臨\n";
    }

    protected function thankYouForComing()
    {
        echo "這是您點的{$this->pizza->name}，歡迎再度光臨 \n";
        echo "------------------\n";
    }
}
