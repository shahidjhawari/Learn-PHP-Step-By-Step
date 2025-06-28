<?php
// 1. abs() - Get the absolute value of a number
echo abs(-10); // Output: 10

// 2. round() - Round a number to the nearest integer or specified precision
echo round(3.14159); // Output: 3
echo round(3.14159, 2); // Output: 3.14

// 3. ceil() - Round a number up to the nearest integer
echo ceil(3.1); // Output: 4

// 4. floor() - Round a number down to the nearest integer
echo floor(3.9); // Output: 3

// 5. max() - Find the largest number in a list
echo max(1, 5, 3, 9, 2); // Output: 9

// 6. min() - Find the smallest number in a list
echo min(1, 5, 3, 9, 2); // Output: 1

// 7. pow() - Raise a number to the power of another
echo pow(2, 3); // Output: 8 (2^3)

// 8. sqrt() - Calculate the square root of a number
echo sqrt(16); // Output: 4

// 9. rand() - Generate a random number
echo rand(); // Output: Random number (e.g., 123456)
echo rand(1, 10); // Output: Random number between 1 and 10

// 10. mt_rand() - Generate a random number using the Mersenne Twister algorithm
echo mt_rand(); // Output: Random number
echo mt_rand(1, 100); // Output: Random number between 1 and 100

// 11. number_format() - Format a number with grouped thousands
echo number_format(1234567.89); // Output: 1,234,568
echo number_format(1234567.89, 2); // Output: 1,234,567.89

// 12. is_numeric() - Check if a variable is a number or a numeric string
echo is_numeric("123"); // Output: 1 (true)
echo is_numeric("abc"); // Output: (false)

// 13. intval() - Get the integer value of a variable
echo intval(3.9); // Output: 3
echo intval("42"); // Output: 42

// 14. floatval() - Get the float value of a variable
echo floatval("3.14"); // Output: 3.14

// 15. base_convert() - Convert a number between different bases
echo base_convert("1010", 2, 10); // Output: 10 (binary to decimal)
echo base_convert("10", 10, 2); // Output: 1010 (decimal to binary)

// 16. decbin() - Convert a decimal number to binary
echo decbin(10); // Output: 1010

// 17. bindec() - Convert a binary number to decimal
echo bindec("1010"); // Output: 10

// 18. dechex() - Convert a decimal number to hexadecimal
echo dechex(255); // Output: ff

// 19. hexdec() - Convert a hexadecimal number to decimal
echo hexdec("ff"); // Output: 255

// 20. octdec() - Convert an octal number to decimal
echo octdec("17"); // Output: 15

// 21. decoct() - Convert a decimal number to octal
echo decoct(15); // Output: 17

?>