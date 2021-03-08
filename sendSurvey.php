<?php
session_start();
require "./assets/php/func.php";
require "./assets/php/isLogged.php";

if ($isLogged) {
    $sql = "INSERT INTO survey(surveyID, userID, question1, question2) VALUES (?,?,?,?)";
    shiftDB($sql, [null, $_SESSION["userID"], $_REQUEST["find"], $_REQUEST["rate"]]);
    header('Location: ' . $_SERVER['HTTP_REFERER'] . "?msg=ok");
}
