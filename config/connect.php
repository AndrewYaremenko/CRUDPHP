<?php

$servername = "localhost";
$username = "user";
$password = "password";
$database = "crudphp";

//Connecting to the database
$connect = mysqli_connect($servername, $username, $password, $database);

//Checking if any errors
if ($connect->connect_error) {
    die("Error connection!: " . $conn->connect_error);
}
