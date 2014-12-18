<?php


namespace WebsoftTest\Unittests\Mock;


use Mockery;

class LogMock
{
    public static function get()
    {
        $mock = Mockery::mock(
            'Websoft\Unittests\Mock\Log',
            [
                'hasContent' => true
            ]
        );

        $mock
            ->shouldReceive('logMessage')
            ->with('das ist der Zug')
            ->andReturn('das ist der Zug');

        $mock
            ->shouldReceive('logMessage')
            ->with('das ist ein Zug')
            ->andReturn('asd');

        $mock
            ->shouldReceive('logMessage')
            ->andReturn('');


        return $mock;
    }
}
