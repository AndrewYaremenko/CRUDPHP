<?php

//Сreating connection
require_once("./config/connect.php");

$product = mysqli_query($connect, "SELECT * FROM products WHERE id={$_GET['id']}");
$product = mysqli_fetch_assoc($product);

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
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>name</p>
        <input type="text" name="name" value="<?= $product['name'] ?>" required>
        <p>descrpiption</p>
        <textarea name="description" required><?= $product['description'] ?></textarea>
        <p>price</p>
        <input type="number" step="any" name="price" value="<?= $product['price'] ?>" required>
        <button type="sumbit">Update</button>
    </form>
    <a href="./index.php"><button>Back</button></a>

</body>

</html>