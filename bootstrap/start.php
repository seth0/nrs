<?php
session_start();

// Composer.json
require(__DIR__ . "/../vendor/autoload.php");

// Correct error handling.
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();
