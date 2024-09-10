<?php

require_once("../app/core.php");

$id = $_GET["id"];
$result = query("DELETE FROM pesanan WHERE id='$id'");

header("Location: http://localhost:8000/views/pesanan.php");
