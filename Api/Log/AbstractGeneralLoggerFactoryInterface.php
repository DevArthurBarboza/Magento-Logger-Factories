<?php 

namespace Arthur\Factories\Api\Log;

use Arthur\Factories\Api\AbstractLoggerInterface;

interface AbstractGeneralLoggerFactoryInterface
{
    public function get($logFileType): AbstractLoggerInterface;
}