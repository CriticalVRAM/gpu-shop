<?php
require "conn.php";

function write($input)
{
    echo '<pre>', print_r($input, true), '</pre>';
}

function selectDB($query)
{
    global $conn;
    return $conn->query($query)->fetch();
}

function selectAllDB($query)
{
    global $conn;
    return $conn->query($query)->fetchAll();
}
function shiftDB($sql, $values)
{
    global $conn;
    $query = $conn->prepare($sql);
    foreach ($values as $index => &$value) {
        $query->bindValue($index + 1, $value);
    }
    $query->execute();
}
