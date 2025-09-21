<?php 

namespace Arthur\Factories\Api\Log;

use Arthur\Factories\Api\AbstractLoggerInterface;

interface AbstractLoggerFactoryInterface
{
    public function get(): AbstractLoggerInterface;
}