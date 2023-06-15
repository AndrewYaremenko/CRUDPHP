<?php

//Сreating connection
require_once("../config/connect.php");

//Getting data from request and validation
$id = htmlspecialchars($_GET['product_id']);
$commentId = htmlspecialchars($_GET['id']);

//Request to comment in the database
mysqli_query($connect, "DELETE FROM comments WHERE id=$commentId");

header("Location: ../comments.php?id=$id");
