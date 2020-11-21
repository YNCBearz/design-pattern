<?php

namespace App\BuilderPattern\Vacation;

class Itinerary
{
    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var int
     */
    protected $day;

    /**
     * @var string
     */
    protected $hotel;

    /**
     * @var string
     */
    protected $transport;

    /**
     * @param string $name
     * @param string|int $value
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * @param string $name
     * @return string|int
     */
    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = get_object_vars($this);

        foreach ($result as $name => $value) {
            if (is_null($value)) {
                unset($result[$name]);
            }
        }

        return $result;
    }
}
