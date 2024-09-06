<?php

require_once("./config.php");

try {
    $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
} catch (\Exception $e) {
    die("Gagal terhubung dengan database: " . $e);
}
