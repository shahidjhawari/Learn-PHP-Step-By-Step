<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "learnphp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn = false){
    die("Connection failed: ");
}else {
    echo "Connected successfully";
}
?>