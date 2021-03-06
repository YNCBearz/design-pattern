<?php

namespace App\DecoratorPattern\Burger;

use App\DecoratorPattern\Burger\ConcreteComponent\BigMac;
use App\DecoratorPattern\Burger\Decorator\Bread;
use App\DecoratorPattern\Burger\Decorator\Beef;
use App\DecoratorPattern\Burger\Decorator\Lettuce;
use App\DecoratorPattern\Burger\Decorator\Cheese;
use App\DecoratorPattern\Burger\Decorator\Salad;
use App\DecoratorPattern\Burger\ConcreteComponent\DoubleCheeseBurger;
use App\DecoratorPattern\Burger\Decorator\Pickle;
use App\DecoratorPattern\Burger\Decorator\Ingredient;

class Program
{
    /**
     * @var array
     */
    protected $demand = [];

    /**
     * @param array $demand
     */
    public function setDemand($demand)
    {
        $this->demand = $demand;
    }

    /**
     * @return string
     */
    public function makeBigMac()
    {
        $bigMac = new BigMac();
        $topBread = new Bread($bigMac);
        $firstBeef = new Beef($topBread);
        $firstLettuce = new Lettuce($firstBeef);
        $firstSalad = new Salad($firstLettuce);
        $middleBread = new Bread($firstSalad);
        $secondBeef = new Beef($middleBread);
        $cheese = new Cheese($secondBeef);
        $secondLettuce = new Lettuce($cheese);
        $secondSalad = new Salad($secondLettuce);
        $bottomBread = new Bread($secondSalad);

        return $this->getBurgerDescription($bottomBread);
    }

    public function makeDoubleCheeseBurger()
    {
        $doubleCheeseBurger = new DoubleCheeseBurger();
        $topBread = new Bread($doubleCheeseBurger);
        $pickle = new Pickle($topBread);
        $firstCheese = new Cheese($pickle);
        $firstBeef = new Beef($firstCheese);
        $secondCheese = new Cheese($firstBeef);
        $secondBeef = new Beef($secondCheese);
        $bottomBread = new Bread($secondBeef);

        return $this->getBurgerDescription($bottomBread);
    }

    /**
     * 去除最後一個標點符號
     *
     * @param string $string
     * @return string
     */
    private function subLastPunctuation($string)
    {
        return mb_substr($string, 0, mb_strlen($string, 'UTF-8') - 1, 'UTF-8');
    }

    /**
     * @param Ingredient $ingredient
     * @return string
     */
    private function getBurgerDescription(Ingredient $ingredient)
    {
        $result = $ingredient->customize($this->demand)->getDescription();
        return $this->subLastPunctuation($result);
    }
}
