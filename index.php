<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';

$app = new \Slim\App;

require 'routes/hello.php';

require 'routes/user.php';






$app->get('/dog/post', function () {
    echo '/dog/post';
});
$app->get('/dog/edit', function () {
    echo '/dog/edit';
});
$app->get('/dog/view', function () {
    echo '/dog/view';
});
$app->get('/dog/search', function () {
    echo '/dog/search';
});
$app->get('/dog/history', function () {
    echo '/dog/history';
});
$app->get('/dog/delete', function () {
    echo '/dog/delete';
});




$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();