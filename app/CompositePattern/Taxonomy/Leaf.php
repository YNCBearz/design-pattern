<?php

namespace App\CompositePattern\Taxonomy;

use App\CompositePattern\Taxonomy\Contracts\Component;
use Exception;

class Leaf implements Component
{
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
    public function getClassifiaction(int $depth)
    {
        $dash = '';
        for ($i = 0; $i < $depth; $i++) {
            $dash = $dash . '-';
        }

        echo "$dash $this->name\n\n";
    }
}
