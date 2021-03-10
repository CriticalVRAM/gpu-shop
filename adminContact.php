<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Contact</h1>
    <table class="table container">
        <thead>
            <tr>
                <td>ContactID</td>
                <td>UserID</td>
                <td>Message</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contact";
            foreach (selectAllDB($sql) as $item) :
            ?>

                <tr>
                    <td><?= $item->contactID; ?></td>
                    <td><?= $item->userID ?></td>
                    <td><?= $item->message ?></td>
                    <td><a class="btn btn-danger" href="removeContact.php?contactID=<?= $item->contactID ?>">X</a></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>