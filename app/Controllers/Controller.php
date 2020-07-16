<?php

namespace App\Controllers;

use DI\Container;

class Controller
{
    protected $c;

    public function __construct(Container $container)
    {
        $this->c = $container;
    }

}