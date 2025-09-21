<?php 

namespace Arthur\Factories\Logger\Handlers;

use Arthur\Factories\Logger\Handlers\AbstractHandler;

class JsonHandler extends AbstractHandler
{
    protected $fileName = '/var/log/data.json';
}