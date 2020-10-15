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
            'days' => 1,
            'travelBy' => 'High Speed Rail',
            'schedule' => 'Taipei 101'
        ];
    }
}
