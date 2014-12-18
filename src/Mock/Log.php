<?php


namespace Websoft\Unittests\Mock;


class Log
{
    const LOG_FILE_PATH = '../../log/';

    private $logFilename;

    /**
     * @param string $logFileName
     */
    public function __construct($logFileName)
    {
        $this->logFilename = $logFileName;
    }

    /**
     * @param string $message
     * @return string
     */
    public function logMessage($message)
    {
        file_put_contents(self::LOG_FILE_PATH . $this->logFilename, $message . PHP_EOL, FILE_APPEND);
        return $message;
    }

    /**
     * @return boolean
     */
    public function hasContent()
    {
        $log = file_get_contents(self::LOG_FILE_PATH . $this->logFilename);
        return (boolean)strlen($log);
    }

    public function clearLog()
    {
        file_put_contents(self::LOG_FILE_PATH . $this->logFilename, '');
    }
}