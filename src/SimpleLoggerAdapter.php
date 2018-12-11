<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 11.12.2018
 * Time: 13:38
 */

namespace NtSchool;


use Wa72\SimpleLogger\FileLogger;

class SimpleLoggerAdapter implements AdapterInterface
{
protected $logger;


    public function __construct(FileLogger $logger)
    {
        $this->logger = $logger;
    }

    public function warning(string $message)
{
    $this->logger->warning('Some event');
}

public function error(string $message)
{
    $this->logger->error('Some event');
}
}