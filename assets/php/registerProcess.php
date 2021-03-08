<?php
require "func.php";
$email = addslashes($_REQUEST["email"]);
$pass = $_REQUEST["pass"];

if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=noURL');
    exit;
}
$regEx = '/^[^@\s]+@[^@\s\.]+\.[^@\.\s]+$/';
if (!preg_match($regEx, $email)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=badData');
    exit;
}

$inUse = selectDB("SELECT email FROM user WHERE email='{$email}'");
if ($inUse) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=inUse');
    exit;
}


$sql = "INSERT INTO user(userID, email, pass) VALUES(null, ?, ?)";
try {
    shiftDB($sql, [$email, $pass]);
    header('Location: ../../login.php?msg=ok');
} catch (\Throwable $th) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=Unexpected');
}
