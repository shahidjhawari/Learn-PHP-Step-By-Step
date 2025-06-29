<?php
include '12-connection.php';

//http://localhost/learnphp/15-DeleteUserData.php?id=1

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input to prevent SQL injection

    // SQL query to delete the user with the specified ID
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID specified.";
}

$conn->close();
?>