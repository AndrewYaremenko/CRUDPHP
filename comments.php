<?php

//Сreating connection
require_once("./config/connect.php");

$product = mysqli_query($connect, "SELECT * FROM products WHERE id={$_GET['id']}");
$product = mysqli_fetch_assoc($product);
$comments = mysqli_query($connect, "SELECT id, text FROM comments WHERE product_id={$_GET['id']}");
$comments = mysqli_fetch_all($comments);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Show products</title>
</head>

<body>

    <!-- Output information about product -->
    <?= $product['name'] ?><br>
    <?= $product['description'] ?><br>
    price: <?= $product['price'] ?><br>

    <!-- Form for adding comment to product -->
    <h2>Add comment</h2>
    <form action="./vendor/commentCreate.php" method="POST">
        <input type="hidden" name='id' value='<?= $_GET['id'] ?>'>
        <textarea name="comment" required></textarea>
        <button type="sumbit">Comment</button>
    </form>
    <a href="./index.php"><button>Back</button></a>

</body>

<ul>
    <?php
    //Output all comments
    foreach ($comments as $comment) {
    ?>
        <li><?= $comment[1] ?> <a href="./vendor/commentDelete.php?id=<?= $comment[0] ?>&product_id=<?= $_GET['id'] ?>" class="delete">✖</a></li>
    <?php } ?>
</ul>

</html>