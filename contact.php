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
    <form class="form gridCenter" action="sendContact.php" method="get">
        <textarea required name="message" id="message" cols="30" rows="7" placeholder="Enter message here..."></textarea>
        <button class="btn btn-primary" type="submit">Send Message</button>
    </form>
</body>

</html>