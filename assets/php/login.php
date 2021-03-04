<?php
require_once "func.php";

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql = "SELECT * FROM user WHERE email='admin@admin.com' AND pass='admin'";
echo json_encode(queryDB($sql));
