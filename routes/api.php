<?php

$app->group('/api', function ($route) {
    $route->get('/courses', function ($request, $response, $args) {
        return $response;
    });
});