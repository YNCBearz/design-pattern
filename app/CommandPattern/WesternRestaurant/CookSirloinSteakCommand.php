<?php

namespace App\CommandPattern\WesternRestaurant;

use App\CommandPattern\WesternRestaurant\Contracts\Command;
use App\CommandPattern\WesternRestaurant\Receiver\Chef;

class CookSirloinSteakCommand implements Command
{
    /**
     * @param Chef
     */
    protected $chef;

    public function __construct(Chef $chef)
    {
        $this->chef = $chef;
    }

    /**
     * @return string
     */
    public function execute()
    {
        return $this->chef->cookSirloinSteak();
    }
}
