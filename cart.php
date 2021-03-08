<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php"; ?>
    <h1 class="mb-4">Cart</h1>
    <table class="table container">
        <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $userID = $_SESSION["userID"];
            $sql = "SELECT * FROM cart_product cp JOIN product p ON cp.productID = p.productID WHERE cp.userID = {$userID}";
            foreach (selectAllDB($sql) as $item) :
            ?>
                <tr>
                    <td><?= $item->name; ?></td>
                    <td><?= $item->price ?></td>
                    <td><?= $item->quantity ?></td>
                    <td><a class="btn btn-danger" href="./assets/php/deleteFromCart.php?productID=<?= $item->productID ?>">X</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>