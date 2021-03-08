<?php
require "func.php";
echo json_encode(selectAllDB("SELECT * FROM product"));
