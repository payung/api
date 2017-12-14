<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello', function () {
    
    $data = (object) array(
        'messsage' => 'ว่าไง',
        'date' => '14/12/2017'
    
    );
    
    
    
    
    echo json_encode($data);




});


$app->post('/register', function(Request $request, Response $respone){

    $data = $request->getParsedBody();
    echo json_encode($data);
    // echo 'post_register' .' '.$data['username'].' '. $data['password'];

});


?>