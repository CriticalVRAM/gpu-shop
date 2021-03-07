<?php
session_start();
require "isLogged.php";
require "func.php";

$userID = $_SESSION["userID"];
$productID = $_REQUEST["productID"];

if ($isLogged) {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        deleteFromCart($userID, $productID);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo 1;
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo 5;
    }
}
