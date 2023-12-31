<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\CMS;
use Engine\DI\DI;

try {
    $di = new DI();

    $di->set('test', ['db' => 'db_object']);
    $di->set('test2', ['mail' => 'mail_object']);

    $cms = new CMS($di);
    $cms->run();
} catch (\ErrorException $e) {
    echo $e->getMessage();
}