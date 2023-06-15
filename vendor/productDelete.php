<?php

//Сreating connection
require_once("../config/connect.php");

//Getting data from request and validation
$id = htmlspecialchars($_GET['id']);

//Request to delete product in the database
mysqli_query($connect, "DELETE FROM products WHERE id=$id");

header("Location: ../index.php");
