<?php 

namespace Arthur\Factories\Logger;

use Arthur\Factories\Api\AbstractLoggerInterface;
use Monolog\Logger;

class CsvLogger extends Logger implements AbstractLoggerInterface
{
}