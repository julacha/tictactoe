<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "../tictactoe/head.php";
include "../tictactoe/body.php";

const BASE_URL = "http://localhost/tictactoe/";

session_start();
