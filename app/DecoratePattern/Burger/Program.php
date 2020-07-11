<?php

namespace App\DecoratePattern\Burger;

use App\DecoratePattern\Burger\ConcreteComponent\BigMac;
use App\DecoratePattern\Burger\Decorator\Bread;
use App\DecoratePattern\Burger\Decorator\Beef;
use App\DecoratePattern\Burger\Decorator\Lettuce;
use App\DecoratePattern\Burger\Decorator\Cheese;
use App\DecoratePattern\Burger\Decorator\Salad;

class Program
{
    protected $sauce = 'normal';
    protected $cheese = 'normal';
    protected $pickle = 'normal';

    protected $demand = [];

    /**
     * @param array $demand
     */
    public function customize($demand)
    {
        $this->demand = $demand;

        foreach ($demand as $option => $value) {
            $this->$option = $value;
        }
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

        $bottomBread->customize($this->demand);
        $result = $bottomBread->getDescription();

        return $this->subLastPunctuation($result);
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

    public function makeDoubleCheeseBurger()
    {
        if ($this->pickle == 'none') {
            return '雙層牛肉吉事堡：麵包、起司、牛肉、起司、牛肉、麵包';
        }

        return '雙層牛肉吉事堡：麵包、酸菜、起司、牛肉、起司、牛肉、麵包';
    }
}
