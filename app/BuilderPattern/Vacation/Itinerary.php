<?php

namespace App\BuilderPattern\Vacation;

class Itinerary
{
    protected $from;

    protected $to;

    protected $day;

    protected $hotel;

    protected $transport;

    /**
     * @param string $from
     * @return self
     */
    public function from(string $from): self
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param string $to
     * @return self
     */
    public function to(string $to): self
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param integer $day
     * @return self
     */
    public function spendDays(int $day): self
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @param string $hotel
     * @return self
     */
    public function stayAt(string $hotel): self
    {
        $this->hotel = $hotel;
        return $this;
    }

    /**
     * @param string $transport
     * @return self
     */
    public function travelBy(string $transport): self
    {
        $this->transport = $transport;
        return $this;
    }
}
