<?php

$servername = "localhost";
$username = "user";
$password = "password";
$database = "crudphp";

$connect = mysqli_connect($servername, $username, $password, $database);

if ($connect->connect_error) {
    die("Error connection!: " . $conn->connect_error);
    }
