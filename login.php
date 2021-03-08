<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>

    <h1 class="mb-5">Login</h1>

    <?php
    if (isset($_REQUEST["msg"])) {
        $msg = $_REQUEST["msg"];
        if ($msg == 'noLogin') {
            echo '<p class="bg-danger">Invalid email or password!</p>';
        } else if ($msg == 'ok') {
            echo '<p class="bg-success">Register successful! Please log in.</p>';
        } else {
            echo '<p class="bg-danger">Unexpected Error!</p>';
        }
    }
    ?>

    <form class="gridCenter" action="loginProcess.php" method="post">
        <input placeholder="Email" name="email" type="email" required>
        <input placeholder="Password" name="pass" type="password" required>
        <button class="btn btn-primary" type="submit">Log in</button>
    </form>

</body>

</html>