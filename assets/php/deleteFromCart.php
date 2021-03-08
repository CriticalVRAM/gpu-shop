<?php
session_start();
require "isLogged.php";
require "func.php";

$userID = $_SESSION["userID"];
$productID = $_REQUEST["productID"];

if ($isLogged) {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        shiftDB("DELETE FROM cart_product WHERE userID=? AND productID=?", [$userID, $productID]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo 1;
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo 5;
    }
}
