<?php

namespace App\ObserverPattern\WeatherDisplay;

class StatisticsDisplay
{
    public $board_name = '統計數據';

    public function update($temp, $humidity, $pressure)
    {
        //更新溫度、濕度、氣壓
        echo $this->board_name . "已更新 \n";
    }
}
