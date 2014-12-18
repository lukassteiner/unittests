<?php


namespace WebsoftTest\Unittests\Repetition;


use PHPUnit_Framework_TestCase;
use Websoft\Unittests\Repetition\Car;

class CarTest extends PHPUnit_Framework_TestCase
{
    /** @var Car */
    private $car;

    public function setUp()
    {
        $this->car = new Car();
    }

    /**
     * @test
     */
    public function initNumberOfWheels()
    {
        $this->assertEquals(4, $this->car->getNumberOfWheels());
    }
}

