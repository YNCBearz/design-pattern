<?php

namespace App\BuilderPattern\Vacation\Contracts;

use App\BuilderPattern\Vacation\Itinerary;

abstract class TravelBuilder
{
    protected $from;

    protected $to;

    protected $day;

    protected $hotel;

    protected $transport;

    protected $schedule;

    protected $touristGuide;

    abstract public function from(string $city): self;

    abstract public function to(string $city): self;

    abstract public function setDay(int $day): self;

    abstract public function setHotel(string $hotel): self;

    abstract public function travelBy(string $transport): self;

    abstract public function setSchedule(string $schedule): self;

    abstract public function setTouristGuide(string $touristGuide): self;

    public function getItinerary(): Itinerary
    {
        $options = [
            'hotel' => $this->hotel,
            'travelBy' => $this->transport,
            'schedule' => $this->schedule,
            'touristGuide' => $this->touristGuide
        ];

        return new Itinerary($this->from, $this->to, $this->day, $options);
    }
}
