<?php

use Observer\EmailHandler;
use Observer\LogHandler;
use Observer\Login;

require '../vendor/autoload.php';

$login = new Login;

$login->attach([
    new LogHandler,
    new EmailHandler
]);
$login->notify();
