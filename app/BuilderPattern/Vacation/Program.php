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
            'travelBy' => 'High Speed Rail'
        ];
    }

    /**
     * @return array
     */
    public function getInternationalTravel()
    {
        //東京五日遊

        return [
            'from' => 'Kaohsiung',
            'to' => 'Tokyo',
            'day' => 5,
            'travelBy' => 'EVA AIR',
            'hotel' => 'Disney Hotel'
        ];
    }
}
