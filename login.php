<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>

<body>

    <?php require "./assets/php/nav.php" ?>

    <h1 class="mb-5">Login</h1>

    <form action="login-process.php" method="post">
        <input placeholder="Email" name="email" type="email" required>
        <input placeholder="Password" name="pass" type="password" required>
        <button type="submit">Log in</button>
    </form>

</body>

</html>