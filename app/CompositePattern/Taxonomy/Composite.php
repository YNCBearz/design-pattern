<?php

namespace App\CompositePattern\Taxonomy;

use App\CompositePattern\Taxonomy\Contracts\Component;
use App\CompositePattern\Taxonomy\Traits\DashHelper;

class Composite implements Component
{
    use DashHelper;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Component[]
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
    public function displayClassifiaction(int $depth)
    {
        $this->displaySelfClassification($depth);
        $this->displayChildrenClassification($depth);
    }

    /**
     * @param int $depth
     * @return void
     */
    private function displaySelfClassification(int $depth)
    {
        $dashes = $this->getDashes($depth);

        if (strlen($dashes) == 0) {
            echo "$this->name" . PHP_EOL;

            return;
        }

        echo "$dashes $this->name" . PHP_EOL;
    }

    /**
     * @param integer $depth
     * @return void
     */
    private function displayChildrenClassification(int $depth)
    {
        foreach ($this->children as $child) {
            $child->displayClassifiaction($depth + 2);
        }
    }
}
