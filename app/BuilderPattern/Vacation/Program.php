<?php

namespace App\BuilderPattern\Vacation;

use App\BuilderPattern\Vacation\TravelAgency;
use App\BuilderPattern\Vacation\ItineraryBuilder;

class Program
{
    /**
     * @return array
     */
    public function getDomesticTravel()
    {
        //高速鐵路一日體驗
        $itineraryBuilder = new ItineraryBuilder();
        $travelAgency = new TravelAgency($itineraryBuilder);
        return $travelAgency->getHighSpeedRailItinerary();
    }

    /**
     * @return array
     */
    public function getInternationalTravel()
    {
        //東京五日遊
        $itineraryBuilder = new ItineraryBuilder();
        $travelAgency = new TravelAgency($itineraryBuilder);
        return $travelAgency->getFiveDaysTokyoItinerary();
    }
}
