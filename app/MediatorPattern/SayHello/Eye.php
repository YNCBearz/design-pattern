<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;
use App\MediatorPattern\SayHello\Brain;


class Eye extends Organ
{
    /**
     * @var string
     */
    protected $name = '眼睛';

    /**
     * @var Brain
     */
    protected $brain;

    public function __construct(Brain $brain)
    {
        $this->brain = $brain;
    }

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        return $this->see($message);
    }

    /**
     * @param string $message
     * @return string
     */
    private function see($message)
    {
        switch ($message) {
            case '認識的人':
                return $this->brain->sendMessage('嘴巴', '你好');
                break;

            case '熟識的人':
                return $this->brain->sendMessage('手', '揮手');
                break;
        }
    }
}
