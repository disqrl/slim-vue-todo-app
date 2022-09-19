<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/todo', function(Request $request, Response $response) {
    $pdo = new Database;
    $stmt = $pdo->select('SELECT * FROM todos ORDER BY is_completed, created_at DESC');
    $response->getBody()->write(json_encode($stmt));
    return $response;
});

$app->post('/api/todo/create', function(Request $request, Response $response) {
    $pdo = new Database;
    $stmt = $pdo->query('INSERT INTO todos(title) VALUES(:title)', [
        'title' => [
            'value' => $request->getParsedBody()['title'],
            'type' => PDO::PARAM_STR
        ]
    ], true);
    $response->getBody()->write(json_encode($stmt));
    return $response;
});

$app->put('/api/todo/{id}', function(Request $request, Response $response, $argc) {
    $pdo = new Database;
    $stmt = $pdo->query('UPDATE todos SET is_completed=:is_completed WHERE id=:id', [
        'id' => [
            'value' => $argc['id'],
            'type' => PDO::PARAM_INT
        ],
        'is_completed' => [
            'value' => $request->getParsedBody()['is_completed'],
            'type' => PDO::PARAM_BOOL
        ],
    ], true);
    $response->getBody()->write(json_encode($stmt));
    return $response;
});

$app->delete('/api/todo/{id}', function(Request $request, Response $response, $argc) {
    $pdo = new Database;
    $stmt = $pdo->query("DELETE FROM todos WHERE id=:id", [
        'id' => [
            'value' => $argc['id'],
            'type' => PDO::PARAM_INT
        ]
    ], true);
    $response->getBody()->write(json_encode($stmt));
    return $response;
});