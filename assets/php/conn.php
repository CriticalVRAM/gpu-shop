<?php
define("DB_PASSWORD", "");

try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=gpu_shop",
        "root",
        DB_PASSWORD
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $error) {
    echo 'Connection failed', '<hr>', $error->getMessage();
}
