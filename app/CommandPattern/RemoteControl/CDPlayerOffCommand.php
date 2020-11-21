<?php
namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Receiver\CDPlayer;
use App\CommandPattern\RemoteControl\Contracts\Command;

class CDPlayerOffCommand implements Command
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
        $this->cdPlayer->stop();
        $this->cdPlayer->removeCD();
    }
}