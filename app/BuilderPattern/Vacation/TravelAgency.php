<?php

namespace App\BuilderPattern\Vacation;

class TravelAgency
{
    public function __construct()
    {
        $this->itineraryBuilder = new ItineraryBuilder();
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
