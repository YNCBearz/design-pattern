<?php
namespace App\ObserverPattern\WeatherDisplay\Contracts;

interface Observer
{
    public function update($temperature, $humidity, $pressure);
}