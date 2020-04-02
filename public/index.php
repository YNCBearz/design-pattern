<?php
require __DIR__.'/../vendor/autoload.php';

use App\FactoryPattern\Pizza\PizzaStore;
use App\StrategyPattern\Duck\DucksConference;
use App\DecoratePattern\Coffee\StarbuzzCoffee;
use App\ObserverPattern\WeatherDisplay\WeatherStation;
use App\FactoryPattern\Pizza\NewYork\NYStylePizzaStore;

/**
 * 策略模式 - 鴨子篇
 */
// $DuckConference = new DucksConference();
// $DuckConference->run();

/**
 * 觀察者模式 - 天氣佈告欄
 */
// $WeatherStation = new WeatherStation();
// $WeatherStation->run();

// /**
//  * 裝飾者模式 - 星巴茲咖啡
//  */
// $StarbuzzCoffee = new StarbuzzCoffee();
// $StarbuzzCoffee->run();

// /**
//  * 簡單工廠模式 - 披薩店
//  */
// $PizzaStore = new PizzaStore();
// $PizzaStore->run();

/**
 * 工廠方法模式 - 紐約披薩店
 */
$NYStylePizzaStore = new NYStylePizzaStore();
$NYStylePizzaStore->run();