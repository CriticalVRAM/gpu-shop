<?php
$isAdmin = false;
$isLogged = isset($_SESSION["userID"]);
if ($isLogged) $isAdmin = $_SESSION["userID"] == 6;
