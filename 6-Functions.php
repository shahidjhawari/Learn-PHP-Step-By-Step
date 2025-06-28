<?php
function greet() {
    echo "Assalamualaikum, Shahid!<br>";
}

greet();
greet();


// Function with parameters
function welcome($name) {
    echo "Welcome, $name!<br>";
}

welcome("Shahid");
welcome("Ahmed");


// Function with return value
function square($number) {
    return $number * $number;
}

$result = square(5);
echo "Square of 5 is: $result";
?>

