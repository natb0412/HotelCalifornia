<?php
//Konstanter for databasetilkoblingen
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hotelcalifornia');

//lager et objekt for databasetilkobling
function getDbConnection()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);//HUSK Å ENDRE TIL 3306 FOR VANLIGE FOLK!
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}