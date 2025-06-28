<?php
// 1. date() - Formats a local date and time
echo date("Y-m-d"); // Output: Current date in "YYYY-MM-DD" format
echo date("H:i:s"); // Output: Current time in "HH:MM:SS" format

// 2. time() - Returns the current Unix timestamp
echo time(); // Output: Current timestamp (seconds since Jan 1, 1970)

// 3. mktime() - Returns the Unix timestamp for a specific date
$timestamp = mktime(0, 0, 0, 12, 25, 2025);
echo date("Y-m-d", $timestamp); // Output: 2025-12-25

// 4. strtotime() - Parses an English textual datetime into a Unix timestamp
$timestamp = strtotime("next Monday");
echo date("Y-m-d", $timestamp); // Output: Date of the next Monday

// 5. getdate() - Returns an associative array with date and time information
$dateInfo = getdate();
echo $dateInfo['year']; // Output: Current year
echo $dateInfo['month']; // Output: Current month name

// 6. checkdate() - Validates a Gregorian date
if (checkdate(2, 29, 2024)) {
    echo "Valid date"; // Output: Valid date (2024 is a leap year)
} else {
    echo "Invalid date";
}

// 7. DateTime class - Provides an object-oriented way to handle dates
$date = new DateTime("2025-06-28");
echo $date->format("Y-m-d"); // Output: 2025-06-28

// 8. DateTime::modify() - Modifies the date
$date->modify("+1 day");
echo $date->format("Y-m-d"); // Output: 2025-06-29

// 9. DateTime::diff() - Calculates the difference between two dates
$date1 = new DateTime("2025-06-28");
$date2 = new DateTime("2025-07-01");
$interval = $date1->diff($date2);
echo $interval->days; // Output: 3 (difference in days)

// 10. date_default_timezone_set() - Sets the default timezone
date_default_timezone_set("America/New_York");
echo date("Y-m-d H:i:s"); // Output: Current date and time in New York timezone

// 11. date_default_timezone_get() - Gets the default timezone
echo date_default_timezone_get(); // Output: America/New_York

?>