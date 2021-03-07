<?php
session_start();
require "func.php";
require "isLogged.php";

if (!$isLogged) echo 0;
else if ($isAdmin) echo 2;
else if ($isLogged) {

    $userID = $_SESSION["userID"];
    $productID = $_REQUEST["productID"];
    $isNew = empty(queryDB("SELECT quantity FROM cart_product WHERE userID={$userID}"));

    try {
        addToCart($userID, $productID, (int)$isNew);
        echo 1;
    } catch (\Throwable $th) {
        echo 4;
        echo $th;
    }
} else echo 5;
