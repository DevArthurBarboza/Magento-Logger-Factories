<?php

namespace Arthur\Factories\Model\Factory;

use Arthur\Factories\Api\Log\AbstractLoggerFactoryInterface;
use Arthur\Factories\Api\AbstractLoggerInterface;
use Arthur\Factories\Logger\CsvLogger;

class CsvLoggerFactory implements AbstractLoggerFactoryInterface
{

    protected AbstractLoggerInterface $logger;

    public function __construct(CsvLogger $csvLogger)
    {
        $this->logger = $csvLogger;
    }

    public function get(): AbstractLoggerInterface
    {
        return $this->logger;
    }
}