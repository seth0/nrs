<?php
// Composer.json
require(__DIR__ . "/../vendor/autoload.php");

session_start();


// Correct error handling.
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();
