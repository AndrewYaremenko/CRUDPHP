<?php

//Establishing a connection
require_once("../config/connect.php");

//Getting data from the form and validation
$id = htmlspecialchars($_GET['id']);

//Request to delete data in the database
mysqli_query($connect, "DELETE FROM goods WHERE id=$id");

header("Location: ../index.php");
