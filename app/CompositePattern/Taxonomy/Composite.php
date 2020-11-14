<?php

namespace App\CompositePattern\Taxonomy;

use App\CompositePattern\Taxonomy\Contracts\Component;

class Composite implements Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    protected $children = [];

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param Component $component
     * @return void
     */
    public function add(Component $component)
    {
        $this->children[$component->name] = $component;
    }

    /**
     * @param Component $component
     * @return void
     */
    public function remove(Component $component)
    {
        unset($this->children[$component->name]);
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

        if (strlen($dash) > 0) {
            echo "$dash $this->name\n";
        } else {
            echo "$this->name\n";
        }

        foreach ($this->children as $child) {
            $child->getClassifiaction($depth + 2);
        }
    }
}
