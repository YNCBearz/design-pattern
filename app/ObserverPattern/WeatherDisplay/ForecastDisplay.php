<?php

namespace App\ObserverPattern\WeatherDisplay;

class ForecastDisplay
{
    public $board_name = '天氣預報';

    public function update($temp, $humidity, $pressure)
    {
        //更新溫度、濕度、氣壓
        echo $this->board_name . "已更新 \n";
    }
}
