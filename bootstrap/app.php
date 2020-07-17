<?php

use DI\Container;
use Slim\Views\Twig;
use Slim\Factory\AppFactory;
use Slim\Views\TwigMiddleware;
use Slim\Views\TwigExtension;

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

$container->set('view', function() {
    return Twig::create(__DIR__ . '/../resources/views');
});

$app = AppFactory::create();

$app->add(TwigMiddleware::createFromContainer($app));

require __DIR__ . '/../routes/web.php';
require __DIR__ . '/../routes/api.php';