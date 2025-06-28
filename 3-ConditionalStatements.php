<?php
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote.";
}


$marks = 45;

if ($marks >= 50) {
    echo "You passed!";
} else {
    echo "You failed.";
}


$percentage = 72;

if ($percentage >= 80) {
    echo "Grade: A+";
} elseif ($percentage >= 70) {
    echo "Grade: A";
} elseif ($percentage >= 60) {
    echo "Grade: B";
} else {
    echo "Grade: Fail";
}
?>
