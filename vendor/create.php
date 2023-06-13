<?php

require_once("../config/connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect ,"INSERT INTO goods(name, description, price) VALUES('$name','$description', $price)");

header("Location: ../index.php");
