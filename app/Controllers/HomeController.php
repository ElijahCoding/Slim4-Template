<?php

namespace App\Controllers;

class HomeController
{
    public function index($request, $response)
    {
        $response->getBody()->write('works');
        return $response;
    }
}