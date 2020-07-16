<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require __DIR__ . '/../routes/web.php';
require __DIR__ . '/../routes/api.php';