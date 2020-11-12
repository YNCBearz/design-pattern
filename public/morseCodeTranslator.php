<?php

use App\InterpreterPattern\MorseCode\Program;

require __DIR__ . '/../vendor/autoload.php';

/**
 * @var Program
 */
$translator = new Program();
$translator->encode('Bear');
