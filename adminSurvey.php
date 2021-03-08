<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Survey</h1>
    <p class="small">All survey data must remain intact.</p>
    <table class="table container">
        <thead>
            <tr>
                <td>SurveyID</td>
                <td>UserID</td>
                <td>Found item</td>
                <td>Store Rating</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM survey";
            foreach (selectAllDB($sql) as $item) :
            ?>
                <tr>
                    <td><?= $item->surveyID; ?></td>
                    <td><?= $item->userID ?></td>
                    <td><?= $item->question1 ?></td>
                    <td><?= $item->question2 ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>