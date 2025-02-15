<?php
require 'load_env.php';
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Please log in to view your profile.");
}

$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT file_name, file_path FROM files WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($fileName, $filePath);

echo "<h1>Your Uploaded Files</h1>";
echo "<ul>";
while ($stmt->fetch()) {
    echo "<li>$fileName - <a href='$filePath' download>Download</a> - <a href='delete_file.php?file=$filePath'>Delete</a></li>";
}
echo "</ul>";

$stmt->close();
?>