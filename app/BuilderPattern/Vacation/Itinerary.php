<?php

namespace App\BuilderPattern\Vacation;

class Itinerary
{
    protected $from;

    protected $to;

    protected $day;

    protected $options;

    public function __construct(string $from, string $to, int $day, array $options)
    {
        $this->from = $from;
        $this->to = $to;
        $this->day = $day;
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function list()
    {
        $result = [
            'from' => $this->from,
            'to' => $this->to,
            'day' => $this->day
        ];

        foreach ($this->options as $key => $value) {
            if (is_null($value)) {
                continue;
            }

            $result[$key] = $value;
        }

        return $result;
    }
}
