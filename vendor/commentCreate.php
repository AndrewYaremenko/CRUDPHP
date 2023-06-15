<?php

//Сreating connection
require_once("../config/connect.php");

//Getting data from the form and validation
$id = htmlspecialchars($_POST['id']);
$comment = htmlspecialchars($_POST['comment']);

//Request to create comment in the database
mysqli_query($connect, "INSERT INTO comments(text, product_id) VALUES('$comment', $id)");

header("Location: ../comments.php?id=$id");
