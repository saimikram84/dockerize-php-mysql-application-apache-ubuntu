<?php
$host = 'mysql';
$port = '3306';
$database = 'amos';
$username = 'root';
$password = 'hs4g55ShFwX6zFo';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $createTableSQL = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL 
    )";

    // Execute the query
    $conn->exec($createTableSQL);
    return $conn;
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}