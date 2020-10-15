<?php

namespace App\BuilderPattern\Vacation;

class Program
{
    /**
     * @return array
     */
    public function getDomesticTravel()
    {
        //高速鐵路一日體驗

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
        //東京迪士尼五日遊

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
