<?php

namespace App\BuilderPattern\Vacation;

use App\BuilderPattern\Vacation\Contracts\ItineraryPlanable;

class TravelAgency
{
    public function __construct(ItineraryPlanable $itineraryBuilder)
    {
        $this->itineraryBuilder = $itineraryBuilder;
    }

    /**
     * @return array
     */
    public function getHighSpeedRailItinerary()
    {
        $itinerary = $this->itineraryBuilder
            ->from('Kaohsiung')
            ->to('Taipei')
            ->travelBy('High Speed Rail')
            ->spendDays(1)
            ->getItinerary();

        return $itinerary->toArray();
    }

    /**
     * @return array
     */
    public function getFiveDaysTokyoItinerary()
    {
        $itinerary = $this->itineraryBuilder
            ->from('Kaohsiung')
            ->to('Tokyo')
            ->travelBy('Airplane')
            ->spendDays(5)
            ->stayAt('Disney Hotel')
            ->getItinerary();

        return $itinerary->toArray();
    }
}
