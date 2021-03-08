<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Product</h1>
    <table class="table container">
        <thead>
            <tr>
                <td>ProductID</td>
                <td>Name</td>
                <td>Type</td>
                <td>Price</td>
                <td>Image URL</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM product";
            foreach (selectAllDB($sql) as $product) :
            ?>
                <tr>
                    <td><?= $product->productID ?></td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->type ?></td>
                    <td><?= $product->price ?></td>
                    <td><?= $product->img ?></td>
                    <td><a class="btn btn-danger" href="removeProduct.php?productID=<?= $product->productID ?>">X</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>