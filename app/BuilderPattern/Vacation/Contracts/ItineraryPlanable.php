<?php

namespace App\BuilderPattern\Vacation\Contracts;

use App\BuilderPattern\Vacation\Itinerary;

interface ItineraryPlanable
{
    public function from(string $from): self;

    public function to(string $to): self;

    public function spendDays(int $day): self;

    public function stayAt(string $hotel): self;

    public function travelBy(string $transport): self;

    public function getItinerary(): Itinerary;
}
