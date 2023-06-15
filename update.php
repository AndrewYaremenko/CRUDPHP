<?php

//Сreating connection
require_once("./config/connect.php");

$good = mysqli_query($connect, "SELECT * FROM products WHERE id={$_GET['id']}");
$good = mysqli_fetch_assoc($good);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Update products</title>
</head>

<body>

    <h2>Update product</h2>
    <form action="./vendor/productUpdate.php" method="POST">
        <input type="hidden" name="id" value="<?= $good['id'] ?>">
        <p>name</p>
        <input type="text" name="name" value="<?= $good['name'] ?>" required>
        <p>descrpiption</p>
        <textarea name="description" required><?= $good['description'] ?></textarea>
        <p>price</p>
        <input type="number" step="any" name="price" value="<?= $good['price'] ?>" required>
        <button type="sumbit">Update</button>
    </form>
    <a href="./index.php"><button>Back</button></a>

</body>

</html>