<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>

    <h1 class="mb-5">Register</h1>

    <?php
    if (isset($_REQUEST["msg"])) {
        $msg = $_REQUEST["msg"];
        if ($msg == "inUse") {
            echo '<p class="bg-danger">Sorry! Email adress already in use.</p>';
        } else if ($msg == "noURL") {
            echo '<p class="bg-danger">For security resons URL navigation is prohibited.</p>';
        } else if ($msg == "badData") {
            echo '<p class="bg-danger">Invalid email data</p>';
        } else {
            echo '<p class="bg-danger">Unexpected Error!</p>';
        }
    }
    ?>

    <form class="gridCenter" action="./assets/php/registerProcess.php" method="post">
        <input placeholder="Email" name="email" type="email" required>
        <input placeholder="Password" name="pass" type="password" required>
        <div>
            <input required type="checkbox" name="terms" id="terms">
            <label for="terms">I accept the terms and conitions of use.</label>
        </div>
        <button class="btn btn-primary" type="submit">Register</button>
    </form>

</body>

</html>