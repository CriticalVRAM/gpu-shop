<?php
define("DB_PASSWORD", "6p?PLB14QnDaT4a~");

try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=id16334907_gpu_shop",
        "id16334907_nanibyte",
        DB_PASSWORD
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $error) {
    echo 'Connection failed', '<hr>', $error->getMessage();
}
