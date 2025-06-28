<?php
// 1. strlen() - Get the length of a string
$text = "Hello, World!";
echo strlen($text); // Output: 13

// 2. str_word_count() - Count the number of words in a string
echo str_word_count($text); // Output: 2

// 3. strrev() - Reverse a string
echo strrev($text); // Output: !dlroW ,olleH

// 4. strpos() - Find the position of the first occurrence of a substring
echo strpos($text, "World"); // Output: 7

// 5. str_replace() - Replace all occurrences of a substring with another substring
echo str_replace("World", "PHP", $text); // Output: Hello, PHP!

// 6. strtolower() - Convert a string to lowercase
echo strtolower($text); // Output: hello, world!

// 7. strtoupper() - Convert a string to uppercase
echo strtoupper($text); // Output: HELLO, WORLD!

// 8. ucfirst() - Capitalize the first character of a string
echo ucfirst("hello"); // Output: Hello

// 9. lcfirst() - Convert the first character of a string to lowercase
echo lcfirst("Hello"); // Output: hello

// 10. ucwords() - Capitalize the first character of each word in a string
echo ucwords("hello world"); // Output: Hello World

// 11. trim() - Remove whitespace (or other characters) from both ends of a string
echo trim("  Hello, World!  "); // Output: Hello, World!

// 12. ltrim() - Remove whitespace (or other characters) from the beginning of a string
echo ltrim("  Hello, World!  "); // Output: Hello, World!  

// 13. rtrim() - Remove whitespace (or other characters) from the end of a string
echo rtrim("  Hello, World!  "); // Output:   Hello, World!

// 14. str_repeat() - Repeat a string a specified number of times
echo str_repeat("PHP ", 3); // Output: PHP PHP PHP 

// 15. substr() - Extract a portion of a string
echo substr($text, 7, 5); // Output: World

// 16. strcmp() - Compare two strings (case-sensitive)
echo strcmp("Hello", "hello"); // Output: -1 (not equal)

// 17. strcasecmp() - Compare two strings (case-insensitive)
echo strcasecmp("Hello", "hello"); // Output: 0 (equal)

// 18. explode() - Split a string into an array by a delimiter
$parts = explode(", ", $text);
print_r($parts); // Output: Array ( [0] => Hello [1] => World! )

// 19. implode() - Join array elements into a string with a delimiter
$array = ["Hello", "World"];
echo implode(", ", $array); // Output: Hello, World

// 20. number_format() - Format a number with grouped thousands
echo number_format(1234567.89, 2); // Output: 1,234,567.89

// 21. htmlspecialchars() - Convert special characters to HTML entities
$html = "<h1>Hello, World!</h1>";
echo htmlspecialchars($html); // Output: &lt;h1&gt;Hello, World!&lt;/h1&gt;

// 22. addslashes() - Add backslashes before certain characters
echo addslashes("It's a PHP string!"); // Output: It\'s a PHP string!

// 23. stripslashes() - Remove backslashes added by addslashes()
echo stripslashes("It\'s a PHP string!"); // Output: It's a PHP string!

// 24. md5() - Calculate the MD5 hash of a string
echo md5("password"); // Output: 5f4dcc3b5aa765d61d8327deb882cf99

// 25. sha1() - Calculate the SHA-1 hash of a string
echo sha1("password"); // Output: 5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8

?>