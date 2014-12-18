<?php

namespace WebsoftTest\Unittests\Mock;

use PHPUnit_Framework_TestCase;
use Websoft\Unittests\Mock\Train;

class TrainTest extends PHPUnit_Framework_TestCase
{
    /** @var Train */
    private $train;

    public function setUp()
    {
        $this->train = new Train();
        $this->train->setLog(LogMock::get());
    }

    /**
     * @test
     */
    public function ride()
    {
        $this->train->rideRoute();
        $this->assertTrue($this->train->hadMovement());
    }

    /**
     * @test
     */
    public function testReturn()
    {
        $this->assertEquals('das ist ein Zug', $this->train->testLog());
    }
}
