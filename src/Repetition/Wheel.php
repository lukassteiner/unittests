<?php


namespace Websoft\Unittests\Repetition;


class Wheel
{
    private $pressure;

    public function __construct()
    {
        $this->pressure = 1;
    }

    public function inflate()
    {
        $this->pressure += 0.1;
    }
}
