<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';
require 'setting.php';


//กำหนดค่า config ต่างๆใช้ใน wep api
$app = new \Slim\App(['settings' => $config]);
//สร้าง container และ กำหนด pdo ไว้ต่อฐานข้อมูล


$container = $app->getContainer();
require 'pdo.php';
// route ต่างๆ


require 'routes/hello.php';


require 'routes/user.php';


require 'routes/dog.php';






$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();