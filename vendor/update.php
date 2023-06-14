<?php

//Establishing a connection
require_once("../config/connect.php");

//Getting data from the form and validation
$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);
$price = htmlspecialchars($_POST['price']);

//Request to update data in the database
mysqli_query($connect, "UPDATE goods SET name='$name', description='$description', price=$price WHERE id=$id");

header("Location: ../index.php");
