<?php
session_start();
require "func.php";
require "isLogged.php";

if (!$isLogged) echo 0;
else if ($isAdmin) echo 2;
else if ($isLogged) {

    $userID = $_SESSION["userID"];
    $productID = $_REQUEST["productID"];
    $isNew = empty(selectDB("SELECT quantity FROM cart_product WHERE userID={$userID} AND productID={$productID}"));

    try {
        if ((int)$isNew) {
            $sql = "INSERT INTO cart_product(userID, productID, quantity) VALUES (?, ?, ?)";
            shiftDB($sql, [$userID, $productID, 1]);
        } else {
            $sql = "UPDATE cart_product SET quantity=quantity+1 WHERE userID=? AND productID=?";
            shiftDB($sql, [$userID, $productID]);
        }
        echo 1;
    } catch (\Throwable $th) {
        echo 4;
        echo $th;
    }
} else echo 5;
