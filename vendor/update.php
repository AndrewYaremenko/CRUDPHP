<?php

require_once("../config/connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE goods SET name='$name', description='$description', price=$price WHERE id=$id");

header("Location: ../index.php");
