<?php
// === HOSTING DATABASE CREDENTIALS ===
$host = "localhost";        // Usually 'localhost' for most hosting providers
$dbname = "your_db_name";   // Replace with your actual database name
$username = "your_db_user"; // Replace with your database username
$password = "your_db_pass"; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set PDO error mode to exception for easier debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optional: Echo a success message (Remove or comment out when site is live)
    // echo "Connected successfully"; 

} catch(PDOException $e) {
    // If connection fails, display an error message
    die("ERROR: Could not connect to database. " . $e->getMessage());
}
?>