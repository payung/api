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


$app->post('/register', function(Request $request, Response $response){

    $data = $request->getParsedBody();
    echo json_encode($data);
    // echo 'post_register' .' '.$data['username'].' '. $data['password'];

});

$app->get('/rooms', function (Request $request, Response $response ){
    
    $db = $this ->db;

    $statement = $db->prepare("SELECT * FROM Room");
    $statement->execute();
    $results = $statement->fetchAll();
    echo json_encode($results);
    //echo var_dump($results);
    //echo '/room ok';

});

$app->post('/rooms/new', function (Request $request, Response $response ){


    $data = $request->getParsedBody();
    $roomName = $data['roomName'];

    //รันคำสั่ง insert เพื่อเพิ่มห้องใหม่

    $db = $this ->db;
    $statement = $db->prepare('INSERT INTO payung.room(name) VALUES(:roomName)');
    $statement->execute(array(':roomName' => $roomName));

    if($statement->rowCount() > 0){
        $results = (object) array(
            "message" => "Insert success",
            "insert_status" => 1

        );
        echo json_encode($results);

    }
    else{
        $results = (object) array(
            "message" => "Insert nothing",
            "insert_status" => 0    
        );
        echo json_encode($results);

    }
    //echo '/rooms/new post'. $roomName;


});


?>