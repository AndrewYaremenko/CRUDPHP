<?php

//Establishing a connection
require_once("../config/connect.php");

//Getting data from the form and validation
$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);
$price = htmlspecialchars($_POST['price']);

//Request to create a data in the database
mysqli_query($connect, "INSERT INTO goods(name, description, price) VALUES('$name','$description', $price)");

header("Location: ../index.php");
