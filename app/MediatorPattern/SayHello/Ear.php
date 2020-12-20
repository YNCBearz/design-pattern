<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;

class Ear extends Organ
{
    /**
     * @var string
     */
    protected $name = '耳朵';

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        switch ($message) {
            case '喜歡的人':
                return $this->brain->sendMessage('臉', '發紅');
                break;

            case '討厭的人':
                return $this->brain->sendMessage('手', '裝忙');
                break;
        }
    }
}
