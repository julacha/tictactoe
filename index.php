<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../tictactoe/head.php";
include "../tictactoe/body.php";

session_start();

// if (isset($_REQUEST['sid']) &&
//     $_REQUEST['sid'] === $sid &&
//     isset($_REQUEST['player A']) &&
//     isset($_REQUEST['password']) &&

// ) {
//     $_SESSION['username'] = $_REQUEST['username'];
//     $_SESSION['password'] = $_REQUEST['password'];

//     header("Location: index.php");
// }
// else {
//     header("Location: index.php?page=login");
// }
$playerA = "X";
$playerB = "0";

?>