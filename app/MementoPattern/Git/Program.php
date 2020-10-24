<?php

namespace App\MementoPattern\Git;

use App\MementoPattern\Git\Folder;
use App\MementoPattern\Git\Git;

class Program
{
    public function run()
    {
        $folder = new Folder();
        $git = new Git($folder);

        //write Code
        $git->writeCode('aaa');

        // dump($git->getUntrackedCode()); //aaa

        $git->commit();
        // dump($git->getUntrackedCode()); //''

        $git->writeCode('bbb');
        $git->commit();

        $git->reset(1);

        // dump($git->getUntrackedCode()); //aaa
    }
}
