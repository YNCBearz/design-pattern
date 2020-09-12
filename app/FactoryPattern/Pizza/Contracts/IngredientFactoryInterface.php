<?php
namespace App\FactoryPattern\Pizza\Contracts;

interface IngredientFactoryInterface
{
    public function createDough();
    public function createSauce();
}