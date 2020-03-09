<?php
namespace App\ObserverPattern\WeatherDisplay;

use App\ObserverPattern\WeatherDisplay\WeatherData;

class WeatherStation
{
    public function run()
    {
        $WeatherData = new WeatherData();

        $CurrentConditionDisplay = new CurrentConditionDisplay($WeatherData);
        $ForecastDisplay = new ForecastDisplay($WeatherData);
        $StatisticsDisplay = new StatisticsDisplay($WeatherData);

        $WeatherData->setMeasurements('25°', '77%', '1010.00毫巴');

        $WeatherData->removeObserver($ForecastDisplay);
        $WeatherData->removeObserver($StatisticsDisplay);

        $WeatherData->setMeasurements('30°', '10%', '1024.00毫巴');
    }
}