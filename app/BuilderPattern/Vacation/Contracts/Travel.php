<?php

namespace App\BuilderPattern\Vacation\Contracts;

use App\BuilderPattern\Vacation\Itinerary;

abstract class TravelBuilder
{
    abstract public function from();

    abstract public function to();

    abstract public function spendDays();

    abstract public function stayAt();

    abstract public function travelBy();

    abstract public function getItinerary(): Itinerary;
}
