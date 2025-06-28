<?php
// 1. array_push() - Add elements to the end of an array
$fruits = ["apple", "banana"];
array_push($fruits, "cherry", "date");
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )

// 2. array_pop() - Remove the last element of an array
array_pop($fruits);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry )

// 3. array_shift() - Remove the first element of an array
array_shift($fruits);
print_r($fruits); // Output: Array ( [0] => banana [1] => cherry )

// 4. array_unshift() - Add elements to the beginning of an array
array_unshift($fruits, "kiwi", "mango");
print_r($fruits); // Output: Array ( [0] => kiwi [1] => mango [2] => banana [3] => cherry )

// 5. array_merge() - Merge two or more arrays
$vegetables = ["carrot", "broccoli"];
$merged = array_merge($fruits, $vegetables);
print_r($merged); // Output: Array ( [0] => kiwi [1] => mango [2] => banana [3] => cherry [4] => carrot [5] => broccoli )

// 6. array_keys() - Get all keys of an array
$assocArray = ["name" => "John", "age" => 25];
$keys = array_keys($assocArray);
print_r($keys); // Output: Array ( [0] => name [1] => age )

// 7. array_values() - Get all values of an array
$values = array_values($assocArray);
print_r($values); // Output: Array ( [0] => John [1] => 25 )

// 8. in_array() - Check if a value exists in an array
$isInArray = in_array("banana", $fruits);
var_dump($isInArray); // Output: bool(true)

// 9. array_search() - Search for a value and return its key
$key = array_search("banana", $fruits);
var_dump($key); // Output: int(2)

// 10. sort() - Sort an array in ascending order
sort($fruits);
print_r($fruits); // Output: Array ( [0] => banana [1] => cherry [2] => kiwi [3] => mango )

// 11. rsort() - Sort an array in descending order
rsort($fruits);
print_r($fruits); // Output: Array ( [0] => mango [1] => kiwi [2] => cherry [3] => banana )

// 12. array_reverse() - Reverse the order of an array
$reversed = array_reverse($fruits);
print_r($reversed); // Output: Array ( [0] => banana [1] => cherry [2] => kiwi [3] => mango )

// 13. array_slice() - Extract a portion of an array
$sliced = array_slice($fruits, 1, 2);
print_r($sliced); // Output: Array ( [0] => kiwi [1] => cherry )

// 14. array_splice() - Remove and replace elements in an array
array_splice($fruits, 1, 2, ["grape", "orange"]);
print_r($fruits); // Output: Array ( [0] => mango [1] => grape [2] => orange [3] => banana )

// 15. count() - Count the number of elements in an array
$count = count($fruits);
var_dump($count); // Output: int(4)

// 16. array_unique() - Remove duplicate values from an array
$numbers = [1, 2, 2, 3, 4, 4];
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 )

?>