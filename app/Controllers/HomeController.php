<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        return $this->c->get('view')->render($response, 'home.twig');
    }
}