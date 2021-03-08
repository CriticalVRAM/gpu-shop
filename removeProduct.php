<?php
session_start();
require "./assets/php/isLogged.php";
require "./assets/php/func.php";

$productID = $_REQUEST["productID"];

if ($isAdmin) {
    try {
        shiftDB("DELETE FROM product WHERE productID=?", [$productID]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . "?err=1");
    }
}
