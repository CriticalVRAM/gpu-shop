<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require "./assets/php/header.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Welcome Admin</h1>
    <div class="gridCenter">
        <a href=" adminUser.php">User</a>
        <a href="adminProduct.php">Product</a>
        <a href="adminSurvey.php">Survey</a>
        <a href="adminContact.php">Contact</a>
    </div>
</body>

</html>