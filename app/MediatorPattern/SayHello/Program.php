<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Brain;
use App\MediatorPattern\SayHello\Eye;
use App\MediatorPattern\SayHello\Mouth;
use App\MediatorPattern\SayHello\Hand;
use App\MediatorPattern\SayHello\Ear;
use App\MediatorPattern\SayHello\Face;

class Program
{
    /**
     * @var Brain
     */
    protected $brain;

    /**
     * @var Eye
     */
    protected $eye;

    /**
     * @var Mouth
     */
    protected $mouth;

    /**
     * @var Hand
     */
    protected $hand;

    /**
     * @var Ear
     */
    protected $ear;

    /**
     * @var Face
     */
    protected $face;

    public function __construct()
    {
        $this->brain = $this->resolveBrainAndOrgans();
    }

    /**
     * @param string $item
     * @return string
     */
    public function see($item)
    {
        return $this->eye->execute($item);
    }

    /**
     * @param string $item
     * @return string
     */
    public function hear($item)
    {
        return $this->ear->execute($item);
    }

    private function resolveBrainAndOrgans()
    {
        $this->brain = new Brain();
        $this->resolveOrgans();

        $this->brain->setOrgan($this->eye);
        $this->brain->setOrgan($this->mouth);
        $this->brain->setOrgan($this->hand);
        $this->brain->setOrgan($this->ear);
        $this->brain->setOrgan($this->face);
    }

    private function resolveOrgans()
    {
        $this->eye = new Eye($this->brain);
        $this->mouth = new Mouth($this->brain);
        $this->hand = new Hand($this->brain);
        $this->ear = new Ear($this->brain);
        $this->face = new Face($this->brain);
    }
}
