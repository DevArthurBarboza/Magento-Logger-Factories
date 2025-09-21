<?php 

namespace Arthur\Factories\Model\Factory;

use Arthur\Factories\Api\Log\AbstractLoggerFactoryInterface;
use Arthur\Factories\Api\AbstractLoggerInterface;
use Arthur\Factories\Logger\JsonLogger;

class JsonLoggerFactory implements AbstractLoggerFactoryInterface
{
    protected AbstractLoggerInterface $logger;

    public function __construct(JsonLogger $jsonLogger){
        $this->logger = $jsonLogger;
    }

    public function get() : AbstractLoggerInterface
    {
        return $this->logger; 
    }
}   