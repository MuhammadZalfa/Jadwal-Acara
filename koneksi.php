<?php

$db = 'id22209553_projectpas';
$conn = new mysqli('localhost', 'root', '', $db);

if ($conn->connect_error) {
    die("Koneksi Error: " .
        $conn->connect_error);
}
