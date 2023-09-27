<?php

require '../vendor/autoload.php';

use Strategy\FileLogger;
use Strategy\Logger;
use Strategy\WebLogger;

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?? new FileLogger;
        $logger->log($data);
    }
}

$app = new App;
$app->log("Some info here", new WebLogger);
