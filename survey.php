<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>
<?php require "./assets/php/func.php" ?>

<body>
    <?php require "./assets/php/nav.php"; ?>
    <h1 class="mb-4">Contact</h1>
    <?php
    if (isset($_REQUEST["msg"])) {
        $msg = $_REQUEST["msg"];
        if ($msg == 'ok') {
            echo '<p class="bg-success">Message sent!</p>';
        } else {
            echo '<p class="bg-danger">Unexpected Error!</p>';
        }
    }
    ?>




    <?php
    $alreadyDid = selectDB("SELECT * FROM survey WHERE userID=$_SESSION[userID]");
    if (!$alreadyDid) :
    ?>
        <form class="form gridCenter" action="sendSurvey.php" method="get">
            <div>
                <label for="find">Did you find what you where looking for?</label>
                <select name="find" id="find">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div>
                <label for="rate">What rating would you give?</label>
                <select name="rate" id="rate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Send Message</button>
        </form>
    <?php else : ?>
        <h2>Thank you for filling out the survey</h2>
    <?php endif; ?>
</body>

</html>