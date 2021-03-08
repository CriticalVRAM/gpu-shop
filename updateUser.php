<?php
session_start();
require "./assets/php/isLogged.php";
require "./assets/php/func.php";

$userID = $_REQUEST["userID"];
$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

$validID = selectDB("SELECT * FROM user WHERE userID=$userID");
if (!$validID) {
    header('Location: ' . "adminUser.php" . "?msg=noID");
    exit();
}

if ($isAdmin) {
    try {
        shiftDB("UPDATE user SET email=?, pass=? WHERE userID=$userID", [$email, $pass]);
        header('Location: ' . "adminUser.php" . "?msg=ok");
    } catch (\Throwable $th) {
        header('Location: ' . "adminUser.php" . "?msg=0");
    }
}
