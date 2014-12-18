<?php


namespace Websoft\Unittests\Repetition;


class Car
{
    /** @var array */
    private $wheels;

    public function __construct()
    {
        for ($i = 0; $i < 4; $i++) {
            $this->wheels[] = new Wheel();
        }
    }

    public function getNumberOfWheels()
    {
        return count($this->wheels);
    }

    public function addWheel()
    {
        $this->wheels[] = new Wheel();
    }

    public function sellAllWheels()
    {
        $this->wheels = [];
    }
}
