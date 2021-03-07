<?php
$is_admin = 0;
$is_logedin = isset($_SESSION["userID"]);
if ($is_logedin) $is_admin = $_SESSION["userID"] == 6;
