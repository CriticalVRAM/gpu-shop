<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Users</h1>
    <?php
    if (isset($_REQUEST["msg"])) {
        $msg = $_REQUEST["msg"];
        if ($msg == 'ok') {
            echo '<p class="bg-success">User updated!</p>';
        } else if ($msg == "noID") {
            echo '<p class="bg-danger">Invalid userID!</p>';
        } else {
            echo '<p class="bg-danger">Unexpected Error!</p>';
        }
    }
    ?>
    <table class="table container">
        <thead>
            <tr>
                <td>UserID</td>
                <td>Email</td>
                <td>Password</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM user";
            foreach (selectAllDB($sql) as $user) :
            ?>
                <?php if ($user->userID != 11) : ?>
                    <tr>
                        <td><?= $user->userID; ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= md5($user->pass) ?></td>
                        <td><a class="btn btn-danger" href="removeUser.php?userID=<?= $user->userID ?>">X</a></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form action="updateUser.php" method="post">
        <input required name="userID" placeholder="UserID" type="text">
        <input required placeholder="Email..." type="email" name="email" id="email">
        <input required name="pass" placeholder="Password..." type="password">
        <button class="btn btn-primary" type="submit">Update User</button>
    </form>
</body>

</html>