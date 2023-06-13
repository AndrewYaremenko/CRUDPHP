<?php

require_once("./config/connect.php");
$goods = mysqli_query($connect, "SELECT * FROM goods");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Goods</title>
</head>

<body>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>descrpiption</th>
            <th>price</th>
            <th>⭯</th>
            <th>✖</th>
        </tr>
        <?php
        foreach ($goods as $item) {
        ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
                <td><a href="./update.php?id=<?= $item[0] ?>">update</a></td>
                <td><a href="./vendor/delete.php?id=<?= $item[0] ?>">delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <h2>Create new product</h2>
    <form action="./vendor/create.php" method="POST">
        <p>name</p>
        <input type="text" name="name">
        <p>descrpiption</p>
        <textarea name="description"></textarea>
        <p>price</p>
        <input type="number" step="any" name="price">
        <button type="sumbit">Create</button>
    </form>
</body>

</html>