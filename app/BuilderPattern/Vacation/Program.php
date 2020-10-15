<?php

namespace App\BuilderPattern\Vacation;

class Program
{
    /**
     * @return array
     */
    public function getDomesticTravel()
    {
        return [
            'from' => 'Kaohsiung',
            'to' => 'Taipei',
            'day' => 1,
            'travelBy' => 'High Speed Rail',
            'schedule' => 'Taipei 101'
        ];
    }

    /**
     * @return array
     */
    public function getInternationalTravel()
    {
        return [
            'from' => 'Kaohsiung',
            'to' => 'Tokyo',
            'day' => 5,
            'hotel' => 'Disney Hotel',
            'travelBy' => 'EVA AIR',
            'schedule' => 'Disneyland',
            'touristGuide' => 'Temari'
        ];
    }
}
