<?php

namespace App\CompositePattern\Taxonomy;

use App\CompositePattern\Taxonomy\Contracts\Component;
use App\CompositePattern\Taxonomy\Traits\DashHelper;
use Exception;

class Leaf implements Component
{
    use DashHelper;

    /**
     * @var string
     */
    public $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param Component $component
     * @throws Exception
     */
    public function add(Component $component)
    {
        throw new Exception('Cannot add to a leaf');
    }

    /**
     * @param Component $component
     * @throws Exception
     */
    public function remove(Component $component)
    {
        throw new Exception('Cannot remove from a leaf');
    }

    /**
     * @param integer $depth
     * @return void
     */
    public function displayClassification(int $depth)
    {
        $dashes = $this->getDashes($depth);
        echo "$dashes $this->name" . PHP_EOL . PHP_EOL;
    }
}
