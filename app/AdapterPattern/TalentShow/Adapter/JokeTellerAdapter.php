<?php

namespace App\AdapterPattern\TalentShow\Adapter;

use App\AdapterPattern\TalentShow\Contracts\ShowInterface;
use App\AdapterPattern\TalentShow\JokeTeller;

class JokeTellerAdapter implements ShowInterface
{
    /**
     * @var JokeTeller
     */
    protected $jokeTeller;

    public function __construct(JokeTeller $jokeTeller)
    {
        $this->jokeTeller = $jokeTeller;
    }

    public function show()
    {
        return $this->jokeTeller->tell();
    }
}
