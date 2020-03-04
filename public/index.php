<?php
require __DIR__.'/../vendor/autoload.php';

use App\StrategyPattern\Duck\DucksConference;

$DuckConference = new DucksConference();
$DuckConference->run();