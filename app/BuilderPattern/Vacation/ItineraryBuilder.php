<?php

namespace App\BuilderPattern\Vacation;

use App\BuilderPattern\Vacation\Itinerary;
use App\BuilderPattern\Vacation\Contracts\ItineraryPlanable;

class ItineraryBuilder implements ItineraryPlanable
{
    /**
     * @var Itinerary
     */
    protected $itinerary;

    public function __construct()
    {
        $this->itinerary = new Itinerary();
    }

    /**
     * @param string $from
     * @return self
     */
    public function from(string $from): self
    {
        $this->itinerary->from = $from;
        return $this;
    }

    /**
     * @param string $to
     * @return self
     */
    public function to(string $to): self
    {
        $this->itinerary->to = $to;
        return $this;
    }

    /**
     * @param integer $day
     * @return self
     */
    public function spendDays(int $day): self
    {
        $this->itinerary->day = $day;
        return $this;
    }

    /**
     * @param string $hotel
     * @return self
     */
    public function stayAt(string $hotel): self
    {
        $this->itinerary->hotel = $hotel;
        return $this;
    }

    /**
     * @param string $transport
     * @return self
     */
    public function travelBy(string $transport): self
    {
        $this->itinerary->transport = $transport;
        return $this;
    }

    /**
     * @return Itinerary
     */
    public function getItinerary(): Itinerary
    {
        return $this->itinerary;
    }
}
