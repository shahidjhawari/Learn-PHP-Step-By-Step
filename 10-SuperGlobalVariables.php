<?php
// 1. $_GET - Used to collect data sent via URL parameters
// Example: URL: http://example.com?name=John
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']); // Output: Hello, John
}

// 2. $_POST - Used to collect data sent via an HTML form (method="post")
// Example: Form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Form submitted with name: " . htmlspecialchars($_POST['name']);
}

// 3. $_REQUEST - Contains data from both $_GET, $_POST, and $_COOKIE
if (isset($_REQUEST['name'])) {
    echo "Hello, " . htmlspecialchars($_REQUEST['name']);
}

// 4. $_SERVER - Contains server and execution environment information
echo $_SERVER['SERVER_NAME']; // Output: The server's hostname (e.g., localhost)
echo $_SERVER['REQUEST_METHOD']; // Output: GET or POST

// 5. $_FILES - Used to handle file uploads
// Example: Handling a file upload
if (isset($_FILES['uploaded_file'])) {
    $fileName = $_FILES['uploaded_file']['name'];
    $fileTmpName = $_FILES['uploaded_file']['tmp_name'];
    move_uploaded_file($fileTmpName, "uploads/" . $fileName);
    echo "File uploaded successfully!";
}

// 6. $_COOKIE - Used to access cookies
// Example: Setting and accessing a cookie
setcookie("user", "John", time() + 3600); // Set a cookie
if (isset($_COOKIE['user'])) {
    echo "Hello, " . htmlspecialchars($_COOKIE['user']); // Output: Hello, John
}

// 7. $_SESSION - Used to manage session variables
// Example: Starting a session and setting a session variable
session_start();
$_SESSION['user'] = "John";
echo "Session user: " . $_SESSION['user']; // Output: Session user: John

// 8. $_ENV - Contains environment variables
// Example: Accessing an environment variable
if (isset($_ENV['PATH'])) {
    echo "System PATH: " . $_ENV['PATH'];
}

// 9. $GLOBALS - Contains all global variables
// Example: Accessing a global variable
$globalVar = "I am global!";
echo $GLOBALS['globalVar']; // Output: I am global!

?>