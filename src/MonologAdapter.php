<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 11.12.2018
 * Time: 13:11
 */

namespace NtSchool;


use Monolog\Logger;

class MonologAdapter implements AdapterInterface
{
    protected $logger;

    public function __construct(Logger $logger)
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