<?php
require "func.php";
echo json_encode(queryAllDB("SELECT type FROM product"));
