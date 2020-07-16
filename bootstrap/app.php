<?php

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);

$container->set('settings', function () {
   return [
       'app' => [
           'name' => 'Slim4 Template'
       ]
   ];
});

$app = AppFactory::create();

require __DIR__ . '/../routes/web.php';
require __DIR__ . '/../routes/api.php';