<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/user/register', function () {
    $data = (object) array(
        'message1' => 'ลงทะเบียนเรียบร้อย',
        'message2' => 'ข้อมูลไม่ถูกต้อง',
        'message3' => 'ข้อมูลซ้ำ'

    
        );
        echo json_encode($data);
});
$app->post('/user1/register', function(Request $request, Response $respone){
    
        $data = $request->getParsedBody();
        echo json_encode($data);
        // echo 'post_register' .' '.$data['username'].' '. $data['password'];
    
    });


$app->get('/user/edit', function () {
    $data = (object) array(
        'message1' => 'แก้ไขข้อมูลเรียบร้อย',
        'message2' => 'ข้อมูลไม่ถูกต้อง',
        'message3' => 'Emailใหม่',
        'message4' => 'เบอร์ใหม่',
        'message5' => 'ที่อยู่ใหม่'
        
        );
        echo json_encode($data);



});
$app->post('/user1/edit', function(Request $request, Response $respone){
    
        $data = $request->getParsedBody();
        echo json_encode($data);
        // echo 'post_register' .' '.$data['username'].' '. $data['password'];
    
    });

$app->get('/user/login', function () {
    $data = (object) array(
        'message1' => 'usernameหรือpasswordไม่ถูกต้อง',
        'message2' => 'เข้าสู่ระบบเรียบร้อย',
        
        );
        echo json_encode($data);
});
$app->post('/user1/login', function(Request $request, Response $respone){
    
        $data = $request->getParsedBody();
        echo json_encode($data);
        // echo 'post_register' .' '.$data['username'].' '. $data['password'];
    
    });
$app->get('/user/detail', function () {
    $data = (object) array(
        'message1' => 'ชื่อ',
        'message2' => 'ที่อยู่',
        'message3' => 'เบอร์โทร',
        'message4' => 'Email',
        
        );
        echo json_encode($data);
});
$app->get('/user/forgetpassword', function () {
    $data = (object) array(
        'message1' => 'usernameหรือpasswordไม่ถูกต้อง'
        
        
        );
        echo json_encode($data);
});
$app->get('/user/editpassword', function () {
    $data = (object) array(
        'message1' => 'usernameหรือpasswordไม่ถูกต้อง',
        'message2' => 'แก้ไขpasswordเรียบร้อย'
        
        
        );
        echo json_encode($data);
});

$app->post('/user2/register', function (Request $request, Response $response ){
    
    
        $data = $request->getParsedBody();
        $userName = $data['userName'];
        $surName = $data['surName'];
    
        //รันคำสั่ง insert เพื่อเพิ่มห้องใหม่
    
        $db = $this ->db;
        $statement = $db->prepare('INSERT INTO payung.user(name,surname) VALUES(:userName,:surName)');
        $statement->execute(array(':userName' => $userName,':surName' => $surName ));
    
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