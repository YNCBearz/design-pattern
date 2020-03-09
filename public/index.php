<?php
require __DIR__.'/../vendor/autoload.php';

use App\StrategyPattern\Duck\DucksConference;
use App\ObserverPattern\WeatherDisplay\WeatherData;

/**
 * 策略模式 - 鴨子篇
 */
// $DuckConference = new DucksConference();
// $DuckConference->run();

/**
 * 觀察者模式 - 天氣佈告欄
 */
$WeatherData = new WeatherData();
$WeatherData->measurementChanged();