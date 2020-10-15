<?php

namespace App\BuilderPattern\Vacation;

use App\BuilderPattern\Vacation\Contracts\TravelBuilder;

class TravelAgency
{
    protected $travelBuilder;

    public function __construct(TravelBuilder $travelBuilder)
    {
        $this->travelBuilder = $travelBuilder;
    }

    public function getDomesticTravel(): array
    {
        $itinerary = $this->travelBuilder
            ->from('Kaohsiung')
            ->to('Taipei')
            ->setSchedule('Taipei 101')
            ->getItinerary();

        return $itinerary->list();
    }
}
