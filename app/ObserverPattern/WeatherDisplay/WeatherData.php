<?php
namespace App\ObserverPattern\WeatherDisplay;

use App\ObserverPattern\WeatherDisplay\ForecastDisplay;
use App\ObserverPattern\WeatherDisplay\Contracts\Subject;
use App\ObserverPattern\WeatherDisplay\StatisticsDisplay;
use App\ObserverPattern\WeatherDisplay\Contracts\Observer;
use App\ObserverPattern\WeatherDisplay\CurrentConditionDisplay;

class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = array();
    }

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
        echo $observer->board_name . "已註冊 \n";
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);

        if ($index >= 0) {
            unset($this->observers[$index]);
            echo $observer->board_name . "已註銷 \n";
        }
    }

    public function notifyObservers()
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            $observer = $this->observers[$i];
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * 氣象站的開發人員暗示，在這個方法中寫下我們的代碼
     */
    public function measurementChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementChanged();
    }
}