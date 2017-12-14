<?php 


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
});?>