<?php

namespace Arthur\Factories\Model\Factory;

use Arthur\Factories\Api\Log\AbstractLoggerFactoryInterface;
use Arthur\Factories\Api\Log\AbstractGeneralLoggerFactoryInterface;
use Arthur\Factories\Api\AbstractLoggerInterface;

class GeneralFactory implements AbstractGeneralLoggerFactoryInterface
{
    /**
     * 
     * @var AbstractLoggerFactoryInterface[] $loggerFactory 
     */
    protected $loggersFactory;

    public function __construct(array $loggersFactory)
    {
        $this->loggersFactory = $loggersFactory;
    }

    public function get($type): AbstractLoggerInterface
    {
        return $this->loggersFactory[$type]->get();
    }
}