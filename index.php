<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hi', function () {
    echo 'ว่าไง';

});

$app->get('/user/register', function () {
    echo '/user/register';
});

$app->get('/user/edit', function () {
    echo '/user/edit';
});
$app->get('/user/login', function () {
    echo '/user/login';
});
$app->get('/user/detail', function () {
    echo '/user/detail';
});
$app->get('/user/forgetpassword', function () {
    echo '/user/forgetpassword';
});
$app->get('/user/editpassword', function () {
    echo '/user/editpassword';
});
$app->get('/user/history', function () {
    echo '/user/history';
});
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