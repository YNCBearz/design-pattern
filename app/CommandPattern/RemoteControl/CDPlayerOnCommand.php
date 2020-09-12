<?php
namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Contracts\Command;
use App\CommandPattern\RemoteControl\Receiver\CDPlayer;

class CDPlayerOnCommand implements Command
{
    /**
     * @var CDPlayer
     */
    protected $cdPlayer;

    public function __construct(CDPlayer $cdPlayer)
    {
        $this->cdPlayer = $cdPlayer;
    }

    public function execute()
    {
        $this->cdPlayer->setCD();
        $this->cdPlayer->play();
    }
}