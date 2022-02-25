<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = []; // TODO: Реализовать конфигурационные файлы

$app = new App\WebApplication($config);

$app->run();
