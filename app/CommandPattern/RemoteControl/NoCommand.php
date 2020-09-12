<?php
namespace App\CommandPattern\RemoteControl;

use App\CommandPattern\RemoteControl\Contracts\Command;

class NoCommand implements Command
{
    public function execute()
    {
        echo "命令尚未設置 \n";
    }
}
