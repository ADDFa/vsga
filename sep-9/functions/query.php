<?php

function query(string $query)
{
    $conn = new mysqli("localhost", "root", "", "bukit_kaba");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($query);

    if (is_bool($result)) return $result;

    $data = [];
    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    $conn->close();

    return $data;
}
