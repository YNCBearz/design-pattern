<?php

namespace App\ObserverPattern\WeatherDisplay;

use App\ObserverPattern\WeatherDisplay\Contracts\Subject;
use App\ObserverPattern\WeatherDisplay\Contracts\Observer;
use App\ObserverPattern\WeatherDisplay\Contracts\DisplayElement;

class ForecastDisplay implements Observer, DisplayElement
{
    public $board_name = '天氣預報';
    private $temperature;
    private $humidity;
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

        $this->display();
    }

    public function display()
    {
        echo $this->board_name . ": \n";
        echo "溫度： " . $this->temperature . "\n";
        echo "濕度： " . $this->humidity . "\n";
    }
}
