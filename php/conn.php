<?php

$server = "148.72.232.178:3306";
$username = "Kingdom";
$password = "Kingdom123";
$db = "db_main";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>