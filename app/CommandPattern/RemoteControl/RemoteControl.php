<?php

namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Contracts\Command;
use App\CommandPattern\RemoteControl\Receiver\Light;
use App\CommandPattern\RemoteControl\LightOnCommand;
use App\CommandPattern\RemoteControl\NoCommand;
use App\CommandPattern\RemoteControl\Receiver\CDPlayer;
use App\CommandPattern\RemoteControl\CDPlayerOnCommand;
use App\CommandPattern\RemoteControl\CDPlayerOffCommand;

class RemoteControl
{
    /**
     * @var int
     */
    protected $slotAmount = 2;

    /**
     * @var Command[]
     */
    protected $onCommand;

    /**
     * @var Command[]
     */
    protected $offCommand;

    public function __construct()
    {
        for ($slotNumber = 0; $slotNumber < $this->slotAmount; $slotNumber++) {
            $this->onCommand[$slotNumber] = new NoCommand();
            $this->offCommand[$slotNumber] = new NoCommand();
        }
    }

    public function setCommand(int $slotNumber, Command $onCommand, Command $offCommand)
    {
        $this->onCommand[$slotNumber] = $onCommand;
        $this->offCommand[$slotNumber] = $offCommand;
    }

    public function onButtonWasPressed(int $slotNumber)
    {
        echo "按下開啟按扭$slotNumber \n";
        $this->onCommand[$slotNumber]->execute();
    }

    public function offButtonWasPressed(int $slotNumber)
    {
        echo "按下關閉按扭$slotNumber \n";
        $this->offCommand[$slotNumber]->execute();
    }

    public function run()
    {
        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);
        $lightOffCommand = new LightOffCommand($light);

        $this->setCommand(0, $lightOnCommand, $lightOffCommand);
        $this->onButtonWasPressed(0);
        $this->offButtonWasPressed(0);

        $this->onButtonWasPressed(1);
        $this->offButtonWasPressed(1);

        $cdPlayer = new CDPlayer();
        $cdPlayerOnCommand = new CDPlayerOnCommand($cdPlayer);
        $cdPlayerOffCommand = new CDPlayerOffCommand($cdPlayer);

        $this->setCommand(1, $cdPlayerOnCommand, $cdPlayerOffCommand);
        $this->onButtonWasPressed(1);
        $this->offButtonWasPressed(1);
    }
}
