<?php
require "./assets/php/func.php";

$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

$sql = "SELECT * FROM user WHERE email='{$email}' AND pass='{$pass}'";
$res = queryDB($sql);

if (isset($res->userID)) {
    session_start();
    $_SESSION["userID"] = $res->userID;
    header("Location: index.php");
} else {
    header("Location: login.php?err=1");
}
