<?php
namespace App\ObserverPattern\WeatherDisplay\Contracts;

use App\ObserverPattern\WeatherDisplay\Contracts\Observer;

interface Subject
{
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}