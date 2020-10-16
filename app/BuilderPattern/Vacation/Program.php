<?php

namespace App\BuilderPattern\Vacation;

use App\BuilderPattern\Vacation\TravelAgency;

class Program
{
    /**
     * @return array
     */
    public function getDomesticTravel()
    {
        //高速鐵路一日體驗
        $travelAgency = new TravelAgency();
        return $travelAgency->getHighSpeedRailItinerary();
    }

    /**
     * @return array
     */
    public function getInternationalTravel()
    {
        //東京五日遊
        $travelAgency = new TravelAgency();
        return $travelAgency->getFiveDaysTokyoItinerary();
    }
}
