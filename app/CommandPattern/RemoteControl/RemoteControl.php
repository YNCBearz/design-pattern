<?php
namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Contracts\Command;
use App\CommandPattern\RemoteControl\Receiver\Light;
use App\CommandPattern\RemoteControl\LightOnCommand;
use App\CommandPattern\RemoteControl\NoCommand;

class RemoteControl
{
    /**
     * @var Command
     */
    protected $onCommand;

    /**
     * @var Command
     */
    protected $offCommand;

    public function __construct()
    {
        $this->onCommand = new NoCommand();
        $this->offCommand = new NoCommand();
    }

    public function setCommand(Command $onCommand, Command $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }

    public function onButtonWasPressed()
    {
        echo "按下按扭 \n";
        $this->onCommand->execute();
    }

    public function offButtonWasPressed()
    {
        echo "按下按扭 \n";
        $this->offCommand->execute();
    }

    public function run()
    {
        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);
        $lightOffCommand = new LightOffCommand($light);

        $this->setCommand($lightOnCommand, $lightOffCommand);
        $this->onButtonWasPressed();
        $this->offButtonWasPressed();
    }
}