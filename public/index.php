<?php
require __DIR__ . '/../vendor/autoload.php';

use App\FactoryPattern\Pizza\PizzaStore;
use App\StrategyPattern\Duck\DucksConference;
use App\DecoratorPattern\Coffee\StarbuzzCoffee;
use App\ObserverPattern\WeatherDisplay\WeatherStation;
use App\FactoryPattern\Pizza\NewYork\NYStylePizzaStore;
use App\SingletonPattern\ChocolateFactory\ChocolateFactory;
use App\CommandPattern\RemoteControl\RemoteControl;
use App\TemplateMethodPattern\Beverage\BeverageShop;

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
$StarbuzzCoffee = new StarbuzzCoffee();
$StarbuzzCoffee->run();

// /**
//  * 簡單工廠模式 - 披薩店
//  */
// $PizzaStore = new PizzaStore();
// $PizzaStore->run();

/**
 * 工廠方法模式、抽象工廠 - 紐約披薩店
 */
// $NYStylePizzaStore = new NYStylePizzaStore();
// $NYStylePizzaStore->run();

/**
 * 單例模式 - 巧克力工廠
 */
// $ChocolateFactory = new ChocolateFactory();
// $ChocolateFactory->run();

/**
 * 命令模式 - 遙控器
 */
// $RemoteControl = new RemoteControl();
// $RemoteControl->run();

/**
 * 樣板方法模式 - 飲料篇
 */
// $Beverage = new BeverageShop();
// $Beverage->run();
