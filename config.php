<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('HOST','localhost');
define('USER','root');
define('PASS','root');
define('BASE','usercrud');

$conn = new mysqli(HOST,USER,PASS,BASE);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}