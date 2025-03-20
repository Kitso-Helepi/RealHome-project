<?php
session_start(); // Start the session

// Database configuration
$host = 'localhost'; // Change this if your database is hosted elsewhere
$dbname = 'RealHome'; // The name of the database

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Get the input values from the form
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $confirmPassword = $_GET['Confirm'];

        // Validate that the passwords match
        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            exit();
        }

        // Check if the user already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email OR name = :name");
        $stmt->execute(['email' => $email, 'name' => $name]);
        if ($stmt->rowCount() > 0) {
            echo "User  with this name or email already exists.";
            exit();
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the SQL statement to insert the new user
        $stmt = $pdo->prepare("INSERT INTO users (name, password, email) VALUES (:name, :password, :email)");
        $stmt->execute(['name' => $name, 'password' => $hashedPassword, 'email' => $email]);

        echo "Registration successful! You can now log in.";
        // Optionally, redirect to the login page
        // header("Location: log.php");
        // exit();
    }
} catch (PDOException $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>