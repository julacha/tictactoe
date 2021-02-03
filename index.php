<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "../tictactoe/head.php";
include "../tictactoe/body.php";

//header('Content-Type: application/json');
session_start();

const BASE_URL = "http://localhost/tictactoe/";


// function update($mark) {
//     $file_name = '../tictactoe/json_database.json';
//     file_put_contents($file_name, json_encode($mark));
//     return json_encode([
//         'status' => 'success',
//         'message' => 'data saved'
//     ]);
//   }
  function get() {
    $file_name = '../tictactoe/json_database.json';
    if (file_exists($file_name)) {
        return json_encode([
            'status' => 'success',
            'data' => file_get_contents($file_name)
        ]);
    }
    return error('DB file does not exist');
}
?>