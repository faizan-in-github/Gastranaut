<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "gastranaut-users"; 


$mysqli = new mysqli($servername, $username, $password, $database);


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
