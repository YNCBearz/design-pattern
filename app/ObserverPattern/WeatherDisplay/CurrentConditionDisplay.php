<?php

namespace App\ObserverPattern\WeatherDisplay;

class CurrentConditionDisplay
{
    public $board_name = '目前天氣';

    public function update($temp, $humidity, $pressure)
    {
        //更新溫度、濕度、氣壓
        echo $this->board_name . "已更新 \n";
    }
}