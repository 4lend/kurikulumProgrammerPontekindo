<?php
//connect pakai pdo
$server = "localhost";
$username = "ryota";
$password = "asem1234";
$dbname = "klikik";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}