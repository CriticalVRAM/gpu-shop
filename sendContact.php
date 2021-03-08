<?php
session_start();
require "./assets/php/func.php";
require "./assets/php/isLogged.php";

if ($isLogged) {
    $sql = "INSERT INTO contact(contactID, userID, message) VALUES(?, ?, ?)";
    shiftDB($sql, [null, $_SESSION["userID"], $_REQUEST["message"]]);
    header('Location: ' . $_SERVER['HTTP_REFERER'] . "?msg=ok");
}
