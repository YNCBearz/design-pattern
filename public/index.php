<?php
require __DIR__.'/../vendor/autoload.php';

use App\StrategyPattern\Duck\DuckConference;

$DuckConference = new DuckConference();
$DuckConference->run();