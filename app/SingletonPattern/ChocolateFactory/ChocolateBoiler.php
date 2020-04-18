<?php
namespace App\SingletonPattern\ChocolateFactory;

class ChocolateBoiler
{
    /**
     * @var bool $empty
     * @var bool $boiled
     */
    private $empty;
    private $boiled;

    public function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "在鍋爐內填滿巧克力和牛奶的混合物 \n";
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "排出煮沸的巧克力和牛奶 \n";
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
            echo "將爐內物煮熟 \n";
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}