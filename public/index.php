<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

$app = new \Komly\App(array(
    'debug' => true
));

$app->get('/', function() {
    return new \Komly\HTTP\Response('<h1>Hello</h1>');
});

$app->run();

