<?php

//Сreating connection
require_once("./config/connect.php");

$good = mysqli_query($connect, "SELECT * FROM products WHERE id={$_GET['id']}");
$good = mysqli_fetch_assoc($good);
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
    <?= $good['name'] ?><br>
    <?= $good['description'] ?><br>
    price: <?= $good['price'] ?><br>

    <!-- Form for adding comment to product -->
    <h2>Add comment</h2>
    <form action="./vendor/commentCreate.php" method="POST">
        <input type="hidden" name='id' value='<?= $_GET['id'] ?>'>
        <textarea name="comment" required><?= $good['comment'] ?></textarea>
        <button type="sumbit">Comment</button>
    </form>
    <a href="./index.php"><button>Back</button></a>

</body>

<ul>
    <?php
    //Output all comments
    foreach ($comments as $item) {
    ?>
        <li><?= $item[1] ?> <a href="./vendor/commentDelete.php?id=<?= $item[0] ?>&good_id=<?= $_GET['id'] ?>" class="delete">✖</a></li>
    <?php } ?>
</ul>

</html>