<?php
require 'load_env.php';
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Please log in to upload files.");
}

function uploadFile($file, $userId) {
    // Validate file input
    if (!isset($file['name']) || $file['error'] != 0) {
        return 'Invalid file input';
    }

    // Sanitize file name
    $fileName = basename(filter_var($file['name'], FILTER_SANITIZE_STRING));

    // Set upload directory
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Move uploaded file to the directory
    $uploadFilePath = $uploadDir . $fileName;
    if (move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO files (user_id, file_name, file_path) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $userId, $fileName, $uploadFilePath);
        $stmt->execute();
        $stmt->close();
        return 'File uploaded successfully';
    } else {
        return 'File upload failed';
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = uploadFile($_FILES['file'], $_SESSION['user_id']);
    echo $result;
}
?>