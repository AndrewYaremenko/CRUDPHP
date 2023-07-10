<?php

//Сreating connection
require_once("./config/connect.php");

//Getting data from the database
$products = mysqli_query($connect, "SELECT * FROM products");
$products = mysqli_fetch_all($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Products</title>
</head>

<body>

    <!-- Form for adding a data -->
    <h2>Create new product</h2>
    <form action="./vendor/productCreate.php" method="POST">
        <p>name</p>
        <input type="text" name="name" required>
        <p>descrpiption</p>
        <textarea name="description" required></textarea>
        <p>price</p>
        <input type="number" step="any" name="price" required>
        <button type="sumbit">Create</button>
    </form>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>descrpiption</th>
            <th>price</th>
            <th>✎</th>
            <th>⭯</th>
            <th>✖</th>
        </tr>

        <?php
        //Output all data from the table
        foreach ($products as $product) {
        ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><a href="./comments.php?id=<?= $product[0] ?>" class="comments">comments</a></td>
                <td><a href="./update.php?id=<?= $product[0] ?>">update</a></td>
                <td><a href="./vendor/productDelete.php?id=<?= $product[0] ?>" class="delete">delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>