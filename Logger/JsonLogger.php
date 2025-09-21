<?php 

namespace Arthur\Factories\Logger;

use Arthur\Factories\Api\AbstractLoggerInterface;
use Monolog\Logger;

class JsonLogger extends Logger implements AbstractLoggerInterface
{
}