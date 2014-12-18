<?php

namespace Websoft\Unittests\Mock;


class TrainFactory
{
    /**
     * @return Train
     */
    public static function createTrain()
    {
        $train = new Train();
        $log = new Log('train.log');
        $train->setLog($log);
        return $train;
    }
}