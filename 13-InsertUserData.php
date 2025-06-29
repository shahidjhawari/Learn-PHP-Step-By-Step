<?php
include '12-connection.php';

$name = "John Doe";
$email = "johndoe@example.com";
$phone = "1234567890";
$password = "securepassword";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";

// Prepare and bind
if (!$conn) {
    die("Invalid database connection.");
}

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Statement preparation failed: " . $conn->error);
}
$stmt->bind_param("ssss", $name, $email, $phone, $hashedPassword);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>