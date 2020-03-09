<?php

namespace App\ObserverPattern\WeatherDisplay;

use App\ObserverPattern\WeatherDisplay\Contracts\Subject;
use App\ObserverPattern\WeatherDisplay\Contracts\Observer;
use App\ObserverPattern\WeatherDisplay\Contracts\DisplayElement;

class StatisticsDisplay implements Observer, DisplayElement
{
    public $board_name = '統計數據';
    private $temperature;
    private $humidity;
    private $pressure;
    private $WeatherData;

    public function __construct(Subject $WeatherData)
    {
        $this->WeatherData = $WeatherData;
        $WeatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo $this->board_name . ": \n";
        echo "溫度： " . $this->temperature . "\n";
        echo "濕度： " . $this->humidity . "\n";
        echo "氣壓： " . $this->pressure . "\n";
    }
}
