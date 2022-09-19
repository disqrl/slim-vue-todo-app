<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api', function(Request $request, Response $response) {
    $result = [
        'message' => 'Please choose service you need'
    ];

    $response->getBody()->write(json_encode($result));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
});

require __DIR__ . '/todo.php';
require __DIR__ . '/linksaver.php';