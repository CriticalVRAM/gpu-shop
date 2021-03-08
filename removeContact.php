<?php
session_start();
require "./assets/php/isLogged.php";
require "./assets/php/func.php";

$contactID = $_REQUEST["contactID"];

if ($isAdmin) {
    try {
        shiftDB("DELETE FROM contact WHERE contactID=?", [$contactID]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . "?err=1");
    }
}
