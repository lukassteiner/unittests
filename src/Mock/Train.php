<?php


namespace Websoft\Unittests\Mock;


class Train
{
    /** @var integer */
    private $passengers = 0;

    /** @var integer */
    private $kilometersDriven = 0;

    /** @var Log */
    private $log;

    public function __construct()
    {
    }

    public function rideRoute()
    {
        $this->passengersBoarding();
        $this->moveToNextStation();
        $this->passengersLeaving();
        $this->passengersBoarding();
        $this->passengersBoarding();
        $this->moveToNextStation();
    }

    public function passengersBoarding()
    {
        $this->passengers += 20;
        $this->log->logMessage('20 Passengers boarded the train.');
    }

    public function passengersLeaving()
    {
        $this->passengers -= 10;
        $this->log->logMessage('20 Passengers left the train.');
    }

    public function moveToNextStation()
    {
        $this->kilometersDriven += 10;
        $this->log->logMessage('Train rode to next station.');
    }

    /**
     * @return boolean
     */
    public function hadMovement()
    {
        return $this->log->hasContent();
    }

    public function testLog()
    {
        return $this->log->logMessage('das ist ein Zug');
    }

    /**
     * @param Log $log
     */
    public function setLog(Log $log)
    {
        $this->log = $log;
    }
}

//include('../../vendor/autoload.php');
//$train = TrainFactory::createTrain();
//$train->rideRoute();
