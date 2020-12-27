<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingRole;
use App\VisitorPattern\Wedding\Contracts\WeddingType;

class Composite
{
    /**
     * @var WeddingRole[]
     */
    protected $children = [];

    /**
     * @param WeddingRole $role
     * @return void
     */
    public function add(WeddingRole $role)
    {
        $this->children[$role->name] = $role;
    }

    /**
     * @param WeddingRole $component
     * @return void
     */
    public function remove(WeddingRole $role)
    {
        unset($this->children[$role->name]);
    }

    /**
     * @param WeddingType $weddingType
     * @return void
     */
    public function display(WeddingType $weddingType)
    {
        foreach ($this->children as $child) {
            $child->getClothes($weddingType);
            $child->getShoes($weddingType);
        }
    }
}
