<?php 

namespace Arthur\Factories\Logger\Handlers;

use Arthur\Factories\Logger\Handlers\AbstractHandler;

class CsvHandler extends AbstractHandler
{
    protected $fileName = '/var/log/data.csv';
}