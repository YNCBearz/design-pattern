<?php
namespace App\FactoryPattern\Pizza\NewYork;

use App\FactoryPattern\Pizza\PizzaStore;
use App\FactoryPattern\Pizza\NewYork\NYStylePizzaFactory;

class NYStylePizzaStore extends PizzaStore
{
    protected $factory;
    protected $name = '紐約頂級披薩店';

    public function __construct()
    {
        $this->factory = new NYStylePizzaFactory();
    }

    public function run()
    {
        $this->orderPizza('cheese');
        $this->orderPizza('clam');
    }
}