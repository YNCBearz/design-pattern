<?php

namespace App\Flyweight\Blocks\Contracts;

interface Block
{
    public function getShape();
    public function display(string $word): string;
}
