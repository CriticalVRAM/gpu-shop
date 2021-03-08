<?php
session_start();
require "./assets/php/isLogged.php";
require "./assets/php/func.php";

$userID = $_REQUEST["userID"];

if ($isAdmin) {
    try {
        shiftDB("DELETE FROM user WHERE userID=?", [$userID]);
        header('Location: ' . $_SERVER['HTTP_REFERER'] . "?err=0");
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . "?err=1");
    }
}
