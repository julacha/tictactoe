<?php
header('Content-Type: application/json');
session_start();


if (isset($_POST['mark'])) {
    $file_name = '../json_database.json';
    file_put_contents($file_name, json_encode(["mark"]));
    return json_encode([
        'status' => 'success',
        'message' => 'data saved'
    ]);
} else {
    echo error();
}


function error($msg = 'wrong request')
{
    return json_encode([
        'status' => 'error',
        'message' => $msg
    ]);
}

var_dump($_POST);
//var_dump($_GET);