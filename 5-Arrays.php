<?php
$colors = ["Red", "Green", "Blue"];

//Indexing arrays
echo $colors[0] . "<br>"; 
echo $colors[1] . "<br>"; 
echo $colors[2] . "<br>"; 


// Associative arrays
$student = [
    "name" => "Shahid",
    "age" => 24,
    "city" => "Jhawrian"
];

echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "City: " . $student["city"];

// Multidimensional arrays
$students = [
    ["Shahid", 24, "Jhawrian"],
    ["Ahmed", 22, "Lahore"],
    ["Sara", 21, "Karachi"]
];

echo $students[0][0] . " - " . $students[0][2] . "<br>";
echo $students[1][0] . " - " . $students[1][2];          
?>

