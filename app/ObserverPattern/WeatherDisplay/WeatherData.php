<?php
namespace App\ObserverPattern\WeatherDisplay;

class WeatherData
{
    /**
     * 氣象站的開發人員暗示，在這個方法中寫下我們的代碼
     */
    public function measurementChanged()
    {
        $temp = $this->getTemperature();
        $humidity = $this->getHumidity();
        $pressure = $this->getPressure();

        //建議在這裡加上我們的代碼
    }

    private function getTemperature()
    {
        //可能透過api獲得溫度數據
        return '25°';
    }

    private function getHumidity()
    {
        //可能透過api獲得濕度數據
        return '77%';
    }

    private function getPressure()
    {
        //可能透過api獲得氣壓數據
        return '1010.00毫巴';
    }


}