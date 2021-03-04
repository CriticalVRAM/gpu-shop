<?php
require_once "conn.php";

function write($input)
{
    echo '<pre>', print_r($input, true), '</pre>';
}

function queryDB($query)
{
    global $conn;
    return $conn->query($query)->fetchAll();
}
