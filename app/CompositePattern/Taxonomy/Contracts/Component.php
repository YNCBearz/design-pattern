<?php

namespace App\CompositePattern\Taxonomy\Contracts;

interface Component
{
    public function add(Component $component);

    public function remove(Component $component);

    public function displayClassifiaction(int $depth);
}
