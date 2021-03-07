<?php
require "func.php";
echo json_encode(queryAllDB("SELECT * FROM product"));
