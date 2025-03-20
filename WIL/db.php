<?php
// Database configuration
$host = 'localhost'; // Change this if your database is hosted elsewhere
$dbname = 'RealHome'; // The name of the database to create

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    echo "Database '$dbname' created successfully.<br>";

    // Use the newly created database
    $pdo->exec("USE $dbname");

    // SQL to create the users table
    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL UNIQUE,
            email VARCHAR(100) NOT NULL UNIQUE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ";

    // Execute the query to create the users table
    $pdo->exec($sql);
    echo "Table 'users' created successfully.<br>";

} catch (PDOException $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>