<?php
require "conn.php";

function write($input)
{
    echo '<pre>', print_r($input, true), '</pre>';
}

function queryDB($query)
{
    global $conn;
    return $conn->query($query)->fetch();
}

function queryAllDB($query)
{
    global $conn;
    return $conn->query($query)->fetchAll();
}


function addToCart($userID, $productID, $isNew)
{
    global $conn;
    if ($isNew) {
        $sql = "INSERT INTO cart_product(userID, productID, quantity) VALUES (?, ?, ?)";
        $insert = $conn->prepare($sql);

        $insert->bindParam(1, $userID);
        $insert->bindParam(2, $productID);
        $insert->bindValue(3, 1);

        $insert->execute();
    } else if (!$isNew) {
        $sql = "UPDATE cart_product SET quantity=quantity+1 WHERE userID=? AND productID=?";
        $update = $conn->prepare($sql);

        $update->bindParam(1, $userID);
        $update->bindParam(2, $productID);

        $update->execute();
    }
}
