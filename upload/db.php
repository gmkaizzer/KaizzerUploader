<?php
$servername = getenv('DB_SERVERNAME') ?: 'localhost';
$username = getenv('DB_USERNAME') ?: 'uploader_user';
$password = getenv('DB_PASSWORD') ?: 'Christian30$$';
$database = getenv('DB_DATABASE') ?: 'uploader_db';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error, 3, "error_log.txt");
    die("Connection failed. Please try again later.");
}
?>