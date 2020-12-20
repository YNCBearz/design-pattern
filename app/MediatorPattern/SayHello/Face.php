<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;

class Face extends Organ
{
    /**
     * @var string
     */
    protected $name = '臉';

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
        return $this->show($message);
    }

    /**
     * @param string $message
     * @return string
     */
    private function show($message)
    {
        return "[臉]開始[$message]";
    }
}
