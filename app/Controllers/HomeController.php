<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $response->getBody()->write($this->c->get('settings')['app']['name']);
        return $response;
    }
}