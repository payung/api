<?php



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
});?>