<?php
namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Contracts\Command;
use App\CommandPattern\RemoteControl\Receiver\Light;
use App\CommandPattern\RemoteControl\LightOnCommand;

class RemoteControl
{
    /**
     * @var Command
     */
    protected $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        echo "按下按扭 \n";
        $this->slot->execute();
    }

    public function run()
    {
        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);

        $this->setCommand($lightOnCommand);
        $this->buttonWasPressed();
    }
}