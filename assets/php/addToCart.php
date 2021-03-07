<?php
// require "func.php";
session_start();
require "isLogged.php";

if ($is_admin) echo 2;
else if ($is_logedin) echo 1;
else echo 0;
